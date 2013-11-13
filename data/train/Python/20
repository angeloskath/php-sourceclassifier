import sys

def wins(config, c):
  is_ok = lambda x: x == 'T' or x == c
  to_scan = [[(i, i) for i in range(4)]] # Diag 1
  to_scan.append([(i, 3-i) for i in range(4)]) # Diag 2
  for i in range(4): to_scan.append([(i, j) for j in range(4)]) # Horizontal
  for i in range(4): to_scan.append([(j, i) for j in range(4)]) # Vertical
  for v in to_scan:
    ok = True
    for i, j in v:
      if not is_ok(config[i][j]): 
        ok = False
        break
    if ok: return True
  return False

def f(str_):
  config = [[' '] * 4 for _ in range(4)]
  for i, c in enumerate(str_):
    config[i/4][i%4] = c
  o_wins = wins(config, 'O')
  x_wins = wins(config, 'X')
  res = "Game has not completed"
  if x_wins and o_wins: res = "Draw"
  elif x_wins: res = "X won"
  elif o_wins: res = "O won"
  else:
    is_draw = True
    for x in str_:
      if x == '.': is_draw = False
    if is_draw: res = "Draw"
  return res

samples = int(sys.stdin.readline().rstrip())
for i in range(samples):
  if i != 0: empty = sys.stdin.readline()
  line1 = sys.stdin.readline().rstrip()
  line2 = sys.stdin.readline().rstrip()
  line3 = sys.stdin.readline().rstrip()
  line4 = sys.stdin.readline().rstrip()
  s = line1 + line2 + line3 + line4
  print "Case #%d: %s" % (i+1, f(s))
