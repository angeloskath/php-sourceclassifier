#!/usr/bin/env python2
# -*- coding: utf-8 -*-

from sys import stdin

C = int(stdin.readline())
for c in range(1,C+1):
    a = []
    X = False
    O = False
    dots = False
    for i in range(0, 5):
        a.append(stdin.readline()[:-1])
        if "." in a[len(a) - 1]: dots = True
        if a[len(a) - 1].replace("T", "X") == "XXXX": X = True
        if a[len(a) - 1].replace("T", "O") == "OOOO": O = True


    for i in range(0, 4):
        if (a[0][i] + a[1][i] + a[2][i] + a[3][i]).replace("T", "X") == "XXXX": X = True
        if (a[0][i] + a[1][i] + a[2][i] + a[3][i]).replace("T", "O") == "OOOO": O = True

    if (a[0][0] + a[1][1] + a[2][2] + a[3][3]).replace("T", "X") == "XXXX": X = True
    if (a[0][0] + a[1][1] + a[2][2] + a[3][3]).replace("T", "O") == "OOOO": O = True

    if (a[0][3] + a[1][2] + a[2][1] + a[3][0]).replace("T", "X") == "XXXX": X = True
    if (a[0][3] + a[1][2] + a[2][1] + a[3][0]).replace("T", "O") == "OOOO": O = True

    print "Case #%d:" % c ,
    if X == O:
        if dots == True:
            print "Game has not completed"
        else:
            print "Draw"
    elif X == True:
        print "X won"
    elif O == True:
        print "O won"
