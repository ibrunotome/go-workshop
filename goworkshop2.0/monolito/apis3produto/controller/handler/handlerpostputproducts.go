// Go Api server
// @jeffotoni

package handler

import (
	"encoding/json"
	mp "github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/models/produto"
	"github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/pkg/logrus"
	//"github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/pkg/dblog"
	//"github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/pkg/sqs"
	"github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/pkg/util"
	p "github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/repo/produto"
	"net/http"
	"strings"
)

func Produto(w http.ResponseWriter, r *http.Request) {

	w.Header().Set("Content-Type", "application/json; charset=utf-8")
	// somente GETS
	if http.MethodGet == strings.ToUpper(r.Method) {
		// varios endpoints possiveis
		// GET => {id}
		// /produtos?
		// GET ALL
		// list all Products
		HandlerGetProductsAll(w, r)
		return
	}

	// POST/PUT
	// insert/update
	if http.MethodPost != strings.ToUpper(r.Method) &&
		http.MethodPut != strings.ToUpper(r.Method) {
		w.WriteHeader(http.StatusMethodNotAllowed)
		jsonstr := `{"msg":"O método DELETE,PATH,HEAD não é permitido!"}`
		w.Write([]byte(jsonstr))
		return
	}

	content_type := strings.ToLower(r.Header.Get("Content-Type"))
	if content_type != "application/json" {
		w.WriteHeader(http.StatusUnsupportedMediaType)
		jsonstr := `{"msg":"Content-type é obrigatório json!"}`
		//io.WriteString(w, jsonstr)
		w.Write([]byte(jsonstr))
		return
	}

	// close
	defer r.Body.Close()

	// formatar json enviado
	// validar json
	// lendo e o json
	// validando json recebido
	var sp mp.Post2Product
	err := json.NewDecoder(r.Body).Decode(&sp)
	if err != nil {
		w.WriteHeader(http.StatusBadRequest)
		jsonstr := err.Error()
		w.Write([]byte(jsonstr))
		return
	}

	codemp := int64(10)

	// check product exist
	// codemp and codprod
	//codprod, _ := strconv.Atoi(sp.Product.Sku)
	codprod := sp.Product.Sku
	httpCode, msgjson := p.ExistProducts(codemp, codprod)

	// 200
	if httpCode == http.StatusOK {

		// faz update METHOD PUT OR POST
		httpCode, msgjson = p.Update(codemp, &sp.Product)
		if httpCode != http.StatusOK {
			w.WriteHeader(httpCode)
			w.Write([]byte(msgjson))

			/////// log success ///////////////
			// iLog := dblog.Ilog{
			// 	Codemp:    codemp,
			// 	Codpla:    -1,
			// 	Codprod:   codprod,
			// 	Codident:  "",
			// 	Evento:    "apiproducts-post-put-error",
			// 	Eventolog: msgjson,
			// 	Method:    strings.ToUpper(r.Method),
			// 	Status:    1, // ERROR
			// }
			util.Printnew("\n[UPDATE] Inserir Log erro ...")
			// // insert logs
			// go iLog.Insert()
			// //////////////////////////////////

			return
		}

		// aqui disparar goroutine
		// novo metodo listar todos
		// markeplaces do sku atualizado
		// e disparar para ser atualizado
		// codprod, codemp
		// sup := &sqs.SqsUpProd{
		// 	Codemp:   codemp,
		// 	Codpla:   -1,
		// 	Codprod:  codprod,
		// 	Usuario:  usuario,
		// 	Password: password,
		// }

		// // enviando para fila
		// go sup.SendSqsPut()
		util.Printnew("\nSend Fila...")

		// // envia para fila
		// if !sup.SendSqsPut() {
		// 	msgjson := `{"msg":"Erro ao salvar na fila seu Update!"}`
		// 	w.WriteHeader(http.StatusBadRequest)
		// 	w.Write([]byte(msgjson))
		// 	return
		// }

		w.WriteHeader(httpCode)

		// /////// log success ///////////////
		// iLog := dblog.Ilog{
		// 	Codemp:    codemp,
		// 	Codpla:    -1,
		// 	Codprod:   codprod,
		// 	Codident:  "",
		// 	Evento:    "apiproducts-post-put-success",
		// 	Eventolog: `{"msg":"success"}`,
		// 	Method:    strings.ToUpper(r.Method),
		// 	Status:    2, // SUCCESS
		// }

		util.Printnew("\n[UPDATE]\nInserir Log sucesso ...")
		// insert logs
		//go iLog.Insert()
		//////////////////////////////////

		return
	}

	// 202
	if httpCode == http.StatusAccepted {

		if http.MethodPost != strings.ToUpper(r.Method) {
			w.WriteHeader(http.StatusMethodNotAllowed)
			jsonstr := `{"msg":"Para inserir é somente aceito o método POST!"}`
			w.Write([]byte(jsonstr))
			return
		}

		httpCode, msgjson = p.Insert(codemp, &sp.Product)
		if httpCode != http.StatusCreated {
			w.WriteHeader(httpCode)
			w.Write([]byte(msgjson))

			/////// log success ///////////////
			// iLog := dblog.Ilog{
			// 	Codemp:    codemp,
			// 	Codpla:    -1,
			// 	Codprod:   codprod,
			// 	Codident:  "",
			// 	Evento:    "apiproducts-" + strings.ToLower(r.Method) + "-error",
			// 	Eventolog: msgjson,
			// 	Method:    strings.ToUpper(r.Method),
			// 	Status:    1, // Error
			// }

			// insert logs
			//go iLog.Insert()
			util.Printnew("\n[INSERT] Inserir Log Error ...")
			//////////////////////////////////

			return
		}

		w.WriteHeader(httpCode)

		/////// log success ///////////////
		// iLog := dblog.Ilog{
		// 	Codemp:    codemp,
		// 	Codpla:    -1,
		// 	Codprod:   codprod,
		// 	Codident:  "",
		// 	Evento:    "apiproducts-" + strings.ToLower(r.Method) + "-error",
		// 	Eventolog: `{"msg":"success"}`,
		// 	Method:    strings.ToUpper(r.Method),
		// 	Status:    2, // SUCCESS
		// }

		// // insert logs
		// go iLog.Insert()
		util.Printnew("\n[INSERT]\nInserir Log sucesso ...")
		//////////////////////////////////

		return
	}

	w.WriteHeader(httpCode)
	jsonstr := msgjson
	logrus.WithFields(logrus.Filelds{
		"version": "1.0.0",
		"host":    "goworkshop.s3wf.com",
		"handler": "Produto",
		"Method":  "ExistProducts",
	}).Error(msgjson)
	w.Write([]byte(jsonstr))
	return

}
