

convert = {	"X":1,
			"O":10,
			"T":20,
			".":-1000 }

def check(s):
	if s in (4,23):
		return "X won"
	elif s in (40,50):
		return "O won"
	return None
	
def case(t):
	board = [ [ convert[c] for c in input() ] for i in range(4) ]
	
	for row in board:
		s = sum(row)
		result = check(s)
		if result:
			return result
	
	for i in range(4):
		column = [ board[j][i] for j in range(4) ]
		s = sum(column)
		result = check(s)
		if result:
			return result
			
	s = sum( [ board[i][i] for i in range(4) ] )
	result = check(s)
	if result:
		return result
	
	s = sum( [ board[i][i] for i in range(4) ] )
	result = check(s)
	if result:
		return result
		
	s = sum( [ board[i][3-i] for i in range(4) ] )
	result = check(s)
	if result:
		return result
	
	if sum(sum(row) for row in board) < 0:
		return "Game has not completed"
	
	return "Draw"

	
for t in range(1,int(input())+1):
	print ( "Case #%d: %s" % (t,case(t)) )
	input()
