package codejam.qual;

import java.io.BufferedReader;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.PrintStream;

public class A {

	private static BufferedReader br;

	public static void main(final String[] args) {
		// setStreams("C:\\Users\\Yariv\\Desktop\\A-large");
		br = new BufferedReader(new InputStreamReader(System.in));
		final int numCases = (int) readNumber();
		handleCases(numCases);
	}

	private static void setStreams(final String baseFileName) {
		try {
			System.setIn(new FileInputStream(baseFileName + ".in"));
			System.setOut(new PrintStream(baseFileName + ".out"));
		} catch (final FileNotFoundException e) {
			e.printStackTrace();
		}
	}

	private static void handleCases(final long numCases) {
		for (int i = 1; i <= numCases; i++) {
			handleCase(i);
			readLine();
		}
	}

	private static void handleCase(final int caseNumber) {
		final char[][] board = new char[4][4];
		for (int i = 0; i < 4; i++) {
			final char[] chars = readCharsLine(4);
			board[i][0] = chars[0];
			board[i][1] = chars[1];
			board[i][2] = chars[2];
			board[i][3] = chars[3];
		}

		calcWinner(board, caseNumber);
		// final int number = (int) readNumber();
		// log("@@@ " + number + " @@@");

		// System.out.println("Case #" + caseNumber + ": " + res);
	}

	private static void calcWinner(final char[][] board, final int caseNumber) {
		boolean won = check('X', board);
		if (won) {
			System.out.println("Case #" + caseNumber + ": X won");
			return;
		}
		won = check('O', board);
		if (won) {
			System.out.println("Case #" + caseNumber + ": O won");
			return;
		}
		if (boardFull(board)) {
			System.out.println("Case #" + caseNumber + ": Draw");
			return;
		}

		System.out.println("Case #" + caseNumber + ": Game has not completed");
	}

	private static boolean boardFull(final char[][] board) {
		for (int i = 0; i < 4; i++) {
			for (int j = 0; j < 4; j++) {
				if (board[i][j] == '.') {
					return false;
				}
			}
		}
		return true;
	}

	private static boolean check(final char player, final char[][] board) {
		for (int i = 0; i < 4; i++) {
			if (placeGood(board, i, 0, player)
					&& placeGood(board, i, 1, player)
					&& placeGood(board, i, 2, player)
					&& placeGood(board, i, 3, player)) {
				return true;
			}

			if (placeGood(board, 0, i, player)
					&& placeGood(board, 1, i, player)
					&& placeGood(board, 2, i, player)
					&& placeGood(board, 3, i, player)) {
				return true;
			}
		}

		if (placeGood(board, 0, 0, player) && placeGood(board, 1, 1, player)
				&& placeGood(board, 2, 2, player)
				&& placeGood(board, 3, 3, player)) {
			return true;
		}

		if (placeGood(board, 0, 3, player) && placeGood(board, 1, 2, player)
				&& placeGood(board, 2, 1, player)
				&& placeGood(board, 3, 0, player)) {
			return true;
		}

		return false;
	}

	private static boolean placeGood(final char[][] board, final int i,
			final int j, final char player) {
		if (board[i][j] == player || board[i][j] == 'T') {
			return true;
		}
		return false;
	}

	private static long readNumber() {
		final String line = readLine();
		final long number = Long.parseLong(line);
		return number;
	}

	private static long[] readNumbers() {
		final String line = readLine();
		final String[] numbersStr = line.split(" ");
		final long[] numbers = new long[numbersStr.length];
		for (int i = 0; i < numbersStr.length; i++) {
			numbers[i] = Long.parseLong(numbersStr[i]);
		}
		return numbers;
	}

	private static String readLine() {
		String line = null;
		try {
			line = br.readLine();
		} catch (final IOException e) {
			e.printStackTrace();
		}
		return line;
	}

	private static char[] readCharsLine(final int numChars) {
		final String line = readLine();
		final char[] chars = new char[4];
		for (int i = 0; i < numChars; i++) {
			chars[i] = line.charAt(i);
		}
		return chars;
	}

	private static void log(final String message) {
		System.out.println(message);
	}
}
