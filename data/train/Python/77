import sys

if len(sys.argv) < 3:
	print 'input/output file name must be defined.'
	exit(1)

game_status = ['X won', 'O won', 'Draw', 'Game has not completed']

def check_status(method):
	for a in range(4):
		x_won = True
		o_won = True
		for b in range(4):
			if method == 0:
				c = box[a][b]
			else:
				c = box[b][a]

			if c == 'X':
				o_won = False
			elif c == 'O':
				x_won = False
			elif c == '.':
				x_won = False
				o_won = False
			if not x_won and not o_won:
				break
		if x_won:
			return 0
		elif o_won:
			return 1
	return -1

def check_status_diag(method):
	x_won = True
	o_won = True
	for a in range(4):
		if method == 0:
			c = box[a][a]
		else:
			c = box[a][3 - a]

		if c == 'X':
			o_won = False
		elif c == 'O':
			x_won = False
		elif c == '.':
			x_won = False
			o_won = False
		if not x_won and not o_won:
			break
	if x_won:
		return 0
	elif o_won:
		return 1
	else:
		return -1

def dot_found():
	for row in box:
		if '.' in row:
			return True
	return False

input_file = open(sys.argv[1])
output_file = open(sys.argv[2], 'w')
num = int(input_file.readline())
for i in range(num):
	box = []
	for j in range(4):
		box.append(list(input_file.readline().strip()))
	input_file.readline()

	status = 3
	temp = check_status(0)
	if temp >= 0:
		status = temp
	else:
		temp = check_status(1)
		if temp >= 0:
			status = temp
		else:
			temp = check_status_diag(0)
			if temp >= 0:
				status = temp
			else:
				temp = check_status_diag(1)
				if temp >= 0:
					status = temp

	if status == 3 and not dot_found():
		status = 2
	output_file.write('Case #' + str(i + 1) + ': ' + game_status[status] + '\n')

input_file.close()
output_file.close()
