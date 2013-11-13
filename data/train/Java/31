import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.LineNumberReader;


public class TicTacToeTomek {
	static int[][] checks = {
		{ 0, 0, 1, 0 },
		{ 0, 1, 1, 0 },
		{ 0, 2, 1, 0 },
		{ 0, 3, 1, 0 },

		{ 0, 0, 0, 1 },
		{ 1, 0, 0, 1 },
		{ 2, 0, 0, 1 },
		{ 3, 0, 0, 1 },

		{ 0, 0, 1,  1 },
		{ 0, 3, 1, -1 }
	};

	static void go(String inputFile) throws Exception {
		LineNumberReader in = new LineNumberReader(new FileReader(inputFile));
		FileWriter out = new FileWriter(inputFile + ".out");
		
		int nCases = Integer.parseInt(in.readLine());
		for (int c = 1; c <= nCases; c++) {
			int nEmpty = 0;
			int[][] state = new int[4][4];
			for (int row = 0; row < 4; row++) {
				String l = in.readLine();
				for (int col = 0; col < 4; col++) {
					int s = toState(l.charAt(col));
					state[row][col] = s;
					if (s == 0)
						nEmpty++;
				}
			}
			
			out.write("Case #" + c + ": " + result(state, nEmpty) + "\n");
			in.readLine();
		}
		out.close();
	}
	
	static String result(int[][] state, int nEmpty) {
		for (int want = 1; want <= 2; want++) {
			check:
			for (int[] check : checks) {
				int r = check[0];
				int c = check[1];
				int dr = check[2];
				int dc = check[3];

				for (int a = 0; a < 4; a++) {
					if ((state[r][c] & want) != want)
						continue check;
					r += dr;
					c += dc;
				}
				
				if (want == 1) {
					return "O won";
				} else {
					return "X won";
				}
			}
		}
		
		if (nEmpty == 0) {
			return "Draw";
		} else {
			return "Game has not completed";
		}
	}
	
	private static int toState(char c) {
		switch (c) {
		case '.': return 0;
		case 'O': return 1;
		case 'X': return 2;
		case 'T': return 3;
		}
		throw new IllegalStateException();
	}

	public static void main(String[] args) throws Exception {
		LineNumberReader sysIn = new LineNumberReader(new InputStreamReader(System.in));
		String line;
		while ((line = sysIn.readLine()) != null) {
			go(line.trim());
		}
	}
}
