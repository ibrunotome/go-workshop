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

func HandlerGetProductsAll(w http.ResponseWriter, r *http.Request) {
	w.Header().Set("Content-Type", "application/json; charset=utf-8")
	defer r.Body.Close()
	if http.MethodGet != strings.ToUpper(r.Method) {
		w.WriteHeader(http.StatusMethodNotAllowed)
		jsonstr := `{"msg":"O método permitido é Get!"}`
		w.Write([]byte(jsonstr))
		return
	}

	codemp := int64(10)

	products, httpCode, msgjson := p.GetProductsAll(codemp)
	if httpCode != http.StatusOK {
		if len(msgjson) > 0 {
			w.WriteHeader(httpCode)
			w.Write([]byte(msgjson))
			return
		}
	}

	bjson, err := json.Marshal(products)
	if err != nil {
		jsonstr := util.BuildJSON(`{"msg":"Error ao fazer marshal: `, err.Error(), `"}`)
		w.WriteHeader(http.StatusBadRequest)
		w.Write([]byte(jsonstr))
		return
	}

	w.WriteHeader(http.StatusOK)
	w.Write(bjson)
	return
}
