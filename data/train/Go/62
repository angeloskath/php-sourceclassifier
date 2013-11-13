package main

import (
	"flag"
	"os"
	"bufio"
	"fmt"
	"strconv"
	"strings"
)

type field [][]byte

type count struct {
	X int
	O int
	T int
}

type win int

const (
	WIN_NO win = iota
	WIN_X
	WIN_O
)

func readCount(inputReader *bufio.Reader) int {
	value, _ := inputReader.ReadString('\n')
	value = strings.TrimSpace(value)
	count, err := strconv.Atoi(value)
	if err != nil {
		fmt.Printf("Invalid count: %s\n", err)
		return 0
	}
	return count
}

func readLine(reader *bufio.Reader) []byte {
	result, _ := reader.ReadBytes('\n')
	return result
}

func readField(reader *bufio.Reader) field {
	result := make([][]byte, 4)
	for i := 0; i < 4; i++ {
		result[i] = readLine(reader)
	}
	reader.ReadString('\n')
	return result
}

func addCount(c *count, f field, x int, y int) {
	if f[y][x] == 'X' {
		c.X += 1
	}
	if f[y][x] == 'O' {
		c.O += 1
	}
	if f[y][x] == 'T' {
		c.T += 1
	}
}

func checkWin(c count) win {
	if c.X == 4 || (c.X == 3 && c.T == 1) {
		return WIN_X
	}
	if c.O == 4 || (c.O == 3 && c.T == 1) {
		return WIN_O
	}
	return WIN_NO
}

func countHoriz(f field, y int) win {
	var c count
	for x := 0; x < 4; x++ {
		addCount(&c, f, x, y)
	}
	return checkWin(c)
}

func countVert(f field, x int) win {
	var c count
	for y := 0; y < 4; y++ {
		addCount(&c, f, x, y)
	}
	return checkWin(c)
}

func countCross1(f field) win {
	var c count
	for i := 0; i < 4; i++ {
		addCount(&c, f, i, i)
	}
	return checkWin(c)
}

func countCross2(f field) win {
	var c count
	for i := 0; i < 4; i++ {
		addCount(&c, f, i, 3 - i)
	}
	return checkWin(c)
}

func checkField(f field) win {
	for i := 0; i < 4; i++ {
		win := countHoriz(f, i)
		if win != WIN_NO {
			return win
		}
		win = countVert(f, i)
		if win != WIN_NO {
			return win
		}
		win = countCross1(f)
		if win != WIN_NO {
			return win
		}
		win = countCross2(f)
		if win != WIN_NO {
			return win
		}
	}
	return WIN_NO
}

func isEnded(f field) bool {
	var count int = 0
	for y := 0; y < 4; y++ {
		for x := 0; x < 4; x++ {
			if f[y][x] == '.' {
				count++
			}
		}
	}
	return count == 0
}

func main() {
	flag.Parse()
	inputName := flag.Arg(0)
	inputFile, err := os.Open(inputName)
	if err != nil {
		fmt.Printf("Can not open file: %s\n", inputName)
		return
	}
	inputReader := bufio.NewReader(inputFile)
	count := readCount(inputReader)
	fields := make([]field, count)
	for i := 0; i < count; i++ {
		fields[i] = readField(inputReader)
	}
	for i, f := range fields {
		fmt.Printf("Case #%d: ", i + 1)
		win := checkField(f)
		if win == WIN_X {
			fmt.Println("X won")
		} else if win == WIN_O {
			fmt.Println("O won")
		} else if isEnded(f) {
			fmt.Println("Draw")
		} else {
			fmt.Println("Game has not completed")
		}
	}
}
