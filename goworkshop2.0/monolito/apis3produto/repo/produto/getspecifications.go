// Back-End in Go server
// @jeffotoni

package rproducts

import (
	"database/sql"
	mp "github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/models/produto"
	"github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/pkg/logrus"
)

func GetSpecifications2(Db *sql.DB, codemp int64, codprod string) []mp.Specifications {

	// key => especificacao = string
	// valor => especificacao = string
	var atributo, valor string // tsiatr and especificacao
	vspec := []mp.Specifications{}

	// list produc..
	sql := `SELECT atributo,valor FROM public.especificacao
  WHERE codemp=$1 AND codprod=$2`
	rows, err := Db.Query(sql, codemp, codprod)
	// println(sql)
	if err != nil {
		// logrus.WithFields(logrus.Filelds{
		// 	"version": "1.0.0",
		// 	"host":    "goworkshop.s3wf.com",
		// 	"handler": "GetCategories especificacao",
		// 	"method":  "Db.Query",
		// }).Error(err.Error())
		return vspec
	}

	{
		for rows.Next() {
			err = rows.Scan(&atributo, &valor)
			if err != nil {
				logrus.WithFields(logrus.Filelds{
					"version": "1.0.0",
					"host":    "goworkshop.s3wf.com",
					"handler": "GetSpecifications especificacao",
					"method":  "rows.Scan",
				}).Error(err.Error())
				continue
			}

			spect := mp.Specifications{Key: atributo, Value: valor}
			vspec = append(vspec, spect)
		}
	}

	return vspec
}
