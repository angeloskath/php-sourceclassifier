import sys

lines = sys.stdin.readlines()

ntests = int(lines[0])

def checkGame(pieces):
    if pieces.issubset(set(["O", "T"])):
        print "Case #" + str(case) + ": O won"
        return True
    if pieces.issubset(set(["X", "T"])):
        print "Case #" + str(case) + ": X won"
        return True
    return False

case = 0;
for i in xrange(1, len(lines), 5):
    case = case + 1

    board = lines[i:i+4]
    success = False

    # check rows and columns
    allpieces = set()
    for r in xrange(0, 4):
        rowset = set();
        colset = set();
        for c in xrange(0, 4):
            allpieces.add(board[r][c])
            rowset.add(board[r][c])
            colset.add(board[c][r])
            
        if checkGame(rowset):
            success = True
            break
        if checkGame(colset):
            success = True
            break

    if not success:
        diag1 = set([board[0][0], board[1][1], board[2][2], board[3][3]])
        diag2 = set([board[3][0], board[2][1], board[1][2], board[0][3]])

        if checkGame(diag1):
            success = True
        if checkGame(diag2):
            success = True

    if not success:
        if allpieces.issubset(set(["O", "X", "T"])):
            print "Case #" + str(case) + ": Draw"
        else:
            print "Case #" + str(case) + ": Game has not completed"
