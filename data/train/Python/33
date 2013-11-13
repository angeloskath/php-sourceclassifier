def won(p):
	bingo = [p] * 4
	if t_present:
		b[ti][tj] = p
	if [b[i][i] for i in range(4)] == bingo:
		return True
	if [b[i][3-i] for i in range(4)] == bingo:
		return True
	for i in range(4):
		if b[i] == bingo:
			return True
		if [b[j][i] for j in range(4)] == bingo:
			return True

T=int(input())
for x in range(1,T+1):
	b = [list(input()) for i in range(4)]
	t_present = False
	dot_present = False
	for i in range(4):
		for j in range(4):
			if b[i][j] == '.':
				dot_present = True
			if b[i][j] == 'T':
				t_present = True
				ti = i
				tj = j
	for p in ('X','O'):
		if won(p):
			print("Case #%d:" % x,p,'won')
			break
	else:
		if dot_present:
			print("Case #%d:" % x,"Game has not completed")
		else:
			print("Case #%d:" % x,"Draw")
	skip = input()
