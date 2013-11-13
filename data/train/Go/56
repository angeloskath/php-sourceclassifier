package main

import (
    "os"
    "bufio"
    "bytes"
    "io"
    "fmt"
    "strings"
    "strconv"
)

// Read a whole file into the memory and store it as array of lines
func readLines(path string) (lines []string, err error) {
    var (
        file *os.File
        part []byte
        prefix bool
    )
    if file, err = os.Open(path); err != nil {
        return
    }
    defer file.Close()

    reader := bufio.NewReader(file)
    buffer := bytes.NewBuffer(make([]byte, 0))
    for {
        if part, prefix, err = reader.ReadLine(); err != nil {
            break
        }
        buffer.Write(part)
        if !prefix {
            str := strings.TrimSpace(buffer.String())
            if len(str) > 0 { lines = append(lines, str) }
            buffer.Reset()
        }
    }
    if err == io.EOF {
        err = nil
    }
    return
}

func integersFromString(str string) (ints []int) {
  intStrings := strings.Split(str, " ")
  for _, intString := range intStrings {
    intVal, err := strconv.Atoi(intString)
    if err != nil { panic(err) }

    ints = append(ints, intVal)
  }
  return
}

func getTestCases(lines []string) (caseCount int, testLines [][]string) {
  caseCount, err := strconv.Atoi(lines[0])
  if err != nil { panic(err) }

  // pop the first line off (it was the number of test cases)
  lines = lines[1:]
  linesPerTest := 4

  for i := 0; i < caseCount; i++ {
    individualTestLines := make([]string, linesPerTest)
    startLine := (linesPerTest * i)

    for j := startLine; j < (startLine + linesPerTest); j++ {
      testLineIdx := j - startLine
      individualTestLines[ testLineIdx ] = lines[j]
    }
    testLines = append(testLines, individualTestLines)
  }


  return
}

func processTest(testNumber int, testLines []string) {
  fmt.Printf("Case #%d: ", testNumber + 1)

  var grid [][]byte

  for _, line := range testLines {
    grid = append(grid, []byte(line))
  }

  game := TicTacToeGame{grid:grid}
  winner := game.getWinner()
  if winner != '.' {
    fmt.Printf("%s won\n", string(winner))
  } else {
    if game.isFilled() {
      fmt.Printf("Draw\n")
    } else {
      fmt.Printf("Game has not completed\n")
    }
  }
}

func processInputFile(path string) {
  lines, err := readLines(path)
  if err != nil { panic(err) }

  caseCount, testLinesArray := getTestCases(lines)
  for i := 0; i < caseCount; i++ {
    processTest(i, testLinesArray[i])
  }
}

type TicTacToeGame struct {
  grid [][]byte
}

func (game *TicTacToeGame) getWinner() byte {
  var result byte

  //# check each row
  for i := 0; i < 4; i++ {
    row := game.row(i)
    result = checkArray(row)

    if result != '.' {
      return result
    }

    col := game.column(i)
    result = checkArray(col)
    if result != '.' {
      return result
    }
  }

  result = checkArray( game.diagonal(DIAG_LEFT) )
  if result != '.' {
    return result
  }

  result = checkArray( game.diagonal(DIAG_RIGHT) )
  if result != '.' {
    return result
  }

  return '.'
}

func (game *TicTacToeGame) column(colNum int) []byte {

  colBytes := make([]byte, 4)

  for i := 0; i < 4; i++ {
    colBytes[i] = game.grid[i][colNum]
  }

  return colBytes
}

func (game *TicTacToeGame) row(rowNum int) []byte {
  return game.grid[rowNum]
}

const DIAG_LEFT int  = 1
const DIAG_RIGHT int= 2

func (game *TicTacToeGame) diagonal(diagDir int) []byte {
  diagBytes := make([]byte, 4)

  for i := 0; i < 4; i = i + 1 {
    if diagDir == DIAG_LEFT {
      diagBytes = append(diagBytes, game.grid[i][i])
    }

    if diagDir == DIAG_RIGHT {
      diagBytes = append(diagBytes, game.grid[i][3-i])
    }
  }

  return diagBytes
}

func (game *TicTacToeGame) checkCol(colNum int) byte {
  var prevChar byte
  var currentChar byte

  for i := 0; i < 4; i++ {
    currentChar = game.grid[i][colNum]
    if currentChar == '.' { return '.' }
    if currentChar == 'T' { continue }

    if i == 0 {
      prevChar = currentChar
    }

    if currentChar != prevChar { return '.' }
    prevChar = currentChar
  }
  return currentChar
}

func checkArray(array []byte) byte {
  var curVal byte

  seenX := false
  seenO := false

  //fmt.Println("==================================================")
  //fmt.Printf("Array: %s\n",array)

  for i := 0; i < len(array); i++ {
    curVal = array[i]
    //fmt.Printf("Checking val: %q\n",curVal)
    if curVal == 'T' { continue }
    if curVal == '.' {
      //fmt.Println("Seen '.', returning early")
      return '.'
    }
    if curVal == 'X' { seenX = true }
    if curVal == 'O' { seenO = true }

    if seenX && seenO {
      //fmt.Println("Seen x and o, returning")
      return '.'
    }

    //fmt.Printf("seenX: %t, seenY: %t\n",seenX,seenO)
  }

  if !seenX && !seenO {
    return '.'
  }

  if seenX { return 'X' }
  if seenO { return 'O' }

  return '.'
}

func (game *TicTacToeGame) checkRow(rowNum int) byte {
  var prevChar byte
  var currentChar byte

  for j := 0; j < 4; j++ {
    currentChar = game.grid[rowNum][j]
    if currentChar == '.' { return '.' }
    if currentChar == 'T' { continue }

    if j == 0 {
      prevChar = currentChar
    }

    if currentChar != prevChar { return '.' }
    prevChar = currentChar
  }
  return currentChar
}

func (game *TicTacToeGame) isFilled() bool {
  for i := 0; i < 4; i++ {
    for j := 0; j < 4; j++ {
      if game.grid[i][j] == '.' { return false }
    }
  }
  return true
}

func main() {
  argsWithoutProg := os.Args[1:]
  processInputFile( argsWithoutProg[0] )
}
