package org.ivansopin.jam;

import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.File;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;

public class TicTacToeTomek {
	final static String fileName = "A";

	final static String inExtension = ".in";
	final static String outExtension = ".out";
	final static String source = "e:/temp/jam/" + fileName + inExtension;
	final static String destination = "e:/temp/jam/" + fileName + outExtension;

	static BufferedReader bufferedReader;
	static BufferedWriter bufferedWriter;
	static int counter;

	/* this is problem-specific */
	static int numOfCases;
	static char field[][], field2[][], tmpField[][], tmpField2[][];
	static boolean emptyCells, tmpEmptyCells;

	public static void main(String[] args) throws NumberFormatException, IOException, InterruptedException {
		bufferedReader = new BufferedReader(new FileReader(new File(source)));
		bufferedWriter = new BufferedWriter(new FileWriter(new File(destination)));

		numOfCases = Integer.parseInt(bufferedReader.readLine());

		Reader reader = new Reader();
		reader.start();
		reader.join();

		for (int i = 0; i < numOfCases; i++) {
			copyData();

			reader = new Reader();
			reader.start();

			/********* this is where the real logic starts **********/
			boolean haveWinner = false;
			char winner = 0;
			
			for (int j = 0; j < 4; j++) {
				if (field[j][0] != '.' && field[j][0] == field[j][1] && field[j][0] == field[j][2] && field[j][0] == field[j][3]) {
					haveWinner = true;
					winner = field[j][0];
					break;
				}
			}
			
			if (!haveWinner) {
				for (int j = 0; j < 4; j++) {
					if (field[0][j] != '.' && field[0][j] == field[1][j] && field[0][j] == field[2][j] && field[0][j] == field[3][j]) {
						haveWinner = true;
						winner = field[j][0];
						break;
					}
				}
			}
			
			if (!haveWinner) {
				if (field[0][0] != '.' && field[0][0] == field[1][1] && field[0][0] == field[2][2] && field[0][0] == field[3][3]) {
					haveWinner = true;
					winner = field[0][0];
				}
			}
			
			if (!haveWinner) {
				if (field[0][3] != '.' && field[0][3] == field[1][2] && field[0][3] == field[2][1] && field[0][3] == field[3][0]) {
					haveWinner = true;
					winner = field[0][3];
				}
			}
			
			if (!haveWinner) {
				for (int j = 0; j < 4; j++) {
					if (field2[j][0] != '.' && field2[j][0] == field2[j][1] && field2[j][0] == field2[j][2] && field2[j][0] == field2[j][3]) {
						haveWinner = true;
						winner = field2[j][0];
						break;
					}
				}
			}
			
			if (!haveWinner) {
				for (int j = 0; j < 4; j++) {
					if (field2[0][j] != '.' && field2[0][j] == field2[1][j] && field2[0][j] == field2[2][j] && field2[0][j] == field2[3][j]) {
						haveWinner = true;
						winner = field2[j][0];
						break;
					}
				}
			}
			
			if (!haveWinner) {
				if (field2[0][0] != '.' && field2[0][0] == field2[1][1] && field2[0][0] == field2[2][2] && field2[0][0] == field2[3][3]) {
					haveWinner = true;
					winner = field2[0][0];
				}
			}
			
			if (!haveWinner) {
				if (field2[0][3] != '.' && field2[0][3] == field2[1][2] && field2[0][3] == field2[2][1] && field2[0][3] == field2[3][0]) {
					haveWinner = true;
					winner = field2[0][3];
				}
			}
			
			if (haveWinner)
				bufferedWriter.write("Case #" + (i + 1) + ": " + winner + " won\n");
			else if (emptyCells)
				bufferedWriter.write("Case #" + (i + 1) + ": Game has not completed\n");
			else
				bufferedWriter.write("Case #" + (i + 1) + ": Draw\n");

			/********** this is where the real logic ends ***********/

			if (reader.isAlive()) {
				reader.join();
			}
		}

		bufferedWriter.close();
		bufferedReader.close();
	}

	static void copyData() {
		/* this is problem-specific */
		field = tmpField;
		field2 = tmpField2;
		emptyCells = tmpEmptyCells;
	}

	static class Reader extends Thread {
		public Reader() {
		}

		@Override
		public void run() {
			String line;

			try {
				if (counter < numOfCases) {
					/* this is problem-specific */
					if (counter != 0)
						line = bufferedReader.readLine();
					
					tmpEmptyCells = false;
					tmpField = new char[4][4];
					tmpField2 = new char[4][4];
					
					for (int i = 0; i < 4; i++) {
						line = bufferedReader.readLine();
						tmpField[i] = new char[4];
						tmpField2[i] = new char[4];
						for (int j = 0; j < 4; j++) {
							if (line.charAt(j) == 'T') {
								tmpField[i][j] = 'X';
								tmpField2[i][j] = 'O';
							} else if (line.charAt(j) == '.') {
								tmpField[i][j] = '.';
								tmpField2[i][j] = '.';
								tmpEmptyCells = true;
							} else {
								tmpField[i][j] = line.charAt(j);
								tmpField2[i][j] = line.charAt(j);
							}
						}
					}
					
					counter++;
				}
			} catch (IOException e) {
				e.printStackTrace();
			}
		}
	}
}
