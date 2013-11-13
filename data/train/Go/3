package main

import "fmt"

func check(board []string, i, j int, f func(i, j int) (int, int)) rune {
	cur := board[i][j]
	for k := 1; k < 4; k++ {
		i, j = f(i, j)
		if board[i][j] == 'T' {
			continue
		} else if cur == 'T' {
			cur = board[i][j]
		} else if cur != board[i][j] {
			return '.'
		}
	}
	return rune(cur)
}

func solve() string {
	board := make([]string, 4)
	for i := range board {
		fmt.Scan(&board[i])
	}
	winner := '.'
	for i := range board {
		if winner = check(board, i, 0, func(i, j int) (int, int) { return i, j + 1 }); winner != '.' {
			break
		}
		if winner = check(board, 0, i, func(i, j int) (int, int) { return i + 1, j }); winner != '.' {
			break
		}
	}
	if winner == '.' {
		winner = check(board, 0, 0, func(i, j int) (int, int) { return i + 1, j + 1 })
	}
	if winner == '.' {
		winner = check(board, 3, 0, func(i, j int) (int, int) { return i - 1, j + 1 })
	}
	if winner == '.' {
		for i := range board {
			for j := range board[i] {
				if board[i][j] == '.' {
					return "Game has not completed"
				}
			}
		}
	} else {
		return fmt.Sprintf("%c won", winner)
	}
	return "Draw"
}

func main() {
	var T int
	fmt.Scan(&T)
	for i := 1; i <= T; i++ {
		fmt.Printf("Case #%d: %s\n", i, solve())
	}
}
