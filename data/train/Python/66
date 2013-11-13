#!/usr/bin/python

# A. Tic-Tac-Toe-Tomek

import sys

def isWon(board, player):
	for s in board:
		count = 0
		for c in s:
			if c in player:
				count += 1
		if count == 4:
			return True

	for j in range(len(board)):
		count = 0
		for i in range(len(board)):
			if board[i][j] in player:
				count += 1
		if count == 4:
			return True

	count = 0
	for i in range(len(board)):
		if board[i][i] in player:
			count += 1
	if count == 4:
		return True

	count = 0
	for i in range(len(board)):
		if board[i][len(board)-i-1] in player:
			count += 1
	if count == 4:
		return True

	return False


def dotCount(board):
	count = 0
	for s in board:
		count += s.count('.')
	return count


f = sys.stdin
T = int(f.readline())

for t in range(1, T+1):
	print "Case #%d:" % t,

	board = []
	for i in range(4):
		board.append(f.readline().strip())
	f.readline()

	if isWon(board, 'XT'):
		print "X won"
		continue

	if isWon(board, 'OT'):
		print "O won"
		continue

	if dotCount(board) == 0:
		print "Draw"
	else:
		print "Game has not completed"
