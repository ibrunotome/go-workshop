package handler

import (
	"encoding/json"
	"io/ioutil"
	"net/http"
	"strings"

	mlogin "github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/models/login"
	gjwt "github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/pkg/gjwt"
	"github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/pkg/logrus"
	"github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/pkg/util"
	repol "github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/repo/login"
)

func Auth(w http.ResponseWriter, r *http.Request) {
	if strings.ToUpper(r.Method) == http.MethodPost {
		// Do login
		SignInJson(w, r)
	} else {
		// redirect register
		jsonstr := `{"status":"error","message":"O método permitido é POST!"}`
		w.WriteHeader(http.StatusMethodNotAllowed)
		w.Write([]byte(jsonstr))
		return
	}
}

// Do login JSON
func SignInJson(w http.ResponseWriter, r *http.Request) {
	if http.MethodPost != strings.ToUpper(r.Method) {
		w.WriteHeader(http.StatusMethodNotAllowed)
		jsonstr := `{"status":"error","message":"O método é obrigatório! [POST]"}`
		w.Write([]byte(jsonstr))
		return
	}

	content_type := strings.ToLower(r.Header.Get("Content-Type"))
	if content_type != "application/json" {
		w.WriteHeader(http.StatusUnsupportedMediaType)
		jsonstr := `{"status":"error","message":"Content-type é obrigatório!"}`
		w.Write([]byte(jsonstr))
		return
	}

	body, err := ioutil.ReadAll(r.Body)
	defer r.Body.Close()

	if err != nil {
		logrus.WithFields(logrus.Filelds{
			"version": "1.0.0",
			"host":    "goworkshop.s3wf.com",
			"handler": "Login",
			"method":  "ReadAll",
		}).Error(err.Error())

		w.WriteHeader(http.StatusBadRequest)
		jsonstr := `{"status":"error","message":"Ocorreu um erro ao ler o corpo da solicitação!"}`
		w.Write([]byte(jsonstr))
		return
	}

	var ljson mlogin.AdLoginAuth
	err = json.Unmarshal(body, &ljson)
	if err != nil {
		logrus.WithFields(logrus.Filelds{
			"version": "1.0.0",
			"host":    "goworkshop.s3wf.com",
			"handler": "Login",
			"method":  "Unmarshal",
		}).Error(err.Error())

		w.WriteHeader(http.StatusBadRequest)
		jsonstr := `{"status":"error","message":"Ocorreu um erro ao tentar decodificar o json recebido!"}`
		w.Write([]byte(jsonstr))
		return
	}

	login := ljson.Login
	// only lower
	login = strings.TrimSpace(strings.ToLower(login))
	password := ljson.Password

	if len(login) == 0 {
		w.WriteHeader(http.StatusBadRequest)
		jsonstr := `{"status":"error","message":"O campo login é obrigatório!"}`
		w.Write([]byte(jsonstr))
		return
	}

	if len(password) == 0 {
		w.WriteHeader(http.StatusBadRequest)
		jsonstr := `{"status":"error","message":"O campo password é obrigatório!"}`
		w.Write([]byte(jsonstr))
		return
	}

	ok1, DLogin, code := repol.ValideGetLogin(login, password)
	// authenticates the user in the bank
	if ok1 {
		msgx := "Usuario encontrado "

		// this is required
		if DLogin.Login.Id <= 0 {
			jsonstr := `{"status":"error","message":"Usuario não encontrado!"}`
			w.WriteHeader(http.StatusBadRequest)
			w.Write([]byte(jsonstr))
			return
		}

		// this is required
		if len(DLogin.Login.Uuiduser) <= 0 {
			jsonstr := `{"status":"error","message":"Uuid de Usuario não encontrado!"}`
			w.WriteHeader(http.StatusBadRequest)
			w.Write([]byte(jsonstr))
			return
		}

		ok, tokenjwt, expires, tokenMsg := gjwt.GetTokenLogin(w, r)
		if !ok {
			jsonstr := `{"status":"error","message":"Erro ao gerar o token de acesso!"}`
			w.WriteHeader(http.StatusBadRequest)
			w.Write([]byte(jsonstr))
			return
		}

		// insert log acess
		repol.InsertLog(login, r.RemoteAddr)
		// struct
		DLogin.Message = msgx
		DLogin.Status = "success"

		DLogin.TokenJwt = tokenjwt
		DLogin.Expires = expires
		DLogin.TokenMsg = tokenMsg
		//DLogin.Login.TokenEnpoint = tokenEnpointsFw // token sem expirar..

		// Marshal of the structure
		b, err := json.Marshal(DLogin)
		if err != nil {
			logrus.WithFields(logrus.Filelds{
				"version": "1.0.0",
				"host":    "goworkshop.s3wf.com",
				"handler": "Login",
				"method":  "Marshal",
			}).Error(err.Error())

			jsonstr := util.BuildJSON(`{"status":"error","message":"`, err.Error(), `"}`)
			w.WriteHeader(http.StatusBadRequest)
			w.Write([]byte(jsonstr))
			return
		}

		// string json login
		jsonGetLogin := string(b)
		w.WriteHeader(http.StatusOK)
		w.Write([]byte(jsonGetLogin))
		return
	}

	jsonstr := `{"status":"error","message":"Usuário não pode ser autenticado!"}`
	w.WriteHeader(code)
	w.Write([]byte(jsonstr))
	return
}

