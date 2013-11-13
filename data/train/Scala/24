package com.abdulradi.codejam.contest2013.round0.ticTacToeTomek

import scala.io.Source._

object TicTacToeTomek {
    type Row = Seq[Char]
    type Board = Seq[Row]
    val X = 'X'
    val O = 'O'
    val T = 'T'
    val E = '.'

  def main(args: Array[String]) {
    stdin.getLines.grouped(5).zipWithIndex.foreach{ 
      case ((entry:Seq[String], i: Int)) =>
        println("Case #%d: %s".format( i+1, solveCase(entry.tail)))
    }
  }

  def solveCase(entry:  Seq[String]): String = {
    val b = entry.map(_.toSeq)
    whoWonBoard(b) match {
      case X => "X won"
      case O => "O won"
      case E => if(isFullBoard(b)) "Draw" else "Game has not completed"
    }
  }
  
  def whoWonBoard(b: Board): Char =
    whoWonHorizontal(b) match {
      case E => {
        whoWonVertical(b) match {
          case E => whoWonDiagonal(b)
          case xy => xy
        }   
      }
      case xy => xy
    }
  
  def isFullBoard(b: Board): Boolean =
    ! b.map(_ contains E).reduce(_ || _)
  
  def isWin(r: Row)(c: Char): Boolean =
    r.map(i => i == c || i == T).reduce(_ && _)
  
  def whoWon(r: Row): Char = {
    val clause = isWin(r) _
    if (clause(X)) X
    else if (clause(O)) O
    else E
  }
  
  def whoWonHorizontal(b: Board): Char = {
    val clause = b.map(whoWon(_)).contains _
    if (clause(X)) X
    else if (clause(O)) O
    else E
  }
  
  def whoWonVertical(b: Board): Char = whoWonHorizontal(b.transpose)
  
  def whoWonDiagonal(b: Board): Char = {
    val d1 = Seq(b(0)(0), b(1)(1), b(2)(2), b(3)(3))
    lazy val d2 = Seq(b(0)(3), b(1)(2), b(2)(1), b(3)(0))
    whoWon(d1) match {
      case E => whoWon(d2)
      case xy => xy
    }
  }
}
