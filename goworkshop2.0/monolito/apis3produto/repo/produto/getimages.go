// Go Api server
// @jeffotoni

package rproducts

import (
	"database/sql"
	"github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/pkg/logrus"
)

func GetImages2(Db *sql.DB, codemp int64, codprod string) []string {

	var url string
	var urlImages []string

	// list produc..
	sql := `SELECT url FROM public.imagem WHERE codemp=$1 AND codprod=$2 ORDER BY CODIMG`
	rows, err := Db.Query(sql, codemp, codprod)

	if err != nil {
		// logrus.WithFields(logrus.Filelds{
		// 	"version": "1.0.0",
		// 	"host":    "goworkshop.s3wf.com",
		// 	"handler": "GetImages",
		// 	"method":  "Db.Query",
		// }).Error(err.Error())
		return urlImages
	}

	{
		for rows.Next() {
			err = rows.Scan(&url)
			if err != nil {
				logrus.WithFields(logrus.Filelds{
					"version": "1.0.0",
					"host":    "goworkshop.s3wf.com",
					"handler": "GetCategories",
					"method":  "rows.Scan",
				}).Error(err.Error())
				continue
			}

			//println(url)
			urlImages = append(urlImages, url)
		}
	}
	return urlImages
}
