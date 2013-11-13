import sys

# A board is going to be list of lists, more precisely, a list of rows:
# [['X', '.', 'O', '.'],
#  ['.', 'T', 'X', '.'],
#  ['.', '.', '.', '.'],
#  ['.', '.', '.', '.']]

def check_4(foursome):
    if foursome.count('X') + foursome.count('T') == 4:
        return 'X won'
    elif foursome.count('O') + foursome.count('T') == 4:
        return 'O won'
    else:
        return None

def check_rows(board):
    for row in board:
        winner = check_4(row)
        if winner:
            return winner
    return None

def check_cols(board):
    for i in range(4):
        col = [board[0][i], board[1][i], board[2][i], board[3][i]]
        winner = check_4(col)
        if winner:
            return winner
    return None

def check_diags(board):
    lead_diag = [board[0][0], board[1][1], board[2][2], board[3][3]]
    winner = check_4(lead_diag)
    if winner:
        return winner

    nonlead_diag = [board[0][3], board[1][2], board[2][1], board[3][0]]
    winner = check_4(nonlead_diag)
    if winner:
        return winner

def check_complete(board):
    for row in board:
        if '.' in row:
            return False
    return True

def board_result(board):
    winner = check_rows(board)
    if winner:
        return winner

    winner = check_cols(board)
    if winner:
        return winner

    winner = check_diags(board)
    if winner:
        return winner

    if check_complete(board):
        return 'Draw'
    else:
        return 'Game has not completed'

if __name__ == '__main__':
    num_boards = int(sys.stdin.readline().strip())

    boards = []
    for b_n in range(num_boards):
        board = []
        for i in range(4):
            board.append(list(sys.stdin.readline().strip()))
        sys.stdin.readline()
        boards.append(board)

    case = 1
    for board in boards:
        result = board_result(board)
        print "Case #%d: %s" % (case, result)
        case += 1
