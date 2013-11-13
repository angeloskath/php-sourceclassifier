#!/usr/bin/python
for t in xrange(1,1+int(raw_input())):
	a=[raw_input()for _ in xrange(4)]
	lines=a+zip(*a)+zip(*[[a[i][i],a[i][3-i]]for i in 0,1,2,3])
	if any(line.count('X')+line.count('T')==4 for line in lines):
		ans="X won"
	elif any(line.count('O')+line.count('T')==4 for line in lines):
		ans="O won"
	elif all(line.count('.')==0 for line in lines):
		ans="Draw"
	else:
		ans="Game has not completed"
	raw_input()
	print"Case #%d:"%t,ans
