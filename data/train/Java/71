import java.io.File;
import java.io.PrintStream;
import java.util.Scanner;

public class A {
	static final Boolean SAMPLE = false;
	static final String PROBLEM = "A";
	static final String INPUT = "large";
	static final String ID = "0";
	static final String PATH = "C:\\software installation\\codejam-commandline-1.2-beta1\\source\\";

	static final int SIZE = 4;
	static char board[][];

	public static void main(String args[]) throws Throwable {
		Scanner in = SAMPLE ? new Scanner(System.in) : new Scanner(new File(
				PATH + PROBLEM + "-" + INPUT + "-" + ID + ".in"));
		PrintStream out = SAMPLE ? System.out : new PrintStream(PATH + PROBLEM
				+ "-" + INPUT + "-" + ID + ".out");

		int test = in.nextInt();
		for (int t = 1; t <= test; t++) {
			out.print("Case #" + t + ": ");

			board = new char[SIZE][SIZE];
			for (int i = 0; i < SIZE; i++) {
				String line = in.next();
				for (int j = 0; j < SIZE; j++) {
					board[i][j] = line.charAt(j);
				}
			}

			String result;
			if (isWin('X')) {
				result = "X won";
			} else if (isWin('O')) {
				result = "O won";
			} else if (!containsEmpty()) {
				result = "Draw";
			} else {
				result = "Game has not completed";
			}
			out.println(result);
		}

		out.close();
		in.close();

		System.out.println("finish!");
	}

	static boolean isWin(char symbol) {
		for (int i = 0; i < SIZE; i++) {
			if (matchLine(i, 0, 0, 1, symbol)) {
				return true;
			}
		}
		for (int j = 0; j < SIZE; j++) {
			if (matchLine(0, j, 1, 0, symbol)) {
				return true;
			}
		}
		return matchLine(0, 0, 1, 1, symbol)
				|| matchLine(0, SIZE - 1, 1, -1, symbol);
	}

	static boolean matchLine(int x0, int y0, int offsetX, int offsetY,
			char symbol) {
		for (int i = 0; i < SIZE; i++) {
			char cell = board[x0 + i * offsetX][y0 + i * offsetY];
			if (cell != symbol && cell != 'T') {
				return false;
			}
		}
		return true;
	}

	static boolean containsEmpty() {
		for (int i = 0; i < SIZE; i++) {
			for (int j = 0; j < SIZE; j++) {
				if (board[i][j] == '.') {
					return true;
				}
			}
		}
		return false;
	}
}
