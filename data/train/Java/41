import java.io.*;
import java.util.*;

public class Main implements Runnable {

	public void _main() throws IOException {
		int nTests = nextInt();
		for (int test = 1; test <= nTests; test++) {
			int n = 4;
			char[][] s = new char[n][];
			boolean isComplete = true;
			for (int r = 0; r < n; r++) {
				s[r] = next().toCharArray();
				for (int c = 0; c < n; c++) {
					if (s[r][c] == '.') {
						isComplete = false;
					}
				}
			}
			boolean a = wins(n, s, 'X');
			boolean b = wins(n, s, 'O');
			String res = "";			
			if (a && !b) {
				res = "X won";
			} else if (!a && b) {
				res = "O won";
			} else if (!a && !b) {
				if (isComplete) {
					res = "Draw";	
				} else {
					res = "Game has not completed";
				}				
			} else if (a && b) {
				throw new AssertionError();
			}
			out.println("Case #" + test + ": " + res);
		}
	}

	private boolean wins(int n, char[][] s, char ch) {
		char[] a = new char[n];
		for (int i = 0; i < n; i++) {
			for (int j = 0; j < n; j++) a[j] = s[i][j];			
			if (winningString(n, a, ch)) return true;
			
			for (int j = 0; j < n; j++)	a[j] = s[j][i];			
			if (winningString(n, a, ch)) return true;
			
			for (int j = 0; j < n; j++)	a[j] = s[j][j];			
			if (winningString(n, a, ch)) return true;
			
			for (int j = 0; j < n; j++)	a[j] = s[j][n - j - 1];			
			if (winningString(n, a, ch)) return true;
		}
		return false;
	}

	private boolean winningString(int n, char[] a, char ch) {
		for (int i = 0; i < n; i++) {
			if (a[i] != ch && a[i] != 'T') {
				return false;
			}
		}
		return true;
	}


	private BufferedReader in;
	private PrintWriter out;
	private StringTokenizer st;

	private String next() throws IOException {
		while (st == null || !st.hasMoreTokens()) {
			String rl = in.readLine();
			if (rl == null)
				return null;
			st = new StringTokenizer(rl);
		}
		return st.nextToken();
	}

	private int nextInt() throws IOException {
		return Integer.parseInt(next());
	}

	private long nextLong() throws IOException {
		return Long.parseLong(next());
	}

	private double nextDouble() throws IOException {
		return Double.parseDouble(next());
	}

	public static void main(String[] args) {
		Locale.setDefault(Locale.UK);
		new Thread(new Main()).start();
	}

	public void run() {
		try {
			in = new BufferedReader(new InputStreamReader(System.in));
			out = new PrintWriter(System.out);
			in = new BufferedReader(new FileReader("A-large.in"));
			out = new PrintWriter(new FileWriter("A-large.out"));

			_main();

			out.close();
		} catch (Exception e) {
			e.printStackTrace();
			System.exit(202);
		}
	}

}
