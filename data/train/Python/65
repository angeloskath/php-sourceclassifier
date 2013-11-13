#!/usr/bin/env python
import sys

class Status(object):
    X_WON = 1
    O_WON = 2
    DRAW = 3
    INCOMPLETE = 4

status_strings = {
    Status.X_WON: "X won",
    Status.O_WON: "O won",
    Status.DRAW: "Draw",
    Status.INCOMPLETE: "Game has not completed",
}

def grid_status(grid):
    lines = []
    lines.extend(grid)
    lines.extend(zip(*grid))
    lines.append(
        ''.join(grid[i][i] for i in xrange(4))
    )
    lines.append(
        ''.join(grid[i][3-i] for i in xrange(4))
    )
    for line in lines:
        s = set(line)
        if 'X' in s and 'O' in s:
            continue

        if '.' in s:
            continue

        if 'X' in s:
            return Status.X_WON
        else:
            return Status.O_WON

    if all('.' not in line for line in grid):
        return Status.DRAW
    else:
        return Status.INCOMPLETE

def main():
    assert len(sys.argv) == 3, str(sys.argv)
    in_name = sys.argv[1]
    out_name = sys.argv[2]
    with open(in_name) as f, open(out_name, 'w') as g:
        T = int(f.readline().strip()) # number of cases
        for test_num in xrange(T):
            grid = []
            for _row in xrange(4):
                grid.append(f.readline().strip())
            if test_num != T-1:
                assert not f.readline().strip()
            g.write("Case #%s: %s\n" % (
                test_num+1,
                status_strings[grid_status(grid)]))
    return 0

if __name__ == "__main__":
    status = main()
    sys.exit(status)
