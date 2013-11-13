package com.yapark.codejam2013;

import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;

public class ProblemA {

	private int[][] inBoard = new int[4][4];
	private int tRow;
	private int tCol;
	private boolean isFull;

	public ProblemA() {
		isFull = true;
	}
	
	public void setT(int row, int col) {
		tRow = row;
		tCol = col;
		return;
	}
	
	public void readLine(String input, int lineNum) {
		for(int i=0; i<4; i++) {
			if(input.charAt(i)=='X') {
				inBoard[lineNum][i] = 1;
			}
			else if(input.charAt(i)=='O') {
				inBoard[lineNum][i] = -1;
			}
			else {
				inBoard[lineNum][i] = 0;
				if(input.charAt(i) == 'T') {
					setT(lineNum,i);
				}
				else {
					isFull = false;
				}
			}
		}
	}
	
	public String getResult() {
		for(int i=0; i<4; i++) {
			int rowSum = 0;
			int colSum = 0;
			for(int j=0; j<4; j++) {
				rowSum = rowSum + inBoard[i][j];
				colSum = colSum + inBoard[j][i];
			}
			if(colSum==4 || (colSum==3 && tCol==i) || rowSum==4 || (rowSum==3 && tRow==i)) {
				return "X won";
			}
			if(colSum==-4 || (colSum==-3 && tCol==i) || rowSum==-4 || (rowSum==-3 && tRow==i)) {
				return "O won";
			}
		}
		int diag1 = 0;
		int diag2 = 0;
		for(int i=0; i<4; i++) {
			diag1 = diag1 + inBoard[i][i];
			diag2 = diag2 + inBoard[i][3-i];
		}
		if(diag1==4 || (diag1==3 && tCol==tRow) || diag2==4 || (diag2==3 && tRow==3-tCol)) {
			return "X won";
		}
		if(diag1==-4 || (diag1==-3 && tCol==tRow) || diag2==-4 || (diag2==-3 && tRow==3-tCol)) {
			return "O won";
		}
		if(isFull) {
			return "Draw";
		}
		return "Game has not completed";
	}

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		try {
			BufferedReader br = new BufferedReader(new FileReader("A-small-attempt0.in"));
			FileWriter fw = new FileWriter("outputAsmall.txt");
			BufferedWriter bw = new BufferedWriter(fw);

			String line;
			int numOfGames;
			line = br.readLine();
			numOfGames = Integer.decode(line);
			for(int i = 1; i<=numOfGames; i++) {
				ProblemA prob = new ProblemA();
				for(int j=0; j<4; j++) {
					line = br.readLine();
					prob.readLine(line, j);
				}
				br.readLine();
				bw.write("Case #"+i+": "+prob.getResult()+"\n");
			}
			br.close();
			bw.flush();
			bw.close();
		}
		catch (FileNotFoundException e) {
			System.out.println("ERROR: Cannot find file.");
			return;
		}
		catch (IOException e) {
			
		}
	}

}