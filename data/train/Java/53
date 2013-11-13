import java.util.*;
import java.io.*;
import java.math.*;
import java.awt.geom.*;

import static java.lang.Math.*;

public class Solution implements Runnable {

	public void solve() throws Exception {
		int t = sc.nextInt();
	outer:
		for (int Case = 1; Case <= t; Case++) {
			char[][] field = new char[4][];
			for (int i = 0; i < 4; i++) {
				field[i] = sc.nextToken().toCharArray();
			}
			out.print("Case #" + Case + ": ");
			for (int i = 0; i < 4; i++) {
				boolean horGoodX = true;
				boolean horGoodO = true;
				boolean vertGoodX = true;
				boolean vertGoodO = true;
				for (int j = 0; j < 4; j++) {
					if (field[i][j] != 'X' && field[i][j] != 'T') {
						horGoodX = false;
					}
					if (field[i][j] != 'O' && field[i][j] != 'T') {
						horGoodO = false;
					}
					if (field[j][i] != 'X' && field[j][i] != 'T') {
						vertGoodX = false;
					}
					if (field[j][i] != 'O' && field[j][i] != 'T') {
						vertGoodO = false;
					}
				}
				if (horGoodX || vertGoodX) {
					out.println("X won");
					continue outer;
				}
				if (horGoodO || vertGoodO) {
					out.println("O won");
					continue outer;
				}
			}
			boolean d1GoodX = true;
			boolean d1GoodO = true;
			boolean d2GoodX = true;
			boolean d2GoodO = true;
			for (int i = 0; i < 4; i++) {
				if (field[i][i] != 'X' && field[i][i] != 'T') {
					d1GoodX = false;
				}
				if (field[i][i] != 'O' && field[i][i] != 'T') {
					d1GoodO = false;
				}
				if (field[i][3 - i] != 'X' && field[i][3 - i] != 'T') {
					d2GoodX = false;
				}
				if (field[i][3 - i] != 'O' && field[i][3 - i] != 'T') {
					d2GoodO = false;
				}
			}
			if (d1GoodX || d2GoodX) {
				out.println("X won");
				continue outer;
			}
			if (d1GoodO || d2GoodO) {
				out.println("O won");
				continue outer;
			}
			boolean finished = true;
			for (int i = 0; i < 4; i++) {
				for (int j = 0; j < 4; j++) {
					if (field[i][j] == '.') {
						finished = false;
					}
				}
			}
			if (finished) {
				out.println("Draw");
			} else {
				out.println("Game has not completed");
			}
		}
	}

	static Throwable uncaught;

	BufferedReader in;
	FastScanner sc;
	PrintWriter out;

	@Override
	public void run() {
		try {
			in = new BufferedReader(new FileReader("A-large.in"));
			out = new PrintWriter(new FileWriter("A-large.out"));
			sc = new FastScanner(in);
			solve();
		} catch (Throwable uncaught) {
			Solution.uncaught = uncaught;
		} finally {
			out.close();
		}
	}

	public static void main(String[] args) throws Throwable {
		Thread thread = new Thread(null, new Solution(), "", (1 << 26));
		thread.start();
		thread.join();
		if (Solution.uncaught != null) {
			throw Solution.uncaught;
		}
	}

}

class FastScanner {

	BufferedReader in;
	StringTokenizer st;

	public FastScanner(BufferedReader in) {
		this.in = in;
	}

	public String nextToken() throws Exception {
		while (st == null || !st.hasMoreTokens()) {
			st = new StringTokenizer(in.readLine());
		}
		return st.nextToken();
	}

	public int nextInt() throws Exception {
		return Integer.parseInt(nextToken());
	}

	public long nextLong() throws Exception {
		return Long.parseLong(nextToken());
	}

	public double nextDouble() throws Exception {
		return Double.parseDouble(nextToken());
	}

}