def getLine(filename):
    inputFile = open(filename, 'r')
    for line in inputFile:
        yield line
    inputFile.close()

inputFilename = 'A-large.in'
outputFilename = 'A-large.txt'

tokenIterator = getLine(inputFilename)
def get():return tokenIterator.next()
def getint(): return int(get())
outputFile = open(outputFilename, 'w')

# END PRE-PROCESSING

caseNum = getint()
for case in range(caseNum):

    x = [0]*4
    for i in range(4):
        x[i] = get()
        
    if case != caseNum-1:
        get()
        
    state = 'F'
    for i in range(4):
        for j in range(4):
            if x[i][j] == '.':
                state = 'U'
                
    def validate(p):
        global state
        q = p[0] if p[0] != 'T' else p[1]
        if q != '.' and all([(pp == q or pp == 'T') for pp in p]):
            state = q
        return False
    
    for i in range(4):
        validate([x[i][0], x[i][1], x[i][2], x[i][3]])
        validate([x[0][i], x[1][i], x[2][i], x[3][i]])
    validate([x[0][0], x[1][1], x[2][2], x[3][3]])
    validate([x[0][3], x[1][2], x[2][1], x[3][0]])

    ans = 'Game has not completed'
    if state == 'F':
        ans = 'Draw'
    elif state != 'U':
        ans = state + ' won'
    output = "Case #"+str(case+1)+": "+str(ans)
    outputFile.write(output+"\n")

# BEGIN POST-PROCESSING
outputFile.close()

