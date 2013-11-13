import sys
import os, os.path
import functools

def roll_up(a, b):
    if a == "T":
        return b
    if b == "T":
        return a
    if a == "." or b == ".":
        return "."
    if a == b:
        return a
    return "."

def solve(board):
    checks = [[(0,0), (0,1), (0,2), (0,3)], 
              [(1,0), (1,1), (1,2), (1,3)], 
              [(2,0), (2,1), (2,2), (2,3)], 
              [(3,0), (3,1), (3,2), (3,3)], 
              [(0,0), (1,0), (2,0), (3,0)], 
              [(0,1), (1,1), (2,1), (3,1)], 
              [(0,2), (1,2), (2,2), (3,2)], 
              [(0,3), (1,3), (2,3), (3,3)], 
              [(0,0), (1,1), (2,2), (3,3)], 
              [(0,3), (1,2), (2,1), (3,0)]]

    for c in checks:
        res = functools.reduce(roll_up, [board[x][y] for (x, y) in c], "T")
        if res == "X" or res == "O":
            return "{0} won".format(res)

    draw = True
    for i in range(4):
        for j in range(4):
            if board[i][j] == ".":
                draw = False
    if draw:
        return "Draw"
    else:
        return "Game has not completed"

if __name__ == "__main__":
    input_path = sys.argv[1]
    output_path = os.path.splitext(input_path)[0] + ".out"
    output = []
    with open(input_path) as input_file:
        num_cases = int(input_file.readline().strip())

        for i in range(num_cases):
            lines = []
            for j in range(4):
                lines.append(input_file.readline().strip())
            input_file.readline()
            res = solve(lines)
            output.append("Case #{0}: {1}".format(i+1, res))
            print(i, num_cases)

    with open(output_path, "w") as output_file:
        for o in output:
            output_file.write(o + "\n")