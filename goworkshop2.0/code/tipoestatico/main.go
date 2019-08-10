package main

import "fmt"

type Produto struct {
	Id    int64
	Nome  string
	Preco float64
}

func main() {

	type MyString string

	const nome string = "@jeffotoni"

	var vars MyString
	var t string
	var a int

	vars = MyString(nome)
	t = "ola"
	a = 100

	fmt.Println(t)
	fmt.Println(a)
	fmt.Println(nome)
	fmt.Println(vars)
}
