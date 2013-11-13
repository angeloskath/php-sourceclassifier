'''
Problem A. Tic-Tac-Toe-Tomek
Solution by vassnlit@gmail.com
'''

LINES = [
    # rows
    (0, 1, 2, 3), (4, 5, 6, 7), (8, 9, 10, 11), (12, 13, 14, 15),
    # columns
    (0, 4, 8, 12), (1, 5, 9, 13), (2, 6, 10, 14), (3, 7, 11, 15), 
    # diagonals
    (0, 5, 10, 15), (3, 6, 9, 12),
]

def getLines(board):
    for line in LINES:
        yield ''.join(sorted(board[pos] for pos in line))

WINS = {
    'TXXX': 'X won',
    'XXXX': 'X won',
    'OOOT': 'O won',
    'OOOO': 'O won',
}

def getOutcome(board):
    for line in getLines(board):
        try:
            return WINS[line]
        except KeyError:
            pass
    if '.' in board:
        return 'Game has not completed'
    else:
        return 'Draw'

import sys
if __name__ == '__main__':
    with open(sys.argv[1], 'r') as inp:
        T = int(inp.readline().strip())
        for t in xrange(T):
            board = ''.join(x.strip() for x in [inp.readline() for i in xrange(4)])
            # skip empty line
            inp.readline()
            print 'Case #%d: %s' % (t+1, getOutcome(board))