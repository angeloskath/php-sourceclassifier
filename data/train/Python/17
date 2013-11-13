from __future__ import division
import sys
#import psyco
#psyco.full()

def main():
  global infile
  global out_file
  debug = False
  in_filename = sys.argv[1]
  out_filename = sys.argv[2]
  if len(sys.argv)>=4:
    debug = True
  in_file = open(in_filename, 'r')
  out_file = open(out_filename, 'w')

  t = get_next_int(in_file)

  results = []
  for step in range(int(t)):
    board = [get_next(in_file) for i in range(4)]
    answer = solve(board)
    results.append(answer)
    empty_line = get_next(in_file)
  print_out(results, out_file,debug)
def solve(board):
    x_won = False
    o_won = False
    match_continue = False
    import re
    x_check = re.compile('^[XT]+$')
    o_check = re.compile('^[OT]+$')
    continue_check = re.compile(r'\.')
    for r in range(4):
      if x_check.match(board[r]):
        x_won = True
      if o_check.match(board[r]):
        o_won = True
      if continue_check.search(board[r]):
        match_continue = True
    other_board = turn(board) + cross(board)
    for r in range(6):
      if x_check.match(other_board[r]):
        x_won = True
      if o_check.match(other_board[r]):
        o_won = True
    
    if x_won and not o_won:
      return "X won"
    if not x_won and o_won:
      return "O won"
    if match_continue:
      return "Game has not completed"
    return "Draw"
 
def cross(board):
  right_down = "".join([board[r][r] for r in range(4)])
  right_up = "".join([board[3-r][r] for r in range(4)])
  return [right_up,right_down]
def turn(board):
  return ["".join([board[r][c] for r in range(4)]) for c in range(4)]
  

def get_next(f):
  line = f.readline()
  return line.rstrip('\n')
def get_nexts(f):
  line = f.readline()
  return line.rstrip('\n').split(" ")

def get_next_int(f):
    return int(get_next(f))

def get_nexts_int(f):
    return map(int, get_nexts(f))
def get_nexts_float(f):
    return map(float, get_nexts(f))
    
def get_nexts_digit(f):
    return map(int, list(get_next(f)))

def print_out(results, out_file, debug=False):
  for i, result in enumerate(results):
    num = i + 1
    out_file.write("Case #%d: %s\n" % (num, result ))


if __name__ == '__main__':
  main()
