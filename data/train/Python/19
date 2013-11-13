f_in = open('A-large.in', 'r')
f_out = open('A-large.out', 'w')

def check_winner(char_list):
    if char_list.count('X') == 4:
        return 'X'
    if char_list.count('X') == 3 and char_list.count('T') == 1:
        return 'X'
    if char_list.count('O') == 4:
        return 'O'
    if char_list.count('O') == 3 and char_list.count('T') == 1:
        return 'O'
    return '.'

num_cases = int(f_in.readline().strip())

for idx_case in range(num_cases):
    rows = []
    board_filled = True
    for i in range(4):
        row_raw = f_in.readline().strip()
        row = []
        for char in row_raw:
            if char == '.':
                board_filled = False
            row.append(char)
        rows.append(row)
    f_in.readline()
    
    winner_list = []
    
    for i in range(4):
        winner_list.append(check_winner(rows[i]))
        winner_list.append(check_winner([rows[0][i], rows[1][i], rows[2][i], rows[3][i]]))
    winner_list.append(check_winner([rows[0][0], rows[1][1], rows[2][2], rows[3][3]]))
    winner_list.append(check_winner([rows[0][3], rows[1][2], rows[2][1], rows[3][0]]))
    
    
    if winner_list.count('X'):
        if winner_list.count('O'):
            raise Exception, "This shouldn't happen!"
        else:
            result = "X won"
    elif winner_list.count('O'):
        result = "O won"
    elif board_filled:
        result = "Draw"
    else:
        result = "Game has not completed"
    
    f_out.write('Case #{}: {}\n'.format(idx_case+1, result))

f_in.close()
f_out.close()