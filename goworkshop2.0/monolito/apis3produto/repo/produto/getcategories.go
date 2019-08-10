// Back-End in Go server
// @jeffotoni
// 2019-04-28

package rproducts

import (
	"database/sql"
	mp "github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/models/produto"
	"github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/pkg/logrus"
	"strconv"
)

func GetCategories2(Db *sql.DB, codemp, codgrupoprod int64) []mp.Categories {

	var code int64
	var name string

	vcateg := []mp.Categories{}

	sql := `SELECT codgrupoprod as code, grupoprod as name FROM public.categorias WHERE codemp=$1 and codgrupoprod=$2`
	rows, err := Db.Query(sql, codemp, codgrupoprod)

	if err != nil {
		// logrus.WithFields(logrus.Filelds{
		// 	"version": "1.0.0",
		// 	"host":    "goworkshop.s3wf.com",
		// 	"handler": "GetCategories categorias",
		// 	"method":  "Db.Query categorias",
		// }).Error(err.Error())
		return vcateg
	}

	{
		for rows.Next() {
			err = rows.Scan(&code, &name)
			if err != nil {
				logrus.WithFields(logrus.Filelds{
					"version": "1.0.0",
					"host":    "goworkshop.s3wf.com",
					"handler": "GetCategories categorias",
					"method":  "rows.Scan categorias",
				}).Error(err.Error())
				continue
			}

			icat := mp.Categories{Name: strconv.FormatInt(code, 10), Code: name}
			vcateg = append(vcateg, icat)
		}
	}

	return vcateg
}
