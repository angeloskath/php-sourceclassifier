#!/usr/bin/env python

import sys

S = 4
x_won = "X won"
o_won = "O won"
draw = "Draw"
not_completed = "Game has not completed"

def solve(board):
    ways = []
    ways.append([ (j, j) for j in xrange(S) ])
    ways.append([ (j, S - j - 1) for j in xrange(S) ])
    for i in xrange(S):
        ways.append([ (i, j) for j in xrange(S) ])
        ways.append([ (j, i) for j in xrange(S) ])
    completed = True
    for way in ways:
        x = True
        o = True
        for pos in way:
            c = board[pos[0]][pos[1]]
            if c == 'X':
                o = False
            if c == 'O':
                x = False
            if c == '.':
                completed = False
                x = False
                o = False
        if x:
            return x_won
        if o:
            return o_won
    if completed:
        return draw
    return not_completed

T = int(sys.stdin.readline())
for t in xrange(T):
    if t > 0:
        sys.stdin.readline()
    board = []
    for i in xrange(S):
        board.append(sys.stdin.readline())
    res = solve(board)
    print "Case #%d: %s" % (t + 1, res)
