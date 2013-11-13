#!/usr/bin/python

from collections import defaultdict

def get():
    board = []
    for x in xrange(4):
        board.append(raw_input().strip())
    raw_input()
    transpose = zip(*board)

    def ok(s):
        count = defaultdict(int)
        for x in s:
            count[x] += 1
        if count['X'] == 4 or (count['X'] == 3 and count['T'] == 1):
            return 'X'
        if count['O'] == 4 or (count['O'] == 3 and count['T'] == 1):
            return 'O'
        return False

    def win():
        for x in xrange(4):
            r = ok(board[x]) or ok(transpose[x])
            if r:
                return r
        a = [board[x][x] for x in xrange(4)]
        b = [board[x][3-x] for x in xrange(4)]
        return ok(a) or ok(b)

    r = win()
    if r:
        return r + ' won'
    for x in xrange(4):
        if '.' in board[x]:
            return 'Game has not completed'
    return 'Draw'

n = input()
for x in xrange(n):
    print 'Case #%d: %s' % (x+1, get())
