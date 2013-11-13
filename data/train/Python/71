def all_same(arr):
  for i in range(4):
    if arr[i] == '.':
      return None

  c = arr[0]
  if c == 'T':
    c = arr[1]

  for i in range(4):
    if arr[i] != 'T' and arr[i] != c:
      return None

  return c

with open("input", "rb") as file:
  tn = int(file.readline())
  for test in range(tn):
    s = []
    for i in range(4):
      line = file.readline()
      s.append(line)

    # read empty line
    line = file.readline()
    result = None

    # check horizontal
    for i in range(4):
      arr = [s[i][0], s[i][1], s[i][2], s[i][3]]
      c = all_same(arr)
      if c:
        result = c
        break

    # check vertical
    for i in range(4):
      arr = [s[0][i], s[1][i], s[2][i], s[3][i]]
      c = all_same(arr)
      if c:
        result = c
        break

    # check diagonal 1
    arr = [s[0][0], s[1][1], s[2][2], s[3][3]]
    c = all_same(arr)
    if c:
      result = c

    # check diagonal 2
    arr = [s[0][3], s[1][2], s[2][1], s[3][0]]
    c = all_same(arr)
    if c:
      result = c

    if result:
      result = result + " won"
    else:
      completed = True
      for i in range(4):
        for j in range(4):
          if s[i][j] == '.':
            completed = False
      if completed:
        result = "Draw"
      else:
        result = "Game has not completed"

    print "Case #{test}: {result}".format(test = test + 1, result = result)
