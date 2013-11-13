

case class Table[T](n: Int, m: Int, data: IndexedSeq[T]) { //n rows, m cols
  val length = n*m
  def apply(row: Int, col: Int) = data(row*m+col)
  def slice(start: Int, count: Int, delta: Int) = (0 until count) map (i => data(start + i*delta))
  def rowColToIndex(row: Int, col: Int) = row*m + col
  def row(i: Int) = data.slice(i*m, (i+1)*m)
  def rows = (0 until n).view map row
  def col(i: Int) = slice(i, n, m)
  def cols = (0 until m).view map col
  def diag_\ (i: Int) = 
    if (i < m) slice(rowColToIndex(0, m - i - 1), math.min(i + 1, n), m + 1) 
    else if (i < m + n - 1) slice(rowColToIndex(i - m + 1, 0), math.min(n + m - 1 - i, m), m + 1)
    else throw new java.lang.IndexOutOfBoundsException("diag\\ "+i)
  def diags_\ = (0 until n+m-1).view map diag_\
  def diag_/ (i: Int) = 
    if (i < m) slice(rowColToIndex(0, i), math.min(i + 1, n), m - 1)
    else if (i < m + n - 1) slice(rowColToIndex(i-m+1, m-1), math.min(m + n - 1 - i, m), m - 1)
    else throw new java.lang.IndexOutOfBoundsException("diag/ "+i)
  def diags_/ = (0 until n+m-1).view map diag_/
}




def solve(fn: String) {
  var it = io.Source.fromFile("/tmp/"+fn).getLines
  val pw = new java.io.PrintWriter(new java.io.File("/tmp/"+fn+".out"))
  val N = it.next
  for (i <- 1 to N.toInt) {
    val sq = it.filter(_ != "").take(4).mkString
    val board = Table[Char](4,4,sq.toArray)
    def testWinner(s: String, c: Char) = s.count(_ == c) == 4 || (s.count(_ == c) == 3 && s.contains('T'))  
    def winner(c: Char) = { (
      board.rows.exists(row => testWinner(row.mkString, c)) 
      || board.cols.exists(row => testWinner(row.mkString, c)) 
      || testWinner(board.diag_\ (3).mkString, c) 
      || testWinner(board.diag_/ (3).mkString, c) 
    ) }
    if (winner('O')) pw.println("Case #"+i+": O won")
    else if (winner('X')) pw.println("Case #"+i+": X won")
    else if (sq.contains(".")) pw.println("Case #"+i+": Game has not completed")
    else pw.println("Case #"+i+": Draw")  
  }
  pw.println
  pw.close
}