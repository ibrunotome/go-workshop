// Go Api server
// @jeffotoni

package handler

import (
	"encoding/json"
	"github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/pkg/util"
	p "github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/repo/produto"
	"net/http"
	"strings"
)

func HandlerGetProducts(codprod string, w http.ResponseWriter, r *http.Request) {

	defer r.Body.Close()
	w.Header().Set("Content-Type", "application/json; charset=utf-8")
	if http.MethodGet != strings.ToUpper(r.Method) {
		w.WriteHeader(http.StatusMethodNotAllowed)
		jsonstr := `{"msg":"O método permitido é Get!"}`
		w.Write([]byte(jsonstr))
		return
	}

	// buscar codemp pelo header.
	// valid header, get codemp
	codemp := int64(10)

	products, httpCode, msgjson := p.GetProducts(codemp, codprod)
	if httpCode != http.StatusOK {
		if len(msgjson) > 0 {
			w.WriteHeader(httpCode)
			w.Write([]byte(msgjson))
			return
		}
	}

	bjson, err := json.Marshal(products)
	if err != nil {
		w.WriteHeader(http.StatusBadRequest)
		jsonstr := util.BuildJSON(`{"msg":"`, err.Error(), `"}`)
		w.Write([]byte(jsonstr))
		return
	}

	if len(products.Sku) <= 0 {
		w.WriteHeader(http.StatusBadRequest)
		jsonstr := util.BuildJSON(`{"error":"Não foi possível encontrar Product: `, codprod, `"}`)
		w.Write([]byte(jsonstr))
		return
	}

	w.WriteHeader(http.StatusOK)
	w.Write(bjson)
	return
}
