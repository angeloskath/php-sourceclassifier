import sys

def is_row_winner(line, player):
    f = filter(lambda x: x == player or x == 'T', line)
    return len(f) == len(line)

def is_winner(board, player):
    for line in board:
        if is_row_winner(line, player):
            return True

    for i in range(4):
        v = map(lambda x: x[i], board)
        if is_row_winner(v, player):
            return True

    d = map(lambda (i,x): x[i], enumerate(board))
    if is_row_winner(d, player):
        return True

    d = map(lambda (i,x): x[3-i], enumerate(board))
    if is_row_winner(d, player):
        return True

    return False

def is_completed(board):
    for line in board:
        if filter(lambda x: x == '.', line):
            return False
    return True

tc = int(sys.stdin.readline())

for t in range(1, tc + 1):
    board = []
    for _ in range(4):
        line = sys.stdin.readline()
        board.append(line.strip())

    result_str =  "Case #" + str(t) + ": "
    if is_winner(board, 'X'):
        result_str += "X won"
    elif is_winner(board, 'O'):
        result_str += "O won"
    elif is_completed(board):
        result_str += "Draw"
    else:
        result_str += "Game has not completed"

    print result_str
    sys.stdin.readline()
