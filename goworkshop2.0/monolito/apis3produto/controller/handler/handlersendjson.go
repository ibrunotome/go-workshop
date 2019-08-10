// Go Api server
// @jeffotoni
// 2019-05-14

package handler

import (
	"encoding/json"
	"fmt"
	"github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/pkg/logrus"
	"github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/pkg/util"
	"io/ioutil"
	"net/http"
	"strings"
)

func Sendjson(w http.ResponseWriter, r *http.Request) {

	body, err := ioutil.ReadAll(r.Body)
	if err != nil {
		logrus.WithFields(logrus.Filelds{
			"version": "1.0.0",
			"host":    "goworkshop.s3wf.com",
			"handler": "Sendjson",
			"method":  "ReadAll",
		}).Error(err.Error())
		return
	}

	var obj []map[string]interface{}
	err = json.Unmarshal(body, &obj)
	if err != nil {
		w.WriteHeader(http.StatusBadRequest)
		w.Write([]byte(err.Error()))
		return
	}

	jsonb, err := json.MarshalIndent(obj, "", "\t")
	if err != nil {
		fmt.Println(err)
		return
	}
	fmt.Println(string(jsonb))

	w.Header().Set("Content-Type", "application/json; charset=utf-8")
	jsonstr := util.BuildJSON(`{"msg":"pong","method":"`, strings.ToUpper(r.Method), `"}`)
	w.Header().Set("Content-Type", "application/json; charset=utf-8")
	w.WriteHeader(http.StatusOK)
	w.Write([]byte(jsonstr))
	return
}