// // get login/{email}
// func LoginExist(login string, w http.ResponseWriter, r *http.Request) {

// 	if strings.ToUpper(r.Method) != http.MethodGet {
// 		jsonstr := `{"status":"error","message":"O método permitido é  GET!"}`
// 		w.WriteHeader(http.StatusMethodNotAllowed)
// 		w.Write([]byte(jsonstr))
// 		return
// 	}

// 	//valid login
// 	login = strings.TrimSpace(strings.ToLower(login))

// 	if len(login) == 0 {
// 		w.WriteHeader(http.StatusBadRequest)
// 		jsonstr := `{"status":"error","message":"Não encontramos login!"}`
// 		w.Write([]byte(jsonstr))
// 		return
// 	}

// 	if repol.ExistLogin(login) {
// 		w.WriteHeader(http.StatusOK)
// 		jsonstr := `{"status":"success","message":"usuário existe!"}`
// 		w.Write([]byte(jsonstr))
// 		return
// 	} else {
// 		w.WriteHeader(http.StatusBadRequest)
// 		jsonstr := `{"status":"success","message":"usuário não existe!"}`
// 		w.Write([]byte(jsonstr))
// 		return
// 	}
// }

// // get login/{login}
// func FindGetLogin(login string, w http.ResponseWriter, r *http.Request) {
// 	login = strings.TrimSpace(strings.ToLower(login))
// 	if len(login) == 0 {
// 		w.WriteHeader(http.StatusBadRequest)
// 		jsonstr := `{"status":"error","message":"Login não pode ser vazio!"}`
// 		w.Write([]byte(jsonstr))
// 		return
// 	}

// 	// valid login user
// 	if repol.ExistLogin(login) {
// 		// search user data
// 		jsonUser := repol.GetFind(login)
// 		// convert json
// 		if jsonUser != "" {
// 			w.WriteHeader(http.StatusOK)
// 			w.Write([]byte(jsonUser))
// 			return
// 		}
// 	} else {
// 		w.WriteHeader(http.StatusBadRequest)
// 		jsonstr := `{"status":"success","message":"Usuário não existe!"}`
// 		w.Write([]byte(jsonstr))
// 		return
// 	}
// }

// func GetLoginUuid(login string, w http.ResponseWriter, r *http.Request) {
// 	if strings.ToUpper(r.Method) != http.MethodGet {
// 		jsonstr := `{"status":"error","message":"O método permitido é  GET!"}`
// 		w.WriteHeader(http.StatusMethodNotAllowed)
// 		w.Write([]byte(jsonstr))
// 		return
// 	}

// 	//valid login
// 	login = strings.TrimSpace(strings.ToLower(login))

// 	if len(login) == 0 {
// 		w.WriteHeader(http.StatusBadRequest)
// 		jsonstr := `{"status":"error","message":"Login não pode ser vazio!"}`
// 		//io.WriteString(w, jsonstr)
// 		w.Write([]byte(jsonstr))
// 		return
// 	}

// 	uuid := repol.GetLoginUuid(login)

// 	if len(uuid) > 0 {
// 		w.WriteHeader(http.StatusOK)
// 		jsonstr := util.BuildJSON(`{"status":"success","message":"encontrou","uuid":"`, uuid, `"}`)
// 		w.Write([]byte(jsonstr))
// 		return
// 	} else {
// 		w.WriteHeader(http.StatusBadRequest)
// 		jsonstr := `{"status":"success","message":"não encontrado!"}`
// 		w.Write([]byte(jsonstr))
// 		return
// 	}
// }

// // get login/{email}
// func LoginActive(uuid string, w http.ResponseWriter, r *http.Request) {

// 	if strings.ToUpper(r.Method) != http.MethodGet {
// 		jsonstr := `{"status":"error","message":"O método permitido é  GET!"}`
// 		w.WriteHeader(http.StatusMethodNotAllowed)
// 		//io.WriteString(w, jsonstr)
// 		w.Write([]byte(jsonstr))
// 		return
// 	}

// 	if len(uuid) == 0 {
// 		w.WriteHeader(http.StatusBadRequest)
// 		jsonstr := `{"status":"error","message":"uuid é obrigatório!"}`
// 		w.Write([]byte(jsonstr))
// 		return
// 	}

// 	status := repol.Active(uuid)

// 	if status == 1 {
// 		w.WriteHeader(http.StatusOK)
// 		jsonstr := `{"status":"success","message":"ativo"}`
// 		w.Write([]byte(jsonstr))
// 		return
// 	} else if status == 2 {
// 		w.WriteHeader(http.StatusOK)
// 		jsonstr := `{"status":"success","message":"desativado"}`
// 		w.Write([]byte(jsonstr))
// 		return
// 	} else {
// 		w.WriteHeader(http.StatusOK)
// 		jsonstr := `{"status":"success","message":"usuário não encontrado!"}`
// 		w.Write([]byte(jsonstr))
// 		return
// 	}
// }
