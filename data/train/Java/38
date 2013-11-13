import java.util.*;
import java.io.*;

public class TicTac {
	FastScanner in;
	PrintWriter out;

int n;
	
	boolean good(char test, char c) {
		return test == c || test == 'T';
	}
	
	boolean won(char[][] a, char c) {
		for (int i = 0; i < n; i++) {
			boolean ok = true;
			for (int j = 0; j < n; j++) {
				if (!good(a[i][j], c)) {
					ok = false;
				}
			}
			if (ok) return true;
		}
		for (int i = 0; i < n; i++) {
			boolean ok = true;
			for (int j = 0; j < n; j++) {
				if (!good(a[j][i], c)) {
					ok = false;
				}
			}
			if (ok) return true;
		}
		boolean ok = true;
		for (int i = 0; i < n; i++) {
			if (!good(a[i][i], c)) {
				ok = false;
			}
		}
		if (ok) return true;
		ok = true;
		for (int i = 0; i < n; i++) {
			if (!good(a[i][n - 1 - i], c)) {
				ok = false;
			}
		}
		return ok;
	}
	
	public void solve() throws IOException {
		n = 4;
		char[][] a = new char[n][n];
		boolean isDot = false;
		for (int i = 0; i < n; i++) {
			a[i] = in.next().toCharArray();
			for (int j = 0; j < n; j++) {
				if (a[i][j] == '.') {
					isDot = true;
				}
			}
		}
		if (won(a, 'X')) {
			out.println("X won");
		} else if (won(a, 'O')) {
			out.println("O won");
		} else {
			if (isDot) {
				out.println("Game has not completed");
			} else {
				out.println("Draw");
			}
		}
	}

	public void run() {
		try {
			in = new FastScanner(new File("period.in"));
			out = new PrintWriter(new File("period.out"));

			int tests = in.nextInt();
			for (int i = 0; i < tests; i++) {
				out.print("Case #" + (i + 1) + ": ");
				solve();
			}

			out.close();
		} catch (IOException e) {
			e.printStackTrace();
		}
	}

	class FastScanner {
		BufferedReader br;
		StringTokenizer st;

		FastScanner(File f) {
			try {
				br = new BufferedReader(new FileReader(f));
			} catch (FileNotFoundException e) {
				e.printStackTrace();
			}
		}

		String next() {
			while (st == null || !st.hasMoreTokens()) {
				try {
					st = new StringTokenizer(br.readLine());
				} catch (IOException e) {
					e.printStackTrace();
				}
			}
			return st.nextToken();
		}

		int nextInt() {
			return Integer.parseInt(next());
		}
	}

	public static void main(String[] arg) {
		new TicTac().run();
	}
}