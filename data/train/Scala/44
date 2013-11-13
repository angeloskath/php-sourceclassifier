package codejam
package y2013qual

object TicTacToeTomek {
  def log(msg : => String) {
    println(msg)
  }

  def solveCase(lines : Iterator[String]) : String = {
    val board = lines.take(4).map(_.trim.toCharArray).toArray
    if (lines.hasNext) lines.next // eat blank line

    def xWon(squares : Seq[Char]) = squares.filterNot("XT".toSet.contains).isEmpty
    def oWon(squares : Seq[Char]) = squares.filterNot("OT".toSet.contains).isEmpty

    val rows = (0 to 3).map(row => (0 to 3).map(column => board(row)(column)))
    val columns = (0 to 3).map(column => (0 to 3).map(row => board(row)(column)))
    val diagonals = Seq((0 to 3).map(i => board(i)(i)), (0 to 3).map(i => board(i)(3-i)))

    for (squares <- rows ++ columns ++ diagonals) {
      if (xWon(squares)) return "X won"
      if (oWon(squares)) return "O won"
    }

    for (row <- (0 to 3) ; column <- (0 to 3)) {
      if (!"XOT".toSet.contains(board(row)(column))) {
        return "Game has not completed"
      }
    }

    "Draw"
  }

  def main(args: Array[String]) {
    val runner = new SolverRunner(solveCase)
    runner.testSamples(
      """6
        |XXXT
        |....
        |OO..
        |....
        |
        |XOXT
        |XXOO
        |OXOX
        |XXOO
        |
        |XOX.
        |OX..
        |....
        |....
        |
        |OOXX
        |OXXX
        |OX.T
        |O..O
        |
        |XXXO
        |..O.
        |.O..
        |T...
        |
        |OXXX
        |XO..
        |..O.
        |...O
        |""".stripMargin.lines,
      """Case #1: X won
        |Case #2: Draw
        |Case #3: Game has not completed
        |Case #4: O won
        |Case #5: O won
        |Case #6: O won""".stripMargin.lines
    )
    runner.pollDirectory(".")
  }
}