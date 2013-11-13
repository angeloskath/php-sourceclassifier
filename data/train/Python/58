#!/usr/bin/env python
#-*- coding:utf-8 -*-
import sys

def who_win(status):
    all_filled = True
    for player in ("X", "O"):
        S = set([player, "T"])
        columns = [[s[i] for s in status] for i in range(4)]
        diagonal1 = [status[i][i] for i in range(4)]
        diagonal2 = [status[i][3 - i] for i in range(4)]
        for s in status + columns + [diagonal1, diagonal2]:
            if set(s).issubset(S):
                return "{0} won".format(player)

    for s in status:
        if "." in s:
            all_filled = False
    if all_filled:
        return "Draw"
    else:
        return "Game has not completed"

def get_input(f):
    N = int(next(f))
    for i in range(N):
        status = [next(f).strip() for _ in range(4)]
        yield status
        next(f)

def main():
    for i, status in enumerate(get_input(sys.stdin)):
        print "Case #{0}:".format(i+1), who_win(status)

if __name__ == "__main__":
    main()
