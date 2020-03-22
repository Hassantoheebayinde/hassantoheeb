package main

import "fmt"

func main() {
	programTitle := "Dectobin i.e converting a number from decimal to binary digits"
	fmt.Println("The program name is", programTitle)
	fmt.Println("Input a number to be converted to binary digits")
	var inputNumber int
	fmt.Scan(&inputNumber)
	fmt.Printf("Number inputed by the user= %d\nBinary conversion of the number inputed by the user = %b\n", inputNumber, inputNumber)
}
