package main

import (
	"fmt"
	"io/ioutil"
	"net/http"
	"strings"
	"time"

	mw "pkg/middleware"
)

var S strings.Builder

func Send(w http.ResponseWriter, r *http.Request) {
	t1 := time.Now()

	time.Sleep(time.Second)

	t2 := time.Now()

	fmt.Println("Recebendo json")

	b, err := ioutil.ReadAll(r.Body)

	if err != nil {
		fmt.Println(err.Error())
		w.WriteHeader(http.StatusBadRequest)

		jsonError := `{"status":"error", "msg":"` + err.Error() + `"}`
		w.Write([]byte(jsonError))
		return
	}

	fmt.Println(string(b))

	diff := t2.Sub(t1)

	fmt.Println("Diff", diff)

	w.WriteHeader(http.StatusBadRequest)
	w.Write([]byte("Error permitido somente POST...\n"))
}

func Ping(w http.ResponseWriter, r *http.Request) {
	fmt.Println("method: ", r.Method)

	if strings.ToUpper(r.Method) == "POST" {
		w.WriteHeader(http.StatusOK)
		return
	}

	w.WriteHeader(http.StatusBadRequest)
	w.Write([]byte("Error permitido somente POST...\n"))
}

func main() {
	http.Handle("/api/v1/ping", mw.Use(http.HandlerFunc(Ping), mw.Logger("/api/v1/ping")))
	http.Handle("/api/v1/send", mw.Use(http.HandlerFunc(Send), mw.Logger("/api/v1/send")))

	fmt.Println("Run server: 8085")
	http.ListenAndServe(":8085", nil)

}
