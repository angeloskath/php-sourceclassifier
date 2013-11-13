#!/usr/bin/env python3
# -*- coding: utf-8 -*-

def check_line(data, C, r, c, dr, dc):
	for i in range(4):
		if data[r][c] not in C: return False
		r += dr
		c += dc
	return True

def is_winner(data, C):
	for i in range(4):
		if check_line(data, C,  i,  0,  0,  1): return True
	for i in range(4):
		if check_line(data, C,  0,  i,  1,  0): return True
	if check_line(data, C,  0,  0,  1,  1): return True
	if check_line(data, C,  0,  3,  1, -1): return True
	return False

def game_completed(data):
	for i in range(4):
		if data[i].find('.') != -1: return False
	return True

def single_test():
	data = [input() for i in range(4)]
	x_won = is_winner(data, {'X', 'T'})
	o_won = is_winner(data, {'O', 'T'})
	if x_won and o_won: return 'Should not happen'
	elif x_won > o_won: return 'X won'
	elif x_won < o_won: return 'O won'
	else: return 'Draw' if game_completed(data) else 'Game has not completed'
	

def main():
	T = int(input())
	for i in range(T):
		print("Case #%d: %s" % (i + 1, single_test()))
		try: input()
		except: pass

if __name__ == "__main__": main()
