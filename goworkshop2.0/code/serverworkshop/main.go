package main

import (
	"bufio"
	"net/http"
	"os"
)

// write bufio to optimization
var writer *bufio.Writer

func Println(text string) {
	writer = bufio.NewWriter(os.Stdout)
	writer.WriteString("\n")
	writer.WriteString(text)
	writer.Flush()
}

func main() {

	mux := http.NewServeMux()

	// diretorio fisico
	fs := http.FileServer(http.Dir("./web/static"))

	// mostra no browser localhost:8080/static
	mux.Handle("/web/static/", http.StripPrefix("/web/static", fs))

	Println("Run Server")
	http.ListenAndServe(":8080", mux)
}
