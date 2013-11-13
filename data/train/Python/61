
winningCombinations = (
    (0, 1, 2, 3),
    (4, 5, 6 ,7),
    (8, 9, 10, 11),
    (12, 13, 14, 15),
    (0, 5, 10, 15),
    (3, 6, 9, 12),
    (0, 4, 8, 12),
    (1, 5, 9, 13),
    (2, 6, 10, 14),
    (3, 7, 11, 15))

def solve(f):
    line1 = next(f).rstrip('\n')
    line2 = next(f).rstrip('\n')
    line3 = next(f).rstrip('\n')
    line4 = next(f).rstrip('\n')
    _ = next(f)
    board = ''.join([line1, line2, line3, line4])
    for combination in winningCombinations:
        values = [board[i] for i in combination]
        if sum(1 for v in values if v in ('X', 'T')) == 4:
            return 'X won'
        elif sum(1 for v in values if v in ('O', 'T')) == 4:
            return 'O won'
    if '.' in board:
        return 'Game has not completed'
    else:
        return 'Draw'

def main(infile, outfile):
    with open(infile, 'r') as f:
        with open(outfile, 'w') as f2:
            cases = int(next(f))
            for i in range(cases):
                solution = solve(f)
                f2.write("Case #{}: {}\n".format(i+1, solution))

import sys
main(*sys.argv[1:3])

