// Go Api server
// @jeffotoni

package psql

///
import (
	"database/sql"
	"fmt"
	"github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/config"
	"github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/pkg/logrus"
	_ "github.com/lib/pq"
	"sync"
)

var once sync.Once
var err error
var dbLocal *sql.DB

func ConnectNew() (db *sql.DB) {

	if dbLocal != nil {
		return dbLocal
	} else {

		DBINFO := fmt.Sprintf("host=%s port=%s user=%s password=%s dbname=%s sslmode=%s",
			cf.DB_HOST, cf.DB_PORT, cf.DB_USER, cf.DB_PASSWORD, cf.DB_NAME, cf.DB_SSL)

		once.Do(func() {
			dbLocal, err = sql.Open(cf.DB_SORCE, DBINFO)
		})

		if err != nil {
			logrus.WithFields(logrus.Filelds{
				"version": "1.0.0",
				"host":    "goworkshop.s3wf.com",
				"handler": "Connect",
				"method":  "sql.Open",
			}).Error(err.Error())
			return dbLocal
		}
		return dbLocal
	}
}
