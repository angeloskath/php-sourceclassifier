package main

import (
	"fmt"
	"os"
	"io"
)


func printWinner(c int, r rune) {
	fmt.Printf("Case #%d: %s won\n", c, string(r))
}

func fillField(field *[4][4]rune) {
	var line string
	for i := 0; i < 4; i++ {
		_, err := fmt.Scanln(&line)
		if err != nil {
			fmt.Printf("fillField: something wrong with line %d.\n", i)
			os.Exit(-1)
		}

		rs := []rune(line)
		for j := 0; j < 4; j++ {
			field[i][j] = rs[j]
		}
	}

	b := make([]byte, 1)
	_, err := os.Stdin.Read(b)
	if err != nil && err != io.EOF {
		fmt.Printf("fillField: fail reading empty line.\n")
		os.Exit(-1)
	}
}

func checkRow(field *[4][4]rune, i int, r rune) bool {
	for j := 0; j < 4; j++ {
		if field[i][j] != r && field[i][j] != 'T' {
			return false
		}
	}

	return true
}

func checkColumn(field *[4][4]rune, j int, r rune) bool {
	for i := 0; i < 4; i++ {
		if field[i][j] != r && field[i][j] != 'T' {
			return false
		}
	}

	return true
}

func checkDiagonals(field *[4][4]rune, r rune) bool {
	win := true
	for i := 0; i < 4; i++ {
		if field[i][i] != r && field[i][i] != 'T' {
			win = false
			break
		}
	}
	if win {
		return true
	}
	win = true
	for i := 0; i < 4; i++ {
		if field[i][3-i] != r && field[i][3-i] != 'T' {
			win = false
			break
		}
	}
	return win
}

func findWinnerByRow(c int, field *[4][4]rune) bool {
	for i := 0; i < 4; i++ {
		if checkRow(field, i, 'X') {
			printWinner(c, 'X')
			return true
		} else if checkRow(field, i, 'O') {
			printWinner(c, 'O')
			return true
		}
	}

	return false
}

func findWinnerByColumn(c int, field *[4][4]rune) bool {
	for i := 0; i < 4; i++ {
		if checkColumn(field, i, 'X') {
			printWinner(c, 'X')
			return true
		} else if checkColumn(field, i, 'O') {
			printWinner(c, 'O')
			return true
		}
	}

	return false
}

func findWinnerByDiagonal(c int, field *[4][4]rune) bool {
	if checkDiagonals(field, 'X') {
		printWinner(c, 'X')
		return true
	} else if checkDiagonals(field, 'O') {
		printWinner(c, 'O')
		return true
	}

	return false
}

func findWinner(c int, field *[4][4]rune) bool {
	return  findWinnerByRow(c, field) ||
			findWinnerByColumn(c, field) ||
			findWinnerByDiagonal(c, field) ||
			false
}

func gameIsUnfinished(field *[4][4]rune) bool {
	for i := 0; i < 4; i++ {
		for j := 0; j < 4; j++ {
			if field[i][j] == '.' {
				return true
			}
		}
	}

	return false
}

func processCase(c int) {
	var field [4][4]rune

	fillField(&field)
	if !findWinner(c, &field) {
		if gameIsUnfinished(&field) {
			fmt.Printf("Case #%d: Game has not completed\n", c)
		} else {
			fmt.Printf("Case #%d: Draw\n", c)
		}
	}
}

func main() {
	ntests := 0
	_, err := fmt.Scanln(&ntests)
	if err != nil {
		fmt.Printf("Wrong format.\n")
		return
	}

	for i := 1; i <= ntests; i++ {
		processCase(i)
	}
}
