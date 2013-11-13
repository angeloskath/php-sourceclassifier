def wins(grid):
    
    def winsRCD(rcd):
        if len(rcd) <= 2 and rcd != set(['O', 'X']) and '.' not in rcd:
            return list(rcd-set('T'))[0]

    whoWins = set()
    
    for i in range(4):
        retR = winsRCD(set([grid[i][j] for j in range(4)]))
        if retR != None:
            whoWins.add(retR)
        retC = winsRCD(set([grid[j][i] for j in range(4)]))
        if retC != None:
            whoWins.add(retC)
            
        
    retD1 = winsRCD(set([grid[j][j] for j in range(4)]))
    if retD1 != None:
        whoWins.add(retD1)
            

    retD2 = winsRCD(set([grid[j][3-j] for j in range(4)]))
    if retD2 != None:
        whoWins.add(retD2)
    return whoWins

def full(grid):
    for g in grid:
        if '.' in g: return False
    return True

T = int(input())
for i in range(T):
    g = []
    for j in range(4):
        g.append(list(input()))

    try:
        input()
    except EOFError:
        pass
    
    ret = wins(g)
    if len(ret) == 0:
        if full(g):
            retStr = "Draw"
        else:
            retStr = "Game has not completed"
        
    elif len(ret) == 2:
        retStr = "Something went very wrong!"
    else: retStr = "{} won".format(list(ret)[0])

    print("Case #{}: {}".format(i+1, retStr))
