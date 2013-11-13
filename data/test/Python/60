#!/usr/bin/env python

import sys
from bitarray import bitarray

t = int(sys.stdin.readline())

winners = [ bitarray('1111000000000000'),
            bitarray('0000111100000000'),
            bitarray('0000000011110000'),
            bitarray('0000000000001111'),
            bitarray('1000100010001000'),
            bitarray('0100010001000100'),
            bitarray('0010001000100010'),
            bitarray('0001000100010001'),
            bitarray('1000010000100001'),
            bitarray('0001001001001000')]

for testcase in xrange(t):
    print 'Case #' + str(testcase+1) + ': ',
    board = ''.join(c for _ in xrange(5) for c in sys.stdin.readline().strip())
    pO = bitarray(c in 'OT' for c in board)
    pX = bitarray(c in 'XT' for c in board)

    if any(pO & winner == winner for winner in winners):
        print 'O won'
    elif any (pX & winner == winner for winner in winners):
        print 'X won'
    elif '.' in board:
        print 'Game has not completed'
    else:
        print 'Draw'
