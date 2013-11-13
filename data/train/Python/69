fid = open("input.txt",'r')
fout = open("output.txt",'w')

T = int(fid.readline().strip())

def scorePlayer(board):
  z = 0
  #row total
  z = max(z,max([sum(r) for r in board]))
  #col total
  z = max(z,max([sum([r[i] for r in board]) for i in range(4)]))
  #diags
  z = max(z,sum([board[0][0],board[1][1],board[2][2],board[3][3]]))
  z = max(z,sum([board[0][3],board[1][2],board[2][1],board[3][0]]))
  return z

def analyze(board_str):
  #board is an array of the board, X,O,T,.
  #newlines are already stripped
  X_board = []
  O_board = []
  for row in board_str:
    X_board.append([int(i=="X" or i=="T") for i in row])
    O_board.append([int(i=="O" or i=="T") for i in row])
  X_score = scorePlayer(X_board)
  O_score = scorePlayer(O_board)
  n_spaces = sum([row.count('.') for row in board_str])
  if X_score >= 4:
    return "X won"
  elif O_score >= 4:
    return "O won"
  elif n_spaces > 0:
    return "Game has not completed"
  else:
    return "Draw"

i=1
board=[]
for line in fid:
  line = line.strip()
  if len(line)>0:
    board.append(line)
  else:
    #we have a complete board, analyze
    fout.write("Case #" + str(i) + ": " + analyze(board) + "\n")
    i=i+1
    board=[]


fid.close()
fout.close()
print "T: " + str(T)
print "i: " + str(i)
