def won(m, poss, p):
    for i in xrange(4):
        if m[poss[i][1]][poss[i][0]] != p and m[poss[i][1]][poss[i][0]] != "T":
            return False
    return True

def solve(m):
    m2 = m
    m = m.split("\n")
    for i in xrange(4):
        if won(m, [(i, j) for j in xrange(4)], "O"):
            return "O won"
        if won(m, [(j, i) for j in xrange(4)], "O"):
            return "O won"
        if won(m, [(i, j) for j in xrange(4)], "X"):
            return "X won"
        if won(m, [(j, i) for j in xrange(4)], "X"):
            return "X won"
    if won(m, [(i, i) for i in xrange(4)], "X"):
        return "X won"
    if won(m, [(3-i, i) for i in xrange(4)], "X"):
        return "X won"
    if won(m, [(i, i) for i in xrange(4)], "O"):
        return "O won"
    if won(m, [(3-i, i) for i in xrange(4)], "O"):
        return "O won"
    if "." in m2: return "Game has not completed"
    return "Draw"

prob = "a"
f = open(prob+".in","r")
d = f.read()[:-1]
f.close()
f = open(prob+".out","w")
ms = "\n".join(d.split("\n")[1:]).split("\n\n")
T = 1
for m in ms:
    S = "Case #%d: %s" % (T, solve(m))
    print S
    f.write(S + "\n")
    T += 1
f.close()
