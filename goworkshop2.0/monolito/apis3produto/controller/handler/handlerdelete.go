// Go Api server
// @jeffotoni

package handler

import (
	//"github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/pkg/dblog"
	"fmt"
	p "github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/repo/produto"
	"net/http"
	"strings"
)

func HandlerDeleteProducts(codprod string, w http.ResponseWriter, r *http.Request) {

	w.Header().Set("Content-Type", "application/json; charset=utf-8")
	defer r.Body.Close()
	if http.MethodDelete != strings.ToUpper(r.Method) {
		w.WriteHeader(http.StatusMethodNotAllowed)
		jsonstr := `{"msg":"O método permitido é Delete!"}`
		w.Write([]byte(jsonstr))
		return
	}

	codemp := int64(10)

	var Evento string = "apiproducts-delete-success"
	var Eventolog string = `{"msg":"success"}`
	var Status int = 2

	httpCode, msgjson := p.Delete(codemp, codprod)
	w.WriteHeader(httpCode)

	if httpCode != http.StatusOK {
		if len(msgjson) > 0 {
			Eventolog = msgjson
			Evento = "apiproducts-delete-error"
			Status = 1
			w.Write([]byte(msgjson))
		}
	}

	fmt.Sprintf("%s%s%d", Evento, Eventolog, Status)

	// /////// log success
	// iLog := dblog.Ilog{
	// 	Codemp:    codemp,
	// 	Codpla:    -1,
	// 	Codprod:   codprod,
	// 	Codident:  "",
	// 	Evento:    Evento,
	// 	Eventolog: Eventolog,
	// 	Method:    strings.ToUpper(r.Method),
	// 	Status:    Status, // SUCCESS
	// }
	// // insert logs
	// go iLog.Insert()
	// ////////////////

	return
}
