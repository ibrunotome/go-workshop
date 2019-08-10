// Back-End in Go server
// @jeffotoni
// 2019-05-14

package rproducts

import (
	pg "github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/pkg/psql"
	"log"
	"net/http"
)

func ExistProducts(codemp int64, codprod string) (int, string) {

	Db := pg.ConnectNew()
	row := Db.QueryRow("SELECT codprod as codprodnew FROM public.produto WHERE codemp=$1 AND codprod=$2",
		codemp, codprod)
	var codprodnew string
	errqy := row.Scan(&codprodnew)
	if errqy != nil {
		log.Println("error select produto: ", errqy.Error())
		return http.StatusAccepted, ""
	}

	// update
	if len(codprodnew) > 0 {
		return http.StatusOK, ""
	}

	// insert
	if len(codprodnew) == 0 {
		return http.StatusAccepted, ""
	}

	// error
	return http.StatusBadRequest, "bad request!"
}
