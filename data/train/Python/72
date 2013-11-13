from sys import stdin, stdout

stdin = open('A-large.in', 'r')
stdout = open('A-large.out', 'w')

T = int(stdin.readline().strip())

for t in range(1, T+1):

    # read the input matrix
    mat = []
    while len(mat) < 4:
        s = stdin.readline().strip()
        if s != '':
            mat.append(s)

    # judging
    hasGap = False # whether the matrix has gap
    xWins = False  # whether X has winning position
    oWins = False  # whether Y has winning position

    # horizontal detection
    for s in mat:
        hasGap = hasGap or '.' in s
        xWins = xWins or ''.join(sorted(s)) in {'TXXX', 'XXXX'}
        oWins = oWins or ''.join(sorted(s)) in {'OOOT', 'OOOO'}
    
    # diagonal detection
    xWins = xWins or \
        ''.join(sorted([mat[i][i] for i in range(0, 4)])) \
        in {'TXXX', 'XXXX'}
    xWins = xWins or \
        ''.join(sorted([mat[3-i][i] for i in range(0, 4)])) \
        in {'TXXX', 'XXXX'}
    oWins = oWins or \
        ''.join(sorted([mat[i][i] for i in range(0, 4)])) \
        in {'OOOT', 'OOOO'}
    oWins = oWins or \
        ''.join(sorted([mat[3-i][i] for i in range(0, 4)])) \
        in {'OOOT', 'OOOO'}

    # vertical detection
    for i in range(0, 4):
        xWins = xWins or \
            ''.join(sorted([mat[j][i] for j in range(0, 4)])) \
            in {'TXXX', 'XXXX'}
        oWins = oWins or \
            ''.join(sorted([mat[j][i] for j in range(0, 4)])) \
            in {'OOOT', 'OOOO'}

    #output
    stdout.write('Case #%d: ' % t)
    if xWins:
        stdout.write('X won\n')
    elif oWins:
        stdout.write('O won\n')
    elif hasGap:
        stdout.write('Game has not completed\n')
    else:
        stdout.write('Draw\n')

stdin.close()
stdout.close()
