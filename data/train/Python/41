
from string import ascii_lowercase

code = "A-large"

infile = code + ".in"
outfile = code + ".out"

def test(line):
    x = 'X' in line
    o = 'O' in line
    dot = '.' in line
    if not dot:
        if x and not o:
            return 'X'
        if o and not x:
            return 'O'
    return None

def blines(board):
    for i in xrange(4):
        yield board[i]
    for i in xrange(4):
        yield [board[j][i] for j in xrange(4)]
    yield [board[i][i] for i in xrange(4)]
    yield [board[i][3-i] for i in xrange(4)]

def solve(board):
    for bline in blines(board):
        r = test(bline)
        if r is not None:
            return '{0} won'.format(r)
    if any('.' in line for line in board):
        return 'Game has not completed'
    return 'Draw'

lines = [s.strip() for s in open(infile)]
c = int(lines[0])
f = open(outfile, "w")
lineno = 1
for i in range(1, c+1):
    r = solve(lines[lineno:lineno+4])
    lineno += 5
    print >> f, "Case #%d:" % i, r
f.close()
