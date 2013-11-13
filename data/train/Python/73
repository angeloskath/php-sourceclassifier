from sys import stdin

lines = [
    [(0,0), (0,1), (0,2), (0,3)],
    [(1,0), (1,1), (1,2), (1,3)],
    [(2,0), (2,1), (2,2), (2,3)],
    [(3,0), (3,1), (3,2), (3,3)],
    [(0,0), (1,1), (2,2), (3,3)],
    [(3,0), (2,1), (1,2), (0,3)],
    [(0,0), (1,0), (2,0), (3,0)],
    [(0,1), (1,1), (2,1), (3,1)],
    [(0,2), (1,2), (2,2), (3,2)],
    [(0,3), (1,3), (2,3), (3,3)]]

def eval(board):
    finished = True	
    for L in lines:
        line = [board[P[0]][P[1]] for P in L]
        if '.' in line:
            finished = False
        elif not 'X' in line:
            return "O won"
        elif not 'O' in line:
            return "X won"
    if finished:
        return "Draw"
    else:
        return "Game has not completed"

C = int(stdin.readline())
for x in range(C):
    board = [[Y for Y in stdin.readline().strip()] for X in range(4)]
    stdin.readline() 
    print "Case #" + str(x+1) + ": " + eval(board)


