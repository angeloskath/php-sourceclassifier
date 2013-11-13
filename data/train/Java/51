package com.google.codejam;

import hu.mapro.jam.commons.Problem;

import java.util.List;
import java.util.Scanner;

import com.google.common.collect.Lists;

/**
 *  Using <a href="http://code.google.com/p/maprohu-codejam-lib/">Google Code Jam library</a>. 
 */
public class TicTacToeTomek extends Problem {

	private boolean hasEmpty;

	public TicTacToeTomek() {
		super("A", false);
		init();
	}

	enum Winner {
		BOTH,
		X,
		O,
		NONE
	}
	
	private final Winner next(Winner current, char mark) {
		if (current==Winner.NONE) return current;
		
		switch (mark) {
		case '.':
			hasEmpty = true;
			return Winner.NONE;
		case 'T':
			return current;
		case 'X':
		case 'O':
			if (current.toString().equals(""+mark)) return current;
			else if (current==Winner.BOTH) return Winner.valueOf(""+mark);
			else return Winner.NONE;
		default:
			throw new RuntimeException();
		}
	}
	
	interface Row {
		char at(int pos);
	}
	
	private final Winner check(Row row) {
		Winner w = Winner.BOTH;
		
		for (int i=0;i<4;i++) {
			char mark = row.at(i);

			w = next(w, mark);
			
			if (w==Winner.NONE) return w;
		}
		
		return w;
	}
	
	final List<Row> rows = Lists.newArrayList();
	private String[] board;

	void init() {
		for (int i=0;i<4;i++) {
			final int c = i;
			rows.add(new Row() {
				@Override
				public char at(int pos) {
					return board[c].charAt(pos);
				}
			});
			rows.add(new Row() {
				@Override
				public char at(int pos) {
					return board[pos].charAt(c);
				}
			});
		}
		rows.add(new Row() {
			@Override
			public char at(int pos) {
				return board[pos].charAt(pos);
			}
		});
		rows.add(new Row() {
			@Override
			public char at(int pos) {
				return board[3-pos].charAt(pos);
			}
		});
	}
	
	
	@Override
	protected String solve(Scanner in) {
		board = new String[4];
		hasEmpty = false;
		
		for (int i=0;i<4;i++) {
			board[i] = in.next();
			System.out.println(board[i]);
		}
		in.nextLine();
	
		for (Row row : rows) {
			Winner w = check(row);
			if (w==Winner.X) return "X won";
			if (w==Winner.O) return "O won";
		}

		if (hasEmpty) return "Game has not completed";
		else return "Draw";
	}


}
