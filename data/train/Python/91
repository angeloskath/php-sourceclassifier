import sys

def line():
    return sys.stdin.readline().strip()

def ints(s):
    return [int(t) for t in s.split()]


def solve(board):
    completed = True
    def check(a,b,c,d):
        os = 0
        xs = 0
        ts = 0
        for i in a,b,c,d:
            if board[i] == '.':
                completed = False
            elif board[i] == 'O':
                os += 1
            elif board[i] == 'X':
                xs += 1
            elif board[i] == 'T':
                ts += 1
        if os + ts == 4:
            return 'O won'
        elif xs + ts == 4:
            return 'X won'
        else:
            return None
    
    for i in range(4):
        res = check(i*4, i*4+1, i*4+2, i*4+3) or check(i, i+4, i+4*2, i+4*3)
        if res:
            return res
    res = check(0,5,10,15) or check(3,6,9,12)
    if res:
        return res
    else:
        return 'Game has not completed' if '.' in board else 'Draw'


def main():
    tc = int(line())
    for i in range(1,tc+1):
        board = ''
        for j in range(4):
            board += line()
        print 'Case #%s: %s' % (i, solve(board))
        line()


main()
