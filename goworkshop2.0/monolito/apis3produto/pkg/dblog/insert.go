// Back-End in Go server
// @jeffotoni
// 2019-06-19

package dblog

// import (
// 	"database/sql"
// 	"github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/pkg/dblog"
// 	"github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/pkg/logrus"
// 	pg "github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/pkg/psql"
// 	"strings"
// )

// type Ilog struct {
// 	Codemp    int64
// 	Codpla    int64
// 	Codprod   string
// 	Codident  string
// 	Evento    string
// 	Eventolog string
// 	Method    string
// 	Status    int
// }

// func (c2 *Ilog) Insert() {

// 	//postgres
// 	Db := pg.ConnectNew()

// 	// insert banco
// 	_, dberror := dblog.Insert(
// 		Db,
// 		c2.Codemp,
// 		c2.Codpla,
// 		c2.Codprod,
// 		c2.Codident,
// 		"",
// 		c2.Evento,
// 		c2.Eventolog,
// 		strings.ToUpper(c2.Method),
// 		c2.Status,
// 	)
// 	if dberror != nil {
// 		logrus.WithFields(logrus.Filelds{
// 			"version": "1.0.0",
// 			"host":    "goworkshop.s3wf.com",
// 			"handler": "api /products c2 *Ilog -> Insert",
// 			"method":  "dblog.Insert [" + strings.ToUpper(c2.Method) + "]",
// 		}).Error(dberror.Error())
// 	}
// }

// func (c2 *Ilog) InsertDb(Db *sql.DB) {

// 	// insert banco
// 	_, dberror := dblog.Insert(
// 		Db,
// 		c2.Codemp,
// 		c2.Codpla,
// 		c2.Codprod,
// 		c2.Codident,
// 		"",
// 		c2.Evento,
// 		c2.Eventolog,
// 		strings.ToUpper(c2.Method),
// 		c2.Status,
// 	)
// 	if dberror != nil {
// 		logrus.WithFields(logrus.Filelds{
// 			"version": "1.0.0",
// 			"host":    "goworkshop.s3wf.com",
// 			"handler": "api /products c2 *Ilog -> InsertDb",
// 			"method":  "dblog.Insert [" + strings.ToUpper(c2.Method) + "]",
// 		}).Error(dberror.Error())
// 	}
// }
