package main

import "fmt"

func main() {
	c1 := make(chan int)

	go func() {
		c1 <- 100
	}()

	fmt.Println(<-c1)
}