package main

import (
    "bytes"
    "fmt"
    "io/ioutil"
    "os"
    "strconv"
    "strings"
)

type Board struct {
    Rows [4][4]string
}

func (b Board) Winner() string {

    scores := make(map[string]int)
    scores["X"] = 0
    scores["O"] = 0

    //diaginal first
    for i, _ := range b.Rows {
        letter := b.Rows[i][i]
        if letter == "X" || letter == "O" {
            scores[letter]++
        } else if letter == "T" {
            scores["X"]++
            scores["O"]++
        }
    }

    if scores["X"] == 4 {
        return "X won"
    } else if scores["O"] == 4 {
        return "O won"
    }

    scores["X"] = 0
    scores["O"] = 0

    //diaginal last
    for i, row := range b.Rows {
        letter := b.Rows[i][(len(row)-1)-i]
        if letter == "X" || letter == "O" {
            scores[letter]++
        } else if letter == "T" {
            scores["X"]++
            scores["O"]++
        }
    }

    if scores["X"] == 4 {
        return "X won"
    } else if scores["O"] == 4 {
        return "O won"
    }

    scores["X"] = 0
    scores["O"] = 0

    //Check the rows
    for _, row := range b.Rows {
        for _, r := range row {
            if r == "X" || r == "O" {
                scores[r]++
            } else if r == "T" {
                scores["X"]++
                scores["O"]++
            }
        }

        if scores["X"] == 4 {
            return "X won"
        } else if scores["O"] == 4 {
            return "O won"
        }

        scores["X"] = 0
        scores["O"] = 0
    }

    // check the columns
    for i, row := range b.Rows {
        for j, _ := range row {
            letter := b.Rows[j][i]
            if letter == "X" || letter == "O" {
                scores[letter]++
            } else if letter == "T" {
                scores["X"]++
                scores["O"]++
            }
        }

        if scores["X"] == 4 {
            return "X won"
        } else if scores["O"] == 4 {
            return "O won"
        }

        scores["X"] = 0
        scores["O"] = 0
    }

    fill := 0

    // check if it was a draw
    for i, row := range b.Rows {
        for j, _ := range row {
            letter := b.Rows[i][j]
            if letter == "X" || letter == "O" || letter == "T" {
                fill++
            }
        }
    }

    if fill == 16 {
        return "Draw"
    }

    return "Game has not completed"
}

func main() {
    args := os.Args
    filename := args[1]

    b, err := ioutil.ReadFile(filename)
    if err != nil {
        panic(err)
    }

    contents := bytes.NewBuffer(b)
    board := strings.Split(contents.String(), "\n")

    current_game := Board{}
    games := []Board{}
    var j = 0
    var num_games = 0

    for idx, row := range board {
        if idx != 0 {
            if row == "" {
                j = 0
                games = append(games, current_game)
                current_game = Board{}
            } else {
                for p, r := range row {
                    current_game.Rows[j][p] = string(r)
                }
                j++
            }
        } else {
            num_games, _ = strconv.Atoi(row)
        }
    }

    for i := 0; i < num_games; i++ {
        fmt.Println(fmt.Sprintf("Case #%d: %s", i+1, games[i].Winner()))
    }

}
