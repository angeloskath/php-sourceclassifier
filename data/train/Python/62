def result(board):
	rows = board
	cols = [''.join(board[i][j]for i in xrange(4))for j in xrange(4)]
	diags = [''.join(board[i][i]for i in xrange(4)),''.join(board[i][3-i]for i in xrange(4))]
	for line in rows+cols+diags:
		if line.count('O')+line.count('T') == 4:
			return 'O won'
		elif line.count('X')+line.count('T') == 4:
			return 'X won'
	if '.' in ''.join(rows): return 'Game has not completed'
	return 'Draw'

boards = ''.join(list(open('A-large.in'))[1:]).strip().split('\n\n')

f = open('q1out.txt','w')

for i,b in enumerate(boards):
    print 'Case #%d:'%(i+1), result(b.split('\n'))
    f.write('Case #%d: %s\n'%(i+1,result(b.split('\n'))))

f.close()
