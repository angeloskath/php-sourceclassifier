import sys
#f = open('A-test.in','r')
#f = open('A-small-attempt0.in','r')
f = sys.stdin
T = int(f.readline())

def win(b1):
    status = 0
    for i in xrange(4):
        s = 0
        for j in xrange(4):
            s += b1[i][j]
        if s==4: status = 1
        s = 0
        for j in xrange(4):
            s += b1[j][i]
        if s==4: status = 1
    s = 0
    for i in xrange(4):
        s += b1[i][i]
    if s==4: status = 1
    s = 0
    for i in xrange(4):
        s += b1[i][3-i]
    if s==4: status = 1
    return status 


for t in xrange(T):
    b = [f.readline().strip() for i in xrange(4)]
    f.readline()

    b1 = [[1 if b[i][j]=='X' or b[i][j]=='T' else 0 for j in xrange(4)] for i in xrange(4)]
    b2 = [[1 if b[i][j]=='O' or b[i][j]=='T' else 0 for j in xrange(4)] for i in xrange(4)]

    #print b1

    s1 = win(b1)
    s2 = win(b2)

    dots = 0
    for i in xrange(4):
        for j in xrange(4):
            if b[i][j] == '.':
                dots += 1

    #print s1,s2,dots

    if s2==1: status = 'O won'
    elif s1==1: status = 'X won'
    elif dots==0: status = 'Draw'
    else: status = 'Game has not completed'
    print 'Case #%d: %s'%(t+1,status)

