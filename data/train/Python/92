# -*- coding: utf-8 -*-
import sys

N = 4

def is_win(board,side):
	#horizontal check
	for j in range(N):
		flag = True
		for i in range(N):
			if board[j][i]!=side and board[j][i]!='T':
				flag = False
		if flag==True:
			return True
	#vertical check
	for i in range(N):
		flag = True
		for j in range(N):
			if board[j][i]!=side and board[j][i]!='T':
				flag = False
		if flag==True:
			return True
	#diagonal check
	flag = True
	for i in range(N):
		if board[i][i]!=side and board[i][i]!='T':
			flag = False
	if flag==True:
		return True
	flag = True
	for i in range(N):
		if board[N-1-i][i]!=side and board[N-1-i][i]!='T':
			flag = False
	if flag==True:
		return True
	return False

def has_empty(board):
	for j in range(N):
		for i in range(N):
			if board[j][i]=='.':
				return True
	return False

if __name__ == '__main__':
	T = int(input())
	for t in range(T):
		board=[]
		for i in range(N):
			board.append(input())
		#print(board,file=sys.stderr)
		
		result = 'Draw'
		if is_win(board,'X'):
			result = 'X won'
		elif is_win(board,'O'):
			result = 'O won'
		elif has_empty(board):
			result = 'Game has not completed'
		print('Case #{}: {}'.format(t+1,result))
		print('Case #{}: {}'.format(t+1,result),file=sys.stderr)
		if t+1<T:
			input()
