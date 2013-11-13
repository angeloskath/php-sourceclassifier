import glob

def processquestion(index, question):
    print "Case #%d:"%index,
    draw = (question.count('.')==0)
    xwin = False
    owin = False
    q = question.split('/n')
    #check rows
    for i in xrange(4):
        xcount = 0
        ocount = 0
        for j in xrange(4):
            if q[i][j]=='X':
                xcount += 1
            elif q[i][j]=='O':
                ocount += 1
            elif q[i][j]=='T':
                ocount += 1
                xcount += 1
        if xcount == 4:
            xwin = True
        elif ocount == 4:
            owin = True
    
    #check columns
    for i in xrange(4):
        xcount = 0
        ocount = 0
        for j in xrange(4):
            if q[j][i]=='X':
                xcount += 1
            elif q[j][i]=='O':
                ocount += 1
            elif q[j][i]=='T':
                ocount += 1
                xcount += 1
        if xcount == 4:
            xwin = True
        elif ocount == 4:
            owin = True
    
    #check diag1
    xcount = 0
    ocount = 0
    for j in xrange(4):
        if q[j][j]=='X':
            xcount += 1
        elif q[j][j]=='O':
            ocount += 1
        elif q[j][j]=='T':
            ocount += 1
            xcount += 1
    if xcount == 4:
        xwin = True
    elif ocount == 4:
        owin = True
    
    #check diag2
    xcount = 0
    ocount = 0
    for j in xrange(4):
        if q[j][3-j]=='X':
            xcount += 1
        elif q[j][3-j]=='O':
            ocount += 1
        elif q[j][3-j]=='T':
            ocount += 1
            xcount += 1
    if xcount == 4:
        xwin = True
    elif ocount == 4:
        owin = True
        
        
    if xwin:
        print "X won"
    elif owin:
        print "O won"
    elif draw:
        print "Draw"
    else:
        print "Game has not completed"
    

with open(glob.glob('*.in')[0]) as p:
    numquestions = int(p.readline().strip())
    
    for questionindex in xrange(numquestions):
        question = ''
        for line in p:
            line = line.strip()
            if line <> '':
                question += line + '/n'
            else:
                break
        processquestion(1+questionindex, question)
    
    