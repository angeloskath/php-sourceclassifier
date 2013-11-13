import time

def won(table, who):
    # check lines:
    for i in range(4):
        if table[i].count(who) + table[i].count("T") == 4:
            return True
    # check diagonals:
    if table[0][0] in [who, "T"] and table[1][1] in [who, "T"] and table[2][2] in [who, "T"] and table[3][3] in [who, "T"]:
        return True
    if table[0][3] in [who, "T"] and table[1][2] in [who, "T"] and table[2][1] in [who, "T"] and table[3][0] in [who, "T"]:
        return True
    # check columns:
    for i in range(4):
        if table[0][i] in [who, "T"] and table[1][i] in [who, "T"] and table[2][i] in [who, "T"] and table[3][i] in [who, "T"]:
            return True
    return False

def complete(table):
    for i in table:
        if "." in i:
            return False
    return True

def result(table):
    if won(table, "X"):
        return "X won"
    if won(table, "O"):
        return "O won"
    if complete(table):
        return "Draw"
    else:
        return "Game has not completed"

def main():     
    start_time = time.time()
##    f = open("in.txt")
    f = open("A-large.in")
    ff = open("out.txt", "w")
    N = int(f.readline())
    ins = []
    for i in range(N):
        ins1 = []
        for j in range(4):
            ins1.append(f.readline().replace("\n", ""))
        f.readline()
        ins.append(ins1)

    c=1
    for i in ins:
        sol = result(i)
        print "Case #" + str(c) + ": " + sol
        ff.write("Case #" + str(c) + ": " + sol + "\n")
        c+=1


    print "time: " + str(round(time.time()-start_time,2)) + "s"
    f.close()
    ff.close()

main()
