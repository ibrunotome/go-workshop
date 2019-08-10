// Go Api server
// @jeffotoni
// 2019-05-14

package controller

import (
	"github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/config"
	"github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/pkg/util"
)

func Show(cfg cf.Config) {

	API_URL := cf.HOST_SERVER

	util.Print("\033[0;33m  Api Server Run \033[0m \033[0;32mstarted:\033[0m \033[37mHost: " + API_URL + " port: " + cf.PORT_SERVER + "\033[0m\n")
	util.Print("\n\033[37m  EndPoints [APIS3PRODUTO]\033[0m\n")
	util.Print("\033[0;33m  [POST]\033[0m...........-> {public}................. -> \033[0;36m" + cf.Endpoint().Ping)
	util.Print("\n")
	util.Print("\033[0;33m  [POST/GET]\033[0m.......-> {private key}............ -> \033[0;36m" + cf.Endpoint().Produto)
	util.Print("\n")
	util.Print("\033[0;33m  [GET]\033[0m............-> {private token}.......... -> \033[0;36m" + cf.Endpoint().Produto + "/{id}")
	util.Print("\n")
	util.Print("\033[0;33m  [PUT]\033[0m............-> {private token}.......... -> \033[0;36m" + cf.Endpoint().Produto + "")
	util.Print("\n")
	util.Print("\033[0;33m  [DELETE]\033[0m.........-> {private token}.......... -> \033[0;36m" + cf.Endpoint().Produto + "/{id}")
	util.Print("\n")
	util.Print("\033[0m\n")
}
