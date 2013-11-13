# tic tac toe

test = int(raw_input())

n = 0

while n<test :
   #print "n=",n
   if n!=0:
      m=raw_input()
   p = []
   n+=1
   done=0
   dots=0
   for x in range(0,4):
      p.append(raw_input())
   #print p
   #Checking horizontally
   #print "checking horizontally"
   for x in range(0,4):
      #print p[x]
      if ('.' not in p[x]) and ('O' not in p[x]) :
          print "Case #%d: X won"%(n)
          done = 1
          break
      elif ('.' not in p[x]) and  ('X' not in p[x]) :
          print "Case #%d: O won"%(n)
          done = 1
          break
   if done==1 :
      continue
   #Finished horizonatal check if not done yet the
   #Check for vertical
   #print "check ing vertically"
   for x in range(0,4):
      xwon=1
      owon=1
      for y in range(0,4):
         d=p[y][x]
         if d== '.': dots=1
         if d=='.' or d=='O' : xwon=0
         if d=='.' or d=='X' : owon=0
      if xwon==1: 
          print "Case #%d: X won"%(n)
          done = 1
          break
      elif owon==1:
          print "Case #%d: O won"%(n)
          done = 1
          break
   if done==1 :
      continue
   #finished vertical check if not done yet then
   # check first diagonal
   #print " diag 1"
   xwon=1
   owon=1
   for x in range(0,4):
      a = p[x][x]
      d = a
      #print "d=",d
      if d=='.' or d=='O' : xwon=0
      if d=='.' or d=='X' : owon=0
   if xwon==1: 
       print "Case #%d: X won"%(n)
       done = 1
   elif owon==1:
       print "Case #%d: O won"%(n)
       done = 1
   if done==1 :
      continue

   # check second diagonal
   #print " diag 2"
   xwon=1
   owon=1
   for x in range(0,4):
      a = p[3-x][x]
      d = a
      if d=='.' or d=='O' : xwon=0
      if d=='.' or d=='X' : owon=0
   if xwon==1:
       print "Case #%d: X won"%(n)
       done = 1
   elif owon==1:
       print "Case #%d: O won"%(n)
       done = 1
   if done==1 :
       continue
   if dots==1 : print "Case #%d: Game has not completed"%(n)
   else : print "Case #%d: Draw"%(n)


