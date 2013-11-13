package main

import (
	"bufio"
	"fmt"
	"os"
	"strconv"
)

func Readln(r *bufio.Reader) (string, error) {
	var (
		isPrefix bool  = true
		err      error = nil
		line, ln []byte
	)
	for isPrefix && err == nil {
		line, isPrefix, err = r.ReadLine()
		ln = append(ln, line...)
	}
	return string(ln), err
}

func to_uinteger(numstr string) uint64 {
	numbr, err := strconv.ParseUint(numstr, 10, 64)
	if err != nil {
		fmt.Println("could not convert to integer")
		fmt.Println(err)
		os.Exit(1)
	}
	return numbr
}

func search_for_four(board *[][]uint8, xstart int32, ystart int32, xdirection int32, ydirection int32, char_to_match uint8) bool {
	var xpos int32
	var ypos int32
	var i uint32
	var match bool
	theboard := *board
	xpos = xstart
	ypos = ystart
	match = true
	for i = 0; i < 4; i++ {
		if theboard[ypos][xpos] != 'T' {
			if theboard[ypos][xpos] != char_to_match {
				match = false
			}
		}
		xpos = xpos + xdirection
		ypos = ypos + ydirection
	}
	if match {
		return true
	}
	return false
}

func check_for_four(board *[][]uint8, check_char uint8) bool {
	var checkresult bool
	checkresult = search_for_four(board, 0, 0, 1, 0, check_char)
	if checkresult {
		return true
	}
	checkresult = search_for_four(board, 0, 1, 1, 0, check_char)
	if checkresult {
		return true
	}
	checkresult = search_for_four(board, 0, 2, 1, 0, check_char)
	if checkresult {
		return true
	}
	checkresult = search_for_four(board, 0, 3, 1, 0, check_char)
	if checkresult {
		return true
	}
	checkresult = search_for_four(board, 0, 0, 0, 1, check_char)
	if checkresult {
		return true
	}
	checkresult = search_for_four(board, 1, 0, 0, 1, check_char)
	if checkresult {
		return true
	}
	checkresult = search_for_four(board, 2, 0, 0, 1, check_char)
	if checkresult {
		return true
	}
	checkresult = search_for_four(board, 3, 0, 0, 1, check_char)
	if checkresult {
		return true
	}
	checkresult = search_for_four(board, 0, 0, 1, 1, check_char)
	if checkresult {
		return true
	}
	checkresult = search_for_four(board, 3, 0, -1, 1, check_char)
	if checkresult {
		return true
	}
	return false
}

func check_for_board_full(board *[][]uint8) bool {
	var xpos int32
	var ypos int32
	var full bool
	theboard := *board
	full = true
	for xpos = 0; xpos < 4; xpos++ {
		for ypos = 0; ypos < 4; ypos++ {
			if theboard[xpos][ypos] == '.' {
				full = false
			}
		}
	}
	return full
}

func evaluate(board *[][]uint8) string {
	if check_for_four(board, 'O') {
		return "O won"
	}
	if check_for_four(board, 'X') {
		return "X won"
	}
	if check_for_board_full(board) {
		return "Draw"
	}
	return "Game has not completed"
}

func tictactoetomek(inputfile string, outputfile string) {
	var number uint64
	var board [][]uint8
	var i uint32
	var j uint32
	var result string
	fh_out, err := os.Create(outputfile)
	if err != nil {
		fmt.Printf("Could not open outputfile: %s", outputfile)
		return
	}
	fh_original, err := os.Open(inputfile)
	if err != nil {
		fmt.Printf("Not found: %s", inputfile)
		fh_out.Close()
		return
	}
	fh_in := bufio.NewReader(fh_original)
	in_line, err := Readln(fh_in)
	if err != nil {
		fmt.Println(err)
		fh_original.Close()
		fh_out.Close()
		return
	}
	test_cases := to_uinteger(in_line)
	for number = 1; number <= test_cases; number++ {
		board = make([][]uint8, 4)
		for i = 0; i < 4; i++ {
			board[i] = make([]uint8, 4)
			for j = 0; j < 4; j++ {
				board[i][j] = '.'
			}
			in_line, err = Readln(fh_in)
			for j = 0; j < 4; j++ {
				if in_line[j] == 'X' {
					board[i][j] = 'X'
				}
				if in_line[j] == 'O' {
					board[i][j] = 'O'
				}
				if in_line[j] == 'T' {
					board[i][j] = 'T'
				}
			}
		}
		in_line, err = Readln(fh_in) // blank line
		result = evaluate(&board)
		_, err = fmt.Fprintf(fh_out, "Case #%d: %s\n", number, result)
		if err != nil {
			fmt.Println("Error on output")
		}
	}
	fh_original.Close()
	fh_out.Close()
}

func main() {
	file_base := "A-large"
	inputfile := file_base + ".in"
	outputfile := file_base + ".out"
	tictactoetomek(inputfile, outputfile)
}
