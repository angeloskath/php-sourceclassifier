package com.artyom.contest.codejam.y2013.qualification;

import java.io.BufferedWriter;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.PrintWriter;
import java.util.Scanner;

public class ATickTackToe {
	
	public String getState(char[][] board) {
		boolean end = true;
		StringBuilder combo;
		for (int r = 0; r < 4; r++) {
			combo = new StringBuilder();
			for (int c = 0; c < 4; c++) {
				if (board[r][c] == '.') end = false;
				combo.append(board[r][c]);
			}
			if (this.doesWin(combo.toString())) {
				return String.format("%s won", board[r][0] != 'T' ? board[r][0] : board[r][1]);
			}
		}
		for (int c = 0; c < 4; c++) {
			combo = new StringBuilder();
			for (int r = 0; r < 4; r++) {
				combo.append(board[r][c]);
			}
			if (this.doesWin(combo.toString())) {
				return String.format("%s won", board[0][c] != 'T' ? board[0][c] : board[1][c]);
			}
		}
		combo = new StringBuilder();
		for (int d = 0; d < 4; d++) {
			combo.append(board[d][d]);
		}
		if (this.doesWin(combo.toString())) {
			return String.format("%s won", board[0][0] != 'T' ? board[0][0] : board[1][1]);
		}
		combo = new StringBuilder();
		for (int d = 0; d < 4; d++) {
			combo.append(board[3 - d][d]);
		}
		if (this.doesWin(combo.toString())) {
			return String.format("%s won", board[3][0] != 'T' ? board[3][0] : board[2][1]);
		}
		return end ? "Draw" : "Game has not completed";
	}
	
	private boolean doesWin(String combo) {
		char winner = '*';
		for (char c : combo.toCharArray()) {
			if (c == '.') return false;
			if (c == 'T') continue;
			if (winner == '*') winner = c;
			if (c != winner) return false;
		}
		return true;
	}
	
	public static void main(String[] args) {
		if (args.length != 2) {
			System.err.println("Arguments: input_file output_file");
			System.exit(1);
		}
		
		Scanner input = null;
		PrintWriter output = null;
		try {
			input = new Scanner(new FileReader(args[0]));
			output = new PrintWriter(new BufferedWriter(new FileWriter(args[1])));
			int t = Integer.parseInt(input.nextLine());
			for (int i = 1; i <= t; i++) {
				char[][] board = new char[4][];
				for (int j = 0; j < 4; j++) {
					board[j] = input.nextLine().toCharArray();
				}
				String out = String.format("Case #%s: %s", i, new ATickTackToe().getState(board));
				System.out.println(out);
				output.println(out);
				if (input.hasNext()) input.nextLine();
			}
		} catch (Exception e) {
			e.printStackTrace();
		} finally {
			input.close();
			output.close();
		}
	}
}
