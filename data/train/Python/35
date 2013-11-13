import sys

def iswin(mat, y, x, dy, dx, who):
    for _ in range(4):
        if y < 0 or y >= 4 or x < 0 or x >= 4:
            return False
        if mat[y][x] != 'T' and mat[y][x] != who:
            return False
        y += dy
        x += dx
    return True

def solve(mat):
    for y in range(4):
        for x in range(4):
            for dy, dx in [(1, 0), (0, 1), (1, 1), (1, -1)]:
                for who in ['X', 'O']:
                    if iswin(mat, y, x, dy, dx, who):
                        return who + ' won'

    if ''.join(mat).count('.'):
        return 'Game has not completed'
    else:
        return 'Draw'

ncases = int(input())
for i in range(1, ncases+1):
    mat = []
    for _ in range(4):
        mat.append(input())
    input()
    print('Case #{}: {}'.format(i, solve(mat)))
