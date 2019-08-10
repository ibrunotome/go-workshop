package main

import (
	"fmt"
	"net/http"
	"strings"
	"io/ioutil"
)

var S strings.Builder

func Send(w http.ResponseWriter, r *http.Request) {
	fmt.Println("Recebendo json")

	b, err := ioutil.ReadAll(r.Body)

	if err != nil {
		fmt.Println(err.Error())
		w.WriteHeader(http.StatusBadRequest)

		jsonError := `{"status":"error", "msg":"` + err.Error() + `"}`
		w.Write([]byte(`{"status":"error"}`))
		return
	}

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
	Ping2 := func(w http.ResponseWriter, r *http.Request) {
		w.WriteHeader(http.StatusOK)
		json := `{"status": "ok", "msg":"sucesso"}`
		json += "\n"

		w.Header().Set("Content-Type", "application/json")
		w.Write([]byte(json))
	}

	http.HandleFunc("/api/v1/ping", Ping)
	http.Handle("/api/v1/ping2", http.HandlerFunc(Ping2))

	http.HandleFunc("/api/v1/ping3", Ping)
	http.HandleFunc("/api/v1/ping4", Ping)

	fmt.Println("Run server: 8085")
	http.ListenAndServe(":8085", nil)

}