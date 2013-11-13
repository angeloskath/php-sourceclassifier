import pdb
import sys
import re
import time
from collections import namedtuple
from itertools import *
from copy import copy, deepcopy
from pprint import pprint

taskname = 'A'
input = None

def readstr():
    return next(input).strip()

def readintlist():
    lst = map(int, readstr().split())
    return lst

def readint():
    lst = readintlist()
    assert len(lst) == 1
    return lst[0]

def iterlines(map):
    for s in map:
        yield s
    for i in xrange(4):
        yield ''.join(s[i] for s in map)
    yield ''.join(s[i] for i, s in enumerate(map))
    yield ''.join(s[3 - i] for i, s in enumerate(map))
    
def solvecase():
    map = [readstr() for _ in xrange(4)]
    assert all(len(s) == 4 for s in map)
    try:
        assert readstr() == ''
    except StopIteration:
        pass
    lines = list(iterlines(map))
    if any(all(c in 'XT' for c in line) for line in lines):
        return 'X won'
    if any(all(c in 'OT' for c in line) for line in lines):
        return 'O won'
    if all(c != '.' for s in map for c in s):
        return 'Draw'
    return 'Game has not completed'

def solve(suffix):
    global input
    tstart = time.clock()
    input = open(taskname + '-' + suffix + '.in', 'r')
    output = open(taskname + '-' + suffix + '.out', 'w')
    casecount = readint()
    
    for case in range(1, casecount + 1):
        s = solvecase()
        s = "Case #%d: %s" % (case, str(s)) 
        print >>output, s
        print s 
        
    input.close()
    output.close()
    print '%s solved in %.3f' % (suffix, time.clock() - tstart)
            
if __name__ == '__main__':
    solve('small')
    solve('large')
