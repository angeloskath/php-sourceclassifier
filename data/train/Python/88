

X_WON = "X won"
O_WON = "O won"
DRAW = "Draw"
ONGOING = "Game has not completed"


def calc_state(table):
    #horizontal
    for i in range(0, 4):
        if table[i].replace('T', 'X') == "XXXX":
            return X_WON
        if table[i].replace('T', 'O') == "OOOO":
            return O_WON
    #vertical
    lines = vertical_lines(table)
    for i in range(0, 4):
        if lines[i].replace('T', 'X') == "XXXX":
            return X_WON
        if lines[i].replace('T', 'O') == "OOOO":
            return O_WON
    #diagonal
    lines = diagonal_lines(table)
    for i in range(0,2):
        if lines[i].replace('T', 'X') == "XXXX":
            return X_WON
        if lines[i].replace('T', 'O') == "OOOO":
            return O_WON
    #no winner
    if "." in table[0] or "." in table[1] or "." in table[2] or "." in table[3]:
        return ONGOING
    else:
        return DRAW



def diagonal_lines(table):
    d1 = table[0][0] + table[1][1] + table[2][2] + table[3][3]
    d2 = table[3][0] + table[2][1] + table[1][2] + table[0][3]
    return [d1, d2]

def vertical_lines(table):
    retval = []
    for i in range(0, 4):
        retval.append(table[0][i] + table[1][i] + table[2][i] + table[3][i])
    return retval

def main():
    
    inf = open("small.in")
    outf = open("small.out", "w")
    
    nr = int(inf.readline())
    
    for i in range(0, nr):
        table = []
        table.append(inf.readline().strip())
        table.append(inf.readline().strip())
        table.append(inf.readline().strip())
        table.append(inf.readline().strip())
        state = calc_state(table)
        print(state);
        outf.write("Case #%s: %s\n" % (str(i+1), state))
        
        inf.readline()
        
    outf.close()


if __name__ == '__main__':
    main()