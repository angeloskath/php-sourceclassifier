

base = "A-large"
f = open(base+'.in','r')
fout = open(base+'.out','w')

def check_winner( row ):
	chars = set(row)
	if( "T" in chars ):
		chars.remove("T")
	if( len(chars) == 1):
		winner = chars.pop()
		if( winner != "." ):
			return winner
	return ""

num = int(f.readline())
for case in range(1,num+1):
	board = []
	for r in range(1,5):
		board.append( f.readline()[:4])
	f.readline()
	
	all_chars = set( "".join(board))
	game_done = "." not in all_chars
	print(game_done)

	rows_to_check = []
	for row in range(0,4):
		rows_to_check.append( board[row] )

	for col in range(0,4):
		rows_to_check.append( board[0][col]+board[1][col]+board[2][col]+board[3][col] )

	rows_to_check.append( board[0][0]+board[1][1]+board[2][2]+board[3][3] )
	rows_to_check.append( board[0][3]+board[1][2]+board[2][1]+board[3][0] )

	prefix = "Case #" + str(case) + ": "
	have_winner = False
	for st in rows_to_check:
		winner = check_winner( st )
		if( len( winner ) > 0 ):
			have_winner = True
			fout.write( prefix + winner + " won\n" )
			break
	if( not have_winner ):
		if( game_done ):
			fout.write( prefix + "Draw\n" )
		else:
			fout.write( prefix + "Game has not completed\n" )
f.close
fout.close






