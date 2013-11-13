#!/usr/bin/env python
# -*- coding: UTF-8 -*-

import sys

def ReadIn():
    n = int(raw_input())
    for case in xrange(1, n + 1):
        board = [raw_input().strip() for i in range(4)]
        raw_input()
        yield case, board

def Solve(board):
    for line in board + zip(*board) + \
            [[board[r][r] for r in range(4)], [board[r][c] for r, c in zip(range(4), reversed(range(4)))]]:
        if all(ch in ('X', 'T') for ch in line):
            return 'X won'
        if all(ch in ('O', 'T') for ch in line):
            return 'O won'
    if all(ch in ('X', 'O', 'T') for ch in ''.join(board)):
        return 'Draw'
    else:
        return 'Game has not completed'

if __name__ == '__main__':
    for case, board in ReadIn():
        print 'Case #%d: %s' % (case, Solve(board))
