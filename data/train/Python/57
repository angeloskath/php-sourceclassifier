def testLine(board, line):
  row = []
  for (x, y) in line:
    row.append(board[x][y])
  if row.count("X") == 4 or (row.count("X") == 3 and row.count("T") == 1):
    return "X"
  if row.count("O") == 4 or (row.count("O") == 3 and row.count("T") == 1):
    return "O"
  return ""

def makeLines():
  out = []
  for i in xrange(4):
    out.append([(0, i), (1, i), (2, i), (3, i)])
    out.append([(i, 0), (i, 1), (i, 2), (i, 3)])
  out.append([(0, 0), (1, 1), (2, 2), (3, 3)])
  out.append([(0, 3), (1, 2), (2, 1), (3, 0)])
  return out

def isDraw(board):
  for row in board:
    if row.count(".") != 0:
      return False
  return True

def check(board):
  lines = makeLines()
  for line in lines:
    if testLine(board, line) != "":
      return testLine(board, line)
  if isDraw(board):
    return "Draw"
  return ""

def main(inpath):
  lines = open(inpath, 'r').read().split('\n')
  cases = int(lines[0])
  outfile = open("out.txt", "w")

  for i in xrange(1, cases + 1):
    c = check(lines[5*i - 4 : 5*i])
    if c == "X":
      outfile.write("Case #" + str(i) + ": X won\n")
    elif c == "O":
      outfile.write("Case #" + str(i) + ": O won\n")
    elif c == "Draw":
      outfile.write("Case #" + str(i) + ": Draw\n")
    elif c == "":
      outfile.write("Case #" + str(i) + ": Game has not completed\n")
  outfile.close()

main('input.txt')
