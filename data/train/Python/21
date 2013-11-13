T=int(raw_input())
for case in xrange(T):
	if case!=0:
		raw_input()
	lines=[raw_input() for i in xrange(4)]
	tlines=[''.join(lines[i][j] for i in xrange(4)) for j in xrange(4)]
	if 'XXXX' in [i.replace('T','X') for i in lines]:
		ret='X won'
	elif 'XXXX' in [i.replace('T','X') for i in tlines]:
		ret='X won'
	elif all([lines[i][i] in 'XT' for i in xrange(4)]):
		ret='X won'
	elif all([lines[i][3-i] in 'XT' for i in xrange(4)]):
		ret='X won'
	elif 'OOOO' in [i.replace('T','O') for i in lines]:
		ret='O won'
	elif 'OOOO' in [i.replace('T','O') for i in tlines]:
		ret='O won'
	elif all([lines[i][i] in 'TO' for i in xrange(4)]):
		ret='O won'
	elif all([lines[i][3-i] in 'TO' for i in xrange(4)]):
		ret='O won'
	elif '.' in ''.join(lines):
		ret='Game has not completed'
	else:
		ret='Draw'
	print 'Case #%d:'%(case+1),ret
