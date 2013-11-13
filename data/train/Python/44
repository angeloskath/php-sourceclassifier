INPUT_FILE = "A-large.in"
OUTPUT_FILE = "A-large.out"

import math

global result




def IsX(point):
	if point == 'X' or point == 'T':
		return True
	else:
		return False
		
def IsO(point):
	if point == 'O' or point == 'T':
		return True
	else:
		return False


def SolveA(A0, A1, A2, A3, caseNumber):

	global result
	
	
	
	
	#print caseNumber
	#print A0
	#print A1
	#print A2
	#print A3
	
	
	XWon = False
	if IsX(A0[0]) and IsX(A0[1]) and IsX(A0[2]) and IsX(A0[3]):
		XWon = True
	if IsX(A1[0]) and IsX(A1[1]) and IsX(A1[2]) and IsX(A1[3]):
		XWon = True
	if IsX(A2[0]) and IsX(A2[1]) and IsX(A2[2]) and IsX(A2[3]):
		XWon = True
	if IsX(A3[0]) and IsX(A3[1]) and IsX(A3[2]) and IsX(A3[3]):
		XWon = True
		
	if IsX(A0[0]) and IsX(A1[0]) and IsX(A2[0]) and IsX(A3[0]):
		XWon = True
	if IsX(A0[1]) and IsX(A1[1]) and IsX(A2[1]) and IsX(A3[1]):
		XWon = True
	if IsX(A0[2]) and IsX(A1[2]) and IsX(A2[2]) and IsX(A3[2]):
		XWon = True
	if IsX(A0[3]) and IsX(A1[3]) and IsX(A2[3]) and IsX(A3[3]):
		XWon = True
		
	if IsX(A0[0]) and IsX(A1[1]) and IsX(A2[2]) and IsX(A3[3]):
		XWon = True
	if IsX(A0[3]) and IsX(A1[2]) and IsX(A2[1]) and IsX(A3[0]):
		XWon = True
	
	if XWon:
		result += "Case #%d: %s\n" %(caseNumber, 'X won')
		return
		
		
		
		
	
	
	OWon = False
	if IsO(A0[0]) and IsO(A0[1]) and IsO(A0[2]) and IsO(A0[3]):
		OWon = True
	if IsO(A1[0]) and IsO(A1[1]) and IsO(A1[2]) and IsO(A1[3]):
		OWon = True
	if IsO(A2[0]) and IsO(A2[1]) and IsO(A2[2]) and IsO(A2[3]):
		OWon = True
	if IsO(A3[0]) and IsO(A3[1]) and IsO(A3[2]) and IsO(A3[3]):
		OWon = True
		
	if IsO(A0[0]) and IsO(A1[0]) and IsO(A2[0]) and IsO(A3[0]):
		OWon = True
	if IsO(A0[1]) and IsO(A1[1]) and IsO(A2[1]) and IsO(A3[1]):
		OWon = True
	if IsO(A0[2]) and IsO(A1[2]) and IsO(A2[2]) and IsO(A3[2]):
		OWon = True
	if IsO(A0[3]) and IsO(A1[3]) and IsO(A2[3]) and IsO(A3[3]):
		OWon = True
		
	if IsO(A0[0]) and IsO(A1[1]) and IsO(A2[2]) and IsO(A3[3]):
		OWon = True
	if IsO(A0[3]) and IsO(A1[2]) and IsO(A2[1]) and IsO(A3[0]):
		OWon = True
	
	if OWon:
		result += "Case #%d: %s\n" %(caseNumber, 'O won')
		return
		
	
	if (('.' in A0) or ('.' in A1) or ('.' in A2) or ('.' in A3)):
		result += "Case #%d: %s\n" %(caseNumber, 'Game has not completed')
		return
	else:
		result += "Case #%d: %s\n" %(caseNumber, 'Draw')
		return
	
	
	



















file = open(INPUT_FILE, 'rb').read()

fileLines = file.split('\n')

T = int(fileLines[0])
nextLine = 1

result = ""

for i in xrange(T):

	A0 = fileLines[nextLine]
	nextLine += 1
	A1 = fileLines[nextLine]
	nextLine += 1
	A2 = fileLines[nextLine]
	nextLine += 1
	A3 = fileLines[nextLine]
	nextLine += 1
	
	SolveA(A0, A1, A2, A3, i+1)
	nextLine += 1
	
	
open(OUTPUT_FILE, "wb").write(result)

