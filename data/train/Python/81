import os , sys



def checkgame(board , value):
               
    for i in range(0,4):
         for j in range(0,4):
             if(board[i][j] != value):
                 break
         else:
             return True
   
    for i in range(0,4):
        for j in range(0,4):
            if(board[j][i] != value):
                break
        else:
            return True
         
    for i in range(0,4):
        if(board[i][i] != value):
            break
    else:
        return True

    for i in range(0,4):
        if(board[3-i][i] != value):
            break
    else:
        return True
        

    return False


file = open(sys.argv[1],'r')

testnum = int(file.readline())

for test in range(0,testnum):

    if test > 0:
        file.readline() #skip empty line

     #contruct board
    board  = [list(file.readline().strip()) for x in xrange(4)] 

    val = (-1 , -1)
    tval = False        
    dotval = False
    for i in range(0,4):
        for j in range(0,4):
            if(board[i][j] == 'T'):
                val  = (i , j)
            if(board[i][j] == '.'):
                dotval = True
                 
 
     
    if(val[0] != -1):
        tval = True
     
     #check if X wins

    if tval:
        board[val[0]][val[1]]='X'
        
    if checkgame(board , 'X'):
        print "Case #%d: X won" % (test+1)
        continue

     #check if O wins
    if tval:
        board[val[0]][val[1]]='O'    
          

    if checkgame(board , 'O'):
        print "Case #%d: O won" % (test+1)
        continue

     #check if draw
    if dotval:
        print "Case #%d: Game has not completed" % (test + 1)
    else:
        print "Case #%d: Draw" % (test + 1)

    


