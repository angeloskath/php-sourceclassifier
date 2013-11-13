# Google Code Jam 2013
# Problem A. Tic-Tac-Toe-Tomek
# mjacquem1

import sys
import logging
import StringIO
from itertools import chain

def echo(fn):
    def wrapped(*v, **k):
        name = fn.__name__
        logging.info( "Called %s(%s)" % (name, ", ".join(map(repr, chain(v, k.values())))) )
        res = fn(*v, **k)
        logging.info( "       %s(%s) returned %s" % (name, ", ".join(map(repr, chain(v, k.values()))),res) )
        return res
    return wrapped

def ttt_won(t,who):
    for i in xrange(4):
        ok = True
        for j in xrange(4):
            ok = ok and (t[i][j]==who or t[i][j]=='T')
        if ok:
            return True
    for i in xrange(4):
        ok = True
        for j in xrange(4):
            ok = ok and (t[j][i]==who or t[j][i]=='T')
        if ok:
            return True
    ok = True
    for i in xrange(4):
        ok = ok and (t[i][i]==who or t[i][i]=='T')
    if ok:
        return True
    ok = True
    for i in xrange(4):
        ok = ok and (t[i][3-i]==who or t[i][3-i]=='T')
    if ok:
        return True
    return False

def ttt_status(t):
    if ttt_won(t,'X'):
        return "X won"
    if ttt_won(t,'O'):
        return "O won"
    for i in xrange(4):
        if t[i].find('.')>=0:
            return "Game has not completed"
    return "Draw"


def main(data=None):
    if data is not None:
        sys.stdin = StringIO.StringIO(data)
    for tc in xrange(1, int(raw_input()) + 1):
        t = [raw_input() for i in xrange(4)]
        dummy = raw_input()
        print 'Case #%d: %s' % (tc, ttt_status(t))
    if data is not None:
        sys.stdin = sys.__stdin__

sample="""6
XXXT
....
OO..
....

XOXT
XXOO
OXOX
XXOO

XOX.
OX..
....
....

OOXX
OXXX
OX.T
O..O

XXXO
..O.
.O..
T...

OXXX
XO..
..O.
...O

"""


# Call main() only if run from command line, not from IDLE
if __name__ == "__main__":
    if True:
#    if '/' not in sys.argv[0] and '\\' not in sys.argv[0]:
        logging.basicConfig(level=logging.ERROR)
        sys.exit(main())
    else:
        logging.basicConfig(level=logging.INFO,format=" %(levelname)s: %(message)s")
