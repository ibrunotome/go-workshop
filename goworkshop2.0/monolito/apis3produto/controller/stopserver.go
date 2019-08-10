// Go Api server
// @jeffotoni
// 2019-05-14

package controller

import (
	"context"
	"time"
)

import (
	"github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/pkg/logrus"
	"github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/pkg/util"
)

// Stop turns off the HTML Server
func (GoServerHttp *GoServerHttp) StopServer() error {

	// Create a context to attempt a graceful 6 second shutdown.
	const timeout = 6 * time.Second
	ctx, cancel := context.WithTimeout(context.Background(), timeout)
	defer cancel()

	// optimized version
	util.Print("\n\033[0;31mServer Goapiproduto:\033[0m \033[0;32mService stopped\033[0m\n")

	// Attempt the graceful shutdown by closing the listener
	// and completing all inflight requests
	if err := GoServerHttp.server.Shutdown(ctx); err != nil {

		logrus.WithFields(logrus.Filelds{
			"version": "1.0.0",
			"host":    "goworkshop.s3wf.com",
			"handler": "StopServer",
			"method":  "GoServerHttp",
		}).Error(err.Error())

		// Looks like we timed out on the graceful shutdown. Force close.
		if err := GoServerHttp.server.Close(); err != nil {

			logrus.WithFields(logrus.Filelds{
				"version": "1.0.0",
				"host":    "goworkshop.s3wf.com",
				"handler": "StopServer",
				"method":  "GoServerHttp Close",
			}).Error(err.Error())

			util.Print("\n\033[0;31mServer Goapiproduto:\033[0m \033[0;32mService Error Close()" + err.Error() + "\033[0m\n")
			return err
		}
	}

	// Wait for the listener to report that it is closed.
	GoServerHttp.wg.Wait()
	util.Print("\n\033[0;31mServer Goapiproduto:\033[0m \033[0;32mService Stopped")
	return nil
}
