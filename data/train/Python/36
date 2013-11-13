m=res=dot=None

def check(x0, y0, dx, dy):
	global m, res, dot
	x=o=t=0
	for i in range(4):
		c = m[x0 + i * dx][y0 + i * dy]
		if c=='X': x+=1
		elif c=='O': o+=1
		elif c=='T': t+=1
		elif c=='.': dot=1
	if x + t == 4: res = 'X'
	if o + t == 4: res = 'O'

for i in range(input()):
	m = [raw_input() for j in range(4)]
	raw_input()
	res=dot=None
	for j in range(4):
		check(j, 0, 0, 1)
		check(0, j, 1, 0)
	check(0, 0, 1, 1)
	check(3, 0, -1, 1)
	res = res + ' won' if res else 'Game has not completed' if dot else 'Draw'
	print 'Case #' + str(i + 1) + ': ' + res
