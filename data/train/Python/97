f = open("dataIn.txt", 'r')
g = open("dataOut.txt", 'w')

t = int(f.readline())

XWinPatterns = [['X', 'X', 'X', 'X'], ['T', 'X', 'X', 'X'],
                ['X', 'T', 'X', 'X'], ['X', 'X', 'T', 'X'],
                ['X', 'X', 'X', 'T']]
OWinPatterns = [['O', 'O', 'O', 'O'], ['T', 'O', 'O', 'O'],
                ['O', 'T', 'O', 'O'], ['O', 'O', 'T', 'O'],
                ['O', 'O', 'O', 'T']]

for i in range(t):
    mat = []
    for j in range(4):
        row = list(f.readline())
        if row[-1] == '\n':
            row = row[:-1]
        mat.append(row)
    f.readline()

    result = "None"

    rowList = mat + map(list, zip(*mat)) + [[mat[0][0], mat[1][1], mat[2][2], mat[3][3]], [mat[0][3], mat[1][2], mat[2][1], mat[3][0]]]
    for row in rowList:
        if row in XWinPatterns:
            result = "X won"
        elif row in OWinPatterns:
            result = "O won"

    if result == "None":
        if '.' in mat[0] or '.' in mat[1] or '.' in mat[2] or '.' in mat[3]:
            result = "Game has not completed"
        else:
            result = "Draw"
    
    g.write("Case #" + str(i+1) + ": " + result + '\n')
    
f.close()
g.close()

print "Done."
