import java.io.*;
import java.util.*;

public class A {

	int get(char c) {
		if (c == '.') {
			return 0;
		}
		if (c == 'X') {
			return 1;
		}
		if (c == 'O') {
			return 2;
		}
		return 3;
	}

	void solve() throws IOException {
		char[][] a = new char[4][4];
		for (int i = 0; i < 4; i++) {
			a[i] = next().toCharArray();
		}
		for (int i = 0; i < 4; i++) {
			boolean[] was = new boolean[4];
			for (int j = 0; j < 4; j++) {
				was[get(a[i][j])] = true;
			}
			if (!was[0] && !was[2]) {
				out.println("X won");
				return;
			}
			if (!was[0] && !was[1]) {
				out.println("O won");
				return;
			}
		}
		for (int j = 0; j < 4; j++) {
			boolean[] was = new boolean[4];
			for (int i = 0; i < 4; i++) {
				was[get(a[i][j])] = true;
			}
			if (!was[0] && !was[2]) {
				out.println("X won");
				return;
			}
			if (!was[0] && !was[1]) {
				out.println("O won");
				return;
			}
		}
		boolean[] was = new boolean[4];
		for (int i = 0; i < 4; i++) {
			was[get(a[i][i])] = true;
		}
		if (!was[0] && !was[2]) {
			out.println("X won");
			return;
		}
		if (!was[0] && !was[1]) {
			out.println("O won");
			return;
		}
		was = new boolean[4];
		for (int i = 0; i < 4; i++) {
			was[get(a[i][3 - i])] = true;
		}
		if (!was[0] && !was[2]) {
			out.println("X won");
			return;
		}
		if (!was[0] && !was[1]) {
			out.println("O won");
			return;
		}

		for (int i = 0; i < 4; i++) {
			for (int j = 0; j < 4; j++) {
				if (a[i][j] == '.') {
					out.println("Game has not completed");
					return;
				}
			}
		}
		out.println("Draw");

	}

	public void run() throws IOException {
		br = new BufferedReader(new FileReader("a.in"));
		out = new PrintWriter("a.out");
		int t = nextInt();
		for (int i = 1; i <= t; i++) {
			out.print("Case #" + i + ": ");
			solve();
		}
		br.close();
		out.close();
	}

	public static void main(String[] args) throws IOException {
		new A().run();
	}

	BufferedReader br;
	StringTokenizer str;
	PrintWriter out;

	String next() throws IOException {
		while (str == null || !str.hasMoreTokens()) {
			String s = br.readLine();
			if (s != null) {
				str = new StringTokenizer(s);
			} else {
				return null;
			}
		}
		return str.nextToken();
	}

	long nextLong() throws IOException {
		return Long.parseLong(next());
	}

	int nextInt() throws IOException {
		return Integer.parseInt(next());
	}

	double nextDouble() throws IOException {
		return Double.parseDouble(next());
	}

}
