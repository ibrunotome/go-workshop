package main

import "fmt"

var stream = make(chan int)
var done = make(chan bool)

func produce() {
	for i := 0; i < 100000; i++ {
		stream <- i
	}

	done <- true
	fmt.Println("Produce")
}

func consume() {
	for {
		data := <-stream
		fmt.Println("Consumer", data)
	}
}

func main() {
	go produce()
	go consume()

	<-done

	fmt.Println("After calling DONE")
}
