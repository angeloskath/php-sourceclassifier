read_ints = lambda: map(int, raw_input().split())
T = int(raw_input())

def good(x, c):
    return x == c or x == 'T'

def goods(x, c):
    for _ in x:
        if not good(_, c):
            return False
    else:
        return True

def gen(sx, sy, dx, dy):
    return [ttt[sx+dx*_][sy+dy*_] for _ in xrange(4)]

for no_t in xrange(1, T + 1):
    ttt = [raw_input() for _ in xrange(5)] # tic-tac-toe
    
    ans = None
    for c in "XO":
        for s in xrange(4):
            if goods(gen(s, 0, 0, 1), c):
                ans = c
            if goods(gen(0, s, 1, 0), c):
                ans = c
        if goods(gen(0, 0, 1, 1), c):
            ans = c
        if goods(gen(0, 3, 1, -1), c):
            ans = c

    if ans:
        print 'Case #%d: %c won' % (no_t, ans)
    elif '.' in ''.join(ttt):
        print 'Case #%d: Game has not completed' % no_t
    else:
        print 'Case #%d: Draw' % no_t
