f = open("A-large.in", "r")
g = open("answer.txt", "w")

def ff(s):
	if s=="X": return 1
	if s=="O": return 2
	if s=="\n": return -1
	if s=="T": return 3
	if s==".": return 0

def rr(grid, i):
	if grid[i][0]==grid[i][1]==grid[i][2]==grid[i][3] and grid[i][0]>0: return True
	return False

def cc(grid, i):
	if grid[0][i]==grid[1][i]==grid[2][i]==grid[3][i] and grid[0][i]>0: return True
	return False

def diag1(grid):
	if grid[0][0]==grid[1][1]==grid[2][2]==grid[3][3] and grid[0][0]>0: return True
	return False

def diag2(grid):
	if grid[0][3]==grid[1][2]==grid[2][1]==grid[3][0] and grid[0][3]>0: return True
	return False

def winner(grid):
	for i in range(4):
		if rr(grid, i):
			return grid[i][0]
		if cc(grid, i):
			return grid[0][i]
	if diag1(grid):
		return grid[0][0]
	if diag2(grid):
		return grid[0][3]
	return -1

def Decide(grid, done):
	xx = winner(grid)
	if xx==-1:
		if done:
			g.write("Draw\n")
		else:
			g.write("Game has not completed\n")
	else:
		if xx==1:
			g.write("X won\n")
		else:
			g.write("O won\n")



T = int(f.readline())

for mm in range(T):
	g.write("Case #{}: ".format(mm+1))
	grid = []
	for j in range(4):
		grid.append(map(ff, list(f.readline())))
	f.readline()
	
	done = True
	Tpres = False
	for i in range(4):
		for j in range(4):
			if grid[i][j]==3:
				x,y = i,j
				Tpres = True
			if grid[i][j]==0:
				done = False
	if not Tpres:
		Decide(grid, done)
	else:
		grid[x][y] = 1
		zz = winner(grid)
		if zz==1:
			g.write("X won\n")
		elif zz==2:
			g.write("O won\n")
		else:
			grid[x][y] = 2
			Decide(grid, done)
		
f.close()
g.close()
