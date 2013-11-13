#!/usr/bin/env python
import sys

def line_winner(l, p):
  if l.count(p) == 4 or (l.count(p) == 3 and l.count('T') == 1):
    return True
  else:
    return False

def line_check(l):
  if line_winner(l, 'X'):
    return 'X'
  elif line_winner(l, 'O'):
    return 'O'
  else:
    return False

def main(argv=None):
	if argv is None:
		argv = sys.argv
	
	T = int(sys.stdin.readline())
	for t in xrange(T):
		G = []
		status = False
		empties = False
		for i in xrange(4):
		  l = sys.stdin.readline().rstrip()
		  if not status:
		    status = line_check(l)
		  if not empties and l.count('.'):
		    empties = True
		  G.append(l)
		sys.stdin.readline() # ignore the blank line.
		
		# Check the columns
		if not status:
		  for c in xrange(4):
		    l = ""
		    for r in xrange(4):
		      l += G[r][c]
		    status = line_check(l)
		    if status:
		      break
		  
	  # Diagonals
		if not status:
		  l = ""
		  for r in xrange(4):
		    l += G[r][r]
		  status = line_check(l)
		if not status:
		  l = ""
		  for r in xrange(4):
		    l += G[r][3 - r]
		  status = line_check(l)
		
		m = "Draw"
		if status == 'X':
		  m = 'X won'
		elif status == 'O':
		  m = 'O won'
		elif empties:
		  m = "Game has not completed"
		  
		print "Case #%d: %s" % (t + 1, m)

if __name__ == "__main__":
	sys.exit(main())

