// Go Api server
// @jeffotoni
// 2019-05-14

package handler

import (
	"github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/pkg/util"
	//"math/rand"
	"net/http"
	"strings"
)

func Ping(w http.ResponseWriter, r *http.Request) {
	w.Header().Set("Content-Type", "application/json; charset=utf-8")
	jsonstr := util.BuildJSON(`{"msg":"pong","method":"`, strings.ToUpper(r.Method), `"}`)
	w.Header().Set("Content-Type", "application/json; charset=utf-8")
	w.WriteHeader(http.StatusOK)
	w.Write([]byte(jsonstr))
	return
}
