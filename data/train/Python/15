import sys

def ok(s, c):
    return all(i == c or i == 'T' for i in s)

def solve(arr):
    for ch in "OX":
        for i in xrange(4):
            if ok(arr[i], ch):
                return ch+" won"
            if ok(''.join(arr[j][i] for j in xrange(4)), ch):
                return ch+" won"
        if ok(''.join(arr[i][i] for i in range(4)), ch):
            return ch+" won"
        if ok(''.join(arr[i][3-i] for i in range(4)), ch):
            return ch+" won"
    if any(any(x == '.' for x in s) for s in arr):
        return "Game has not completed"
    return "Draw"

def main():
    T = int(sys.stdin.readline())
    for cn in range(1, T+1):
        arr = [sys.stdin.readline().strip() for x in range(4)]
        sys.stdin.readline()
        print "Case #%d: %s" % (cn, solve(arr))

if __name__ == '__main__':
    main()
        
