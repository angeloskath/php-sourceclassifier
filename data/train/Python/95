
TTTTrue = [True, True, True, True]
        
def check_c(key, c):
    if c == key or c == 'T':
        return True

def check_line(key, l):
    return TTTTrue == [check_c(key, c) for c in l]

def check_lines(key, ls):
    return True in [check_line(key, l) for l in ls + [cross1(ls), cross2(ls)]]

def cross1(ls):
    return ''.join([ls[i][i] for i in xrange(0, 4)])

def cross2(ls):
    return ''.join([ls[i][3-i] for i in xrange(0, 4)])

def check_cross1(key, ls):
    return check_line(key, cross1(ls))

def check_cross2(key, ls):
    return check_line(key, cross2(ls))

class TTTT(object):
    def __init__(self, lines):
        self.lines = lines
        self.rlines = [lines[0][x] + lines[1][x] + lines[2][x] + lines[3][x] for x in xrange(0, 4)]

    def __repr__(self):
        return '\n'.join('\t'.join((self.lines[x], self.rlines[x])) for x in xrange(0, 4))

    def statement(self):

        def check_slines(key):
            return check_lines(key, self.lines) or check_lines(key, self.rlines)

        if check_slines('O'):
            return 'O won'
        if check_slines('X'):
            return 'X won'

        if TTTTrue == ['.' not in l for l in self.lines]:
            return 'Draw'
        return 'Game has not completed'

if __name__ == '__main__':
    tttts = []
    case_count = input()
    for x in xrange(0, case_count):
        inputs = [raw_input(), raw_input(), raw_input(), raw_input()]
        tttt = TTTT(inputs)
        tttts.append(tttt)
        try:
            raw_input() # pass a line
        except:
            pass
        #print tttt
        #print ''

    for i, tttt in enumerate(tttts):
        print 'Case #%d:' % (i + 1), tttt.statement()
