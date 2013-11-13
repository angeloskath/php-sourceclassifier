import numpy as np

def checkWin(p):
    #2 is X, 3 is O, check using the MOD method
    if p == 0:
        return "no"
    if p % 2 == 0 and p % 3 != 0:
        return 'X'
    if p % 2 != 0 and p % 3 == 0:
        return 'O'
    else:
        return 'draw'


def solve(filename):
    fin = open(filename + '.in', 'r')
    fout = open(filename + '.out', 'w')

    T = int(fin.readline())
    for case in xrange(T):
        answer = ""
        board = np.zeros((4, 4), np.int)
        for i in xrange(4):
            line = fin.readline().strip()
            for j in xrange(4):
                if line[j] == 'X':
                    board[i, j] = 2
                elif line[j] == 'O':
                    board[i, j] = 3
                elif line[j] == 'T':
                    board[i, j] = 1
        #check rows and columns
        prods = []
        for i in xrange(4):
            row_prod = np.prod(board[i, :])
            col_prod = np.prod(board[:, i])
            prods.append(checkWin(row_prod))
            prods.append(checkWin(col_prod))
            #print checkWin(row_prod), checkWin(col_prod)
        #diagonals
        prod_diag1 = 1
        prod_diag2 = 1
        for i in xrange(4):
            prod_diag1 *= board[i, i]
            prod_diag2 *= board[i, 3 - i]
        prods.append(checkWin(prod_diag1))
        prods.append(checkWin(prod_diag2))

        #check answers
        if 'no' in prods:
            if 'X' not in prods and 'O' not in prods:
                answer = 'Game has not completed'
            elif 'X' in prods and 'O' not in prods:
                answer = 'X won'
            elif 'X' not in prods and 'O' in prods:
                answer = 'O won'
        else:
            if 'X' not in prods and 'O' not in prods:
                answer = 'Draw'
            elif 'X' in prods and 'O' not in prods:
                answer = 'X won'
            elif 'X' not in prods and 'O' in prods:
                answer = 'O won'

        print answer
        fout.write(('Case #%d: ' % (case + 1)) + str(answer) + '\n')
        fin.readline()

    fin.close()
    fout.close()

if __name__ == "__main__":
    # solve("A-tiny")
    # solve("A-small-attempt0")
    solve("A-large")