class Won(Exception):
    pass
class O(Won):
    pass
class X(Won):
    pass
################################################################
def solve():
    def check(row):
        if "." in row: return None
        if "O" in row and "X" in row: return None
        if "O" in row: raise O
        if "X" in row: raise X

    S = [input.readline().strip(),
         input.readline().strip(),
         input.readline().strip(),
         input.readline().strip()]
    input.readline()
    try:
        for i in range(4):
            check(S[i])
            check([S[j][i] for j in range(4)])
        check([S[i][i] for i in range(4)])
        check([S[3-i][i] for i in range(4)])
    except O:
        return "O won"
    except X:
        return "X won"
    if "." in "".join(S):
        return "Game has not completed"
    return "Draw"

################################################################

from datetime import datetime
time_start = datetime.today()
def now(): return datetime.today() - time_start 

import sys
infilename = sys.argv[1]
outfilename = infilename.replace('.in','.out')

input = open(sys.argv[1], 'r')
output = open(sys.argv[1].replace('.in','.out'), 'w')
n = int(input.readline())

for i in range(1,n+1):
    result = solve()
    print "Case #%d: %s \t %s" % (i, result, now())
    output.write("Case #%d: %s\n" % (i, result))
    output.flush()
