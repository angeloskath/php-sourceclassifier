import java.io.BufferedReader;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.FileReader;
import java.io.IOException;
import java.io.PrintStream;
import java.io.Reader;
import java.util.Arrays;

public class TicTacToeTomek {
	public static boolean contains(int[] array, int v) {
		for (int e : array)
			if (e == v)
				return true;

		return false;
	}

	public static void main(String[] args) {
		int[][] state = new int[4][4];
		FileReader input;
		try {
			input = new FileReader("A-large.in.txt");
			BufferedReader reader = new BufferedReader(input);
			PrintStream out = new PrintStream(
					new FileOutputStream("output.txt"));
			int test = Integer.parseInt(reader.readLine());

			int c;
			for (int k = 1; k <= test; k++) {
				for (int i = 0; i < 4; i++) {
					for (int j = 0; j < 4; j++) {
						c = reader.read();
						while (c == 10)
							c = reader.read();
						state[i][j] = c;
					}
				}

				boolean finished = true;
				boolean solved;
				String winner = null;
				// Check row
				solved = false;
				int[] row;

				for (int i = 0; i < 4; i++) {
					row = state[i];
					if (contains(row, 46)) {
						finished = false;
					} else if (contains(row, 88) && !contains(row, 79)) {
						winner = "X";
						solved = true;
						break;

					} else if (contains(row, 79) && !contains(row, 88)) {
						winner = "O";
						solved = true;
						break;

					}

				}
				int[] column;
				if (!solved) {
					column = new int[4];
					for (int i = 0; i < 4; i++) {
						for (int j = 0; j < 4; j++) {
							column[j] = state[j][i];
						}
						if (contains(column, 46)) {
							finished = false;
						} else if (contains(column, 88)
								&& !contains(column, 79)) {
							winner = "X";
							solved = true;
							break;

						} else if (contains(column, 79)
								&& !contains(column, 88)) {
							winner = "O";
							solved = true;
							break;
						}

					}

				}
				if (!solved) {
					int leftdiag[] = new int[4];
					for (int i = 0; i < 4; i++) {
						leftdiag[i] = state[i][i];

					}
					if (contains(leftdiag, 46)) {
						finished = false;
					} else if (contains(leftdiag, 88)
							&& !contains(leftdiag, 79)) {
						winner = "X";
						solved = true;
					} else if (contains(leftdiag, 79)
							&& !contains(leftdiag, 88)) {
						winner = "O";
						solved = true;

					}

				}
				if (!solved) {
					int rightdiag[] = new int[4];
					for (int i = 0; i < 4; i++) {
						rightdiag[i] = state[i][3 - i];

					}
					if (contains(rightdiag, 46)) {
						finished = false;
					} else if (contains(rightdiag, 88)
							&& !contains(rightdiag, 79)) {
						winner = "X";
						solved = true;

					} else if (contains(rightdiag, 79)
							&& !contains(rightdiag, 88)) {
						winner = "O";
						solved = true;

					}

				}

				if (solved) {
					out.println("Case #" + k + ": " + winner + " won");
				} else if (finished) {
					out.println("Case #" + k + ": " + "Draw");
				} else {
					out.println("Case #" + k + ": " + "Game has not completed");
				}
			}
		} catch (FileNotFoundException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		} catch (IOException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}

	}
}
