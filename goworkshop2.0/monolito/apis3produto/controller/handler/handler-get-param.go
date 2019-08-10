// Go Api server
// @jeffotoni

package handler

import (
	cfp "github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/config"
	"github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/pkg/util"
	"net/http"
	"strings"
)

func HomeHandler(w http.ResponseWriter, r *http.Request) {

	if r.URL.Path == "/" {
		w.WriteHeader(http.StatusNotFound)
	} else {

		endpoint, nameregex := util.EndpointRegex(r)
		//////////////////////////////////////////////////////////////
		// user regex, search email and validate user
		// creating regex rule for endpoint
		if endpoint == cfp.Endpoint().Produto && nameregex != "" {

			if http.MethodDelete == strings.ToUpper(r.Method) {
				//codprod, _ := strconv.ParseInt(nameregex, 10, 64)
				codprod := nameregex
				HandlerDeleteProducts(codprod, w, r)
				return
			}

			// varios endpoints possiveis
			// GET => {id}
			// /products?
			// GET ALL
			if http.MethodGet == strings.ToUpper(r.Method) {

				///////////////////////////////////////////////////////
				// ir para HandlerProducts or HandlerProductsFilter
				//codprod, _ := strconv.ParseInt(nameregex, 10, 64)
				codprod := nameregex
				HandlerGetProducts(codprod, w, r)

				return
			}
		}
		///////////////////////////// end
		///

		// create url expression, fetch some urls GET
		w.WriteHeader(http.StatusNotFound)
		//w.Write([]byte(jsonstr))
		//io.WriteString(w, jsonstr)
	}
}
