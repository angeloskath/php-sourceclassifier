from __future__ import print_function


def winner(s):
    if all(i == 'X' or i == 'T' for i in s):
        return 'X'
    if all(i == 'O' or i == 'T' for i in s):
        return 'O'


def solve(matrix):
    potentials = []
    for i in xrange(0, 4):
        potentials.append([(i, j) for j in xrange(0, 4)])
        potentials.append([(j, i) for j in xrange(0, 4)])
    potentials.append([(i, i) for i in xrange(0, 4)])
    potentials.append([(i, 3 - i) for i in xrange(0, 4)])

    win = None
    for potential in potentials:
        win = winner(''.join(matrix[i][j] for i, j in potential))
        if win:
            break
    if win:
        return win + ' won'
    else:
        if '.' in ''.join(matrix):
            return 'Game has not completed'
        else:
            return 'Draw'


def main():
    with open('a.in', 'r') as f:
        total_tests = int(f.readline().strip())
        for test_case in xrange(1, total_tests + 1):
            matrix = [
                f.readline().strip() for _ in xrange(4)
            ]
            # Always an empty line ...
            f.readline()
            print('Case #%d: ' % (test_case,), end='')
            print(solve(matrix))


if __name__ == '__main__':
    main()
