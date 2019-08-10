package main

import "fmt"

var stream = make(chan int)
var fin = make(chan bool)

func produce() {
	for i := 0; i < 1000000; i++ {
		//fmt.Println("sending")
		stream <- i
		//fmt.Println("sent")
	}

	fmt.Println("No closing channel")
	fin <- true
}

func consume() {
	for {
		data := <-stream
		fmt.Println("Consumer: ", data)
	}
}

func main() {
	go produce()
	go consume()
	<-fin
	fmt.Println("After calling DONE")
}
