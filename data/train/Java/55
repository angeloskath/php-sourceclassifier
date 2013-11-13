package codejam;

import java.io.*;

public class TicTacToeTomek {
	
	static boolean inside(int r, int c) {
		return r >= 0 && c >= 0 && r < 4 && c < 4;
	}
	
	static boolean won(char[][] b, char player) {
		int[] di = {-1, -1, -1, 0, 0, 1, 1, 1};
		int[] dj = {-1, 0, 1, -1, 1, -1, 0, 1};
		
		for (int i = 0; i < 4; ++i)
			for (int j = 0; j < 4; ++j) {
				for (int d = 0; d < 8; ++d) {
					boolean won = true;
					for (int k = 0; k < 4; ++k) {
						int ni = i + k * di[d];
						int nj = j + k * dj[d];
						if (!inside(ni, nj) || (b[ni][nj] != player && b[ni][nj] != 'T')) {
							won = false;
							break;
						}
					}
					if (won) return true;
				}
			}
		return false;
	}
	
	public static void main(String[] args) throws IOException {
		System.setIn(new FileInputStream("A-large.in"));
		System.setOut(new PrintStream("out_large.txt"));
		
		BufferedReader in = new BufferedReader(new InputStreamReader(System.in));
		
		int T = Integer.parseInt(in.readLine());
		for (int t = 1; t <= T; ++t) {
			char[][] board = new char[4][4];
			for (int i = 0; i < 4; ++i)
				board[i] = in.readLine().toCharArray();
			in.readLine();
			
			boolean complete = true;
			for (int i = 0; i < 4; ++i)
				for (int j = 0; j < 4; ++j)
					if (board[i][j] == '.')
						complete = false;
			
			System.out.print("Case #" + t + ": ");
			if (won(board, 'O')) System.out.println("O won");
			else if (won(board, 'X')) System.out.println("X won");
			else if (complete) System.out.println("Draw");
			else System.out.println("Game has not completed");
		}
		
		in.close();
		System.exit(0);
	}
}
