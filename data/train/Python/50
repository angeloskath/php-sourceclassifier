#!/usr/bin/python

import sys

def wins(grid, p):
	possibilities = [
		lambda i: (0, i),
		lambda i: (1, i),
		lambda i: (2, i),
		lambda i: (3, i),
		lambda i: (i, 0),
		lambda i: (i, 1),
		lambda i: (i, 2),
		lambda i: (i, 3),
		lambda i: (i, i),
		lambda i: (3 - i, i)
	]
	return any(
		[all([grid[method(i)[0]][method(i)[1]] in (p, 'T') for i in xrange(4)]) for method in possibilities]
	)

def solve(grid):
	for p in ('O', 'X'):
		if wins(grid, p):
			return '%s won' % p
	if all(['.' not in row for row in grid]):
		return 'Draw'
	return 'Game has not completed'

T = int(raw_input().strip())

for nCase in xrange(1, T+1):
	print 'Case #%d: %s' % (nCase, solve([raw_input().strip() for i in xrange(4)]))
	raw_input()
