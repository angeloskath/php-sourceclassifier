package main

import (
	"bufio"
	"fmt"
	"log"
	"os"
	"strconv"
	"strings"
)

type Problem [4]string

func readProblem(r *bufio.Reader) Problem {
	problem := Problem{}
	for i := 0; i < 4; i++ {
		line, _ := r.ReadString('\n')
		problem[i] = line
	}
	r.ReadSlice('\n')
	return problem
}

func checkLine(caseno int, p Problem, x, dx, y, dy int) bool {
	owins := true
	xwins := true
	for i := 0; i < 4; i++ {
		c := p[x+dx*i][y+dy*i]
		if c != 'O' && c != 'T' {
			owins = false
		}
		if c != 'X' && c != 'T' {
			xwins = false
		}
	}
	if owins {
		fmt.Printf("Case #%d: O won\n", caseno)
		return true
	}
	if xwins {
		fmt.Printf("Case #%d: X won\n", caseno)
		return true
	}
	return false
}

func solve(caseno int, problem Problem) {
	for y := 0; y < 4; y++ {
		if checkLine(caseno, problem, 0, 1, y, 0) {
			return
		}
	}
	for x := 0; x < 4; x++ {
		if checkLine(caseno, problem, x, 0, 0, 1) {
			return
		}
	}
	if checkLine(caseno, problem, 0, 1, 0, 1) {
		return
	}
	if checkLine(caseno, problem, 0, 1, 3, -1) {
		return
	}

	for y := 0; y < 4; y++ {
		for x := 0; x < 4; x++ {
			if problem[x][y] == '.' {
				fmt.Printf("Case #%d: Game has not completed\n", caseno)
				return
			}
		}
	}
	fmt.Printf("Case #%d: Draw\n", caseno)
}

func main() {
	reader := bufio.NewReader(os.Stdin)
	line, err := reader.ReadString('\n')
	if err != nil {
		log.Panicln("Can't read T")
	}
	line = strings.TrimRight(line, "\n")
	T, _ := strconv.Atoi(line)
	log.Println("T=", T)

	for i := 1; i <= T; i++ {
		problem := readProblem(reader)
		log.Println("load problem:", problem)
		solve(i, problem)
	}
}
