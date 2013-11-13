# -*- coding: utf-8 -*-
fname = "A-large"
fin = open(fname+".in","r")
fout = open(fname+".out","w")
def gcj_read():
  linestr = fin.readline().strip()
  return [int(numb) for numb in linestr.split()]

numcases = gcj_read()[0]

def get_lines(grid):
    for row in grid:
        yield set(row)
    for i in range(4):
        yield set(r[i] for r in grid)
    yield set(grid[i][i] for i in range(4))
    yield set(grid[i][4-i-1] for i in range(4))

for caseno in range(numcases):
    grid = [fin.readline().strip() for _ in range(4)]
    fin.readline() # Blank line
    for line in get_lines(grid):
        if line.issubset({'X','T'}):
            outstr = 'X won'
            break
        elif line.issubset({'O', 'T'}):
            outstr = 'O won'
            break
    else:
        if '.' in ''.join(grid):
            outstr = "Game has not completed"
        else:
            outstr = "Draw"
    
    print(outstr)
    fout.write("Case #"+str(caseno+1)+": "+ outstr +"\n")

fin.close()
fout.close()
