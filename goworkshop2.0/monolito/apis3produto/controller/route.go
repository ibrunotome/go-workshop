// Go Api server
// @jeffotoni

package controller

import (
	cf "github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/config"
	"github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/controller/handler"
	mw "github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/controller/middleware"
	"github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/pkg/util"
	"github.com/prometheus/client_golang/prometheus/promhttp"
	"log"
	"net/http"
)

func StartServer(cfg cf.Config) *GoServerHttp {

	// DefaultServeMux
	mux := http.NewServeMux()

	// POST handler /auth
	// Authorization: Basic key:keypass
	handlerApiAuth := http.HandlerFunc(handler.Auth)

	// generate auth jwt
	// handler auth
	mux.Handle(cf.Endpoint().PostAuth, mw.Use(handlerApiAuth,
		mw.MetricsPrometheus(cf.Endpoint().PostAuth),
		mw.CustomHeaders(),
		mw.MaxClients(cf.MaxClients),
		mw.GtokenJwt(),
		mw.Logger("auth"),
	))

	// POST handler /ping
	handlerApiPing := http.HandlerFunc(handler.Ping)

	mux.Handle(cf.Endpoint().Ping, mw.Use(handlerApiPing,
		mw.MetricsPrometheus(cf.Endpoint().Ping),
		mw.CustomHeaders(),
		mw.Gzip(),
		mw.MaxClients(cf.MaxClients),
		mw.Logger("ping"),
	))

	// POST handler /ping
	handlerApiSendjson := http.HandlerFunc(handler.Sendjson)

	mux.Handle(cf.Endpoint().Sendjson, mw.Use(handlerApiSendjson,
		mw.MetricsPrometheus(cf.Endpoint().Sendjson),
		mw.CustomHeaders(),
		mw.Gzip(),
		mw.MaxClients(cf.MaxClients),
		mw.AuthJwt(),
		mw.Logger("sendjson"),
	))

	// POST handler /produto
	handlerApiproduto := http.HandlerFunc(handler.Produto)

	mux.Handle(cf.Endpoint().Produto, mw.Use(handlerApiproduto,
		mw.MetricsPrometheus(cf.Endpoint().Produto),
		mw.CustomHeaders(),
		mw.Gzip(),
		mw.MaxClients(cf.MaxClients),
		mw.AuthJwt(),
		mw.Logger("produto"),
	))

	///////////////////////////////////////////////////////////
	// Endpoints
	//////////////////////////////////////
	// produto
	// produto/{uuid}
	/////////////////////////////////////
	mux.Handle("/", mw.Use(http.HandlerFunc(handler.HomeHandler),
		mw.MetricsPrometheusDinamic(),
		mw.CustomHeaders(),
		mw.AuthJwt(),
		//mw.AuthJwtNot([]string{"/produto"}),
		mw.Logger("/")))

	ApiServer := GoServerHttp{
		server: &http.Server{
			Addr:    cfg.Host,
			Handler: mux,
			//Handler: middpromet,
			//ReadTimeout:  time.Millisecond * 600,
			//WriteTimeout: time.Millisecond * 400,
			//ReadTimeout:  cfg.ReadTimeout,
			//WriteTimeout: cfg.WriteTimeout,
			// IdleTimeout:    1000 * time.Millisecond,
			//MaxHeaderBytes: cfg.MaxHeaderBytes,
		},
	}

	// Add to the WaitGroup for the listener goroutine
	ApiServer.wg.Add(1)

	// Start the listener
	//go func() {
	Show(cfg)
	ApiServer.server.ListenAndServe()
	ApiServer.wg.Done()
	//}()

	// Serve our metrics.
	// Prometheus
	go func() {
		if err := http.ListenAndServe(util.Concat(":", cf.PORT_METRICS), promhttp.Handler()); err != nil {
			log.Printf("Eror while serving metrics: %s", err)
		}
	}()
	return &ApiServer
}
