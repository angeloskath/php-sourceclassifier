from sys import stdin

def col(m, i):
    return set([row[i] for row in m])

def row(m, i):
    return set(m[i])

def ldiag(m):
    return set([m[i][i] for i in range(len(m))])

def rdiag(m):
    return set([m[i][len(m)-i-1] for i in range(len(m))])

def solve():
    inp = [stdin.readline().strip() for _ in range(4)]
    #print inp
    stdin.readline()
    full = not any('.' in line for line in inp)
    xwon = owon = False
    xwins = [set(['X']), set(['X','T'])]
    owins = [set(['O']), set(['O','T'])]
    for i in range(4):
        xwon = xwon or col(inp, i) in xwins or row(inp, i) in xwins
        owon = owon or col(inp, i) in owins or row(inp, i) in owins
        #print xwon, owon, col(inp, i), row(inp, i)
    xwon = xwon or ldiag(inp) in xwins or rdiag(inp) in xwins
    owon = owon or ldiag(inp) in owins or rdiag(inp) in owins
    #print xwon, owon, ldiag(inp), rdiag(inp)
    assert not (xwon and owon)
    if xwon: return "X won"
    elif owon: return "O won"
    elif full: return "Draw"
    else: return "Game has not completed"

cases = int(stdin.readline())
for case in range(1, cases+1):
    print "Case #{}: {}".format(case, solve())