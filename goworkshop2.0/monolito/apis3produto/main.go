// Go Api server
// @jeffotoni
// 2019-05-14
//
// Api server was implemented to use jwt for auth
// some middleware was created

package main

import (
	cf "github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/config"
	"github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/controller"
	"github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/pkg/util"
	"os"
	"os/signal"
)

var confserv = cf.Endpoint()

func main() {
	// convert string to int
	// conf server
	serverCfg := cf.Config{
		Host:           cf.HOST_CONFIG,
		ReadTimeout:    cf.READTIMEOUT,
		WriteTimeout:   cf.WRITETIMEOUT,
		MaxHeaderBytes: cf.HOST_MAXBYTE,
	}

	// star server
	hServer := controller.StartServer(serverCfg)

	// stop server
	defer hServer.StopServer()

	// channel with notify
	sigChan := make(chan os.Signal, 1)
	signal.Notify(sigChan, os.Interrupt)
	<-sigChan

	util.Printnew("\nmain : Shutting down goapiserver\n")
}
