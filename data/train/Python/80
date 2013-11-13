#!/usr/bin/python

def win(player, line):
	assert len(line) == 4
	for c in line:
		if c != player and c != 'T':
			return False
	return True

def solve():
	a = []
	while len(a) < 4:
		s = raw_input()
		if len(s):
			a.append(s)
	for player in ['X', 'O']:
		for line in a:
			if win(player, line):
				return player + " won"
		for i in xrange(4):
			if win(player, a[0][i] + a[1][i] + a[2][i] + a[3][i]):
				return player + " won"
		if win(player, a[0][0] + a[1][1] + a[2][2] + a[3][3]):
			return player + " won"
		if win(player, a[0][3] + a[1][2] + a[2][1] + a[3][0]):
			return player + " won"
	if "".join(a).find(".") != -1:
		return "Game has not completed"
	return "Draw"

numTests = int(raw_input())
for tc in xrange(1, numTests + 1):
	print "Case #%d:" % tc, solve()
