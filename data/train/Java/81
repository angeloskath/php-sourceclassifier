import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.PrintWriter;

public class TicTacTomek {

	private static final int[][] diagOrder = new int[][] { { 0, 1, 2, 3 }, { 3, 2, 1, 0 } };

	public static void main(String[] args) throws Exception {
		BufferedReader r = new BufferedReader(new FileReader("tomek.in"));
		PrintWriter w = new PrintWriter(new BufferedWriter(new FileWriter("tomek.out")));
		int n = Integer.parseInt(r.readLine());
		for (int i = 1; i <= n; i++) {
			GameState s = getState(getBoard(r));
			w.print("Case #");
			w.print(i);
			w.print(": ");
			w.println(s.get());
		}
		w.close();
		r.close();
	}

	public static int[][] getBoard(BufferedReader r) throws Exception {
		int[][] ret = new int[4][4];
		for (int i = 0; i < 4; i++) {
			String line = r.readLine();
			for (int j = 0; j < 4; j++) {
				switch (line.charAt(j)) {
				case 'X':
					ret[i][j] = 1;
					break;
				case 'O':
					ret[i][j] = 2;
					break;
				case 'T':
					ret[i][j] = 3;
					break;
				}
			}
		}
		r.readLine();
		return ret;
	}

	public static GameState getState(int[][] board) {
		for (int mask = 1; mask <= 2; mask++) {
			for (int i = 0; i < 4; i++) {
				if (getRowCount(board, i, mask) || getColCount(board, i, mask))
					return GameState.values()[mask - 1];
			}
			for (int i = 0; i < 2; i++) {
				if (getDiagCount(board, diagOrder[i], mask))
					return GameState.values()[mask - 1];
			}
		}
		for (int[] row : board) {
			for (int i : row) {
				if (i == 0)
					return GameState.INC;
			}
		}
		return GameState.DRAW;
	}

	public static boolean getRowCount(int[][] board, int r, int mask) {
		for (int i = 0; i < 4; i++) {
			if ((board[r][i] & mask) == 0)
				return false;
		}
		return true;
	}

	public static boolean getColCount(int[][] board, int c, int mask) {
		for (int i = 0; i < 4; i++) {
			if ((board[i][c] & mask) == 0)
				return false;
		}
		return true;
	}

	public static boolean getDiagCount(int[][] board, int[] order, int mask) {
		for (int i = 0; i < 4; i++) {
			if ((board[i][order[i]] & mask) == 0)
				return false;
		}
		return true;
	}

	static enum GameState {
		X("X won"), O("O won"), DRAW("Draw"), INC("Game has not completed");

		private String s;

		private GameState(String s) {
			this.s = s;
		}

		public String get() {
			return s;
		}
	}

}
