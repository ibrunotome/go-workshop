// Back-End in Go server
// @jeffotoni

package rproducts

import (
	//"github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/pkg/dblog"
	"github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/pkg/logrus"
	pg "github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/pkg/psql"
	"github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/pkg/util"
	"net/http"
)

func Delete(codemp int64, codprod string) (int, string) {

	// connect
	Db := pg.ConnectNew()

	if len(codprod) <= 0 {
		return http.StatusBadRequest, "Campo codprod é obrigatório"
	}

	if codemp <= 0 {
		return http.StatusBadRequest, "Campo codemp é obrigatório"
	}

	// where field
	var WHERE string

	//codempS := strconv.FormatInt(codemp, 10)
	//codprodS := codprod //strconv.FormatInt(codprod, 10)
	WHERE = ` WHERE codprod=$1 AND codemp=$2`
	// Update produto, delete
	{
		Up := util.Concat(`UPDATE public.produto SET excluido=true`, WHERE)
		//fmt.Println(Up)
		_, err := Db.Exec(Up, codprod, codemp)

		if err != nil {
			logrus.WithFields(logrus.Filelds{
				"version": "1.0.0",
				"host":    "goworkshop.s3wf.com",
				"handler": "Delete produto",
				"method":  "Db.Exec produto",
			}).Error(err.Error())
			return http.StatusBadRequest, err.Error()
		}
	}

	return http.StatusOK, "deletado sucesso"
}
