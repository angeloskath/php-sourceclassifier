# @gilesgardam
rows = [((i, 0), (0, 1)) for i in range(4)]
cols = [((0, i), (1, 0)) for i in range(4)]
diags = [((0, 0), (1, 1)), ((3, 0), (-1, 1))]
lines = rows + cols + diags
T = int(raw_input())

def solve(a):
    for playa in ['O', 'X']:
        for start, direction in lines:
            x, y = start
            dx, dy = direction
            if all(a[x+i*dx][y+i*dy] in playa+'T' for i in range(4)):
                return playa + ' won'
    if '.' in ''.join(a):
        return 'Game has not completed'
    return 'Draw'

for case_num in xrange(1, T+1):
    a = []
    for i in xrange(4):
        a.append(raw_input())
    raw_input()
    print "Case #%d: %s" % (case_num, solve(a))
