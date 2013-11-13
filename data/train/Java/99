import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import java.io.PrintWriter;
import java.util.Scanner;

public class A {

	private void work() throws IOException {
		Scanner sc = new Scanner(new FileReader("A-large.in"));
		PrintWriter pw = new PrintWriter(new FileWriter("A-large.out"));
		// Scanner sc = new Scanner(new FileReader("A-small-attempt0.in"));
		// PrintWriter pw = new PrintWriter(new
		// FileWriter("A-small-attempt0.out"));
		// Scanner sc = new Scanner(new FileReader("a.in"));
		// PrintWriter pw = new PrintWriter(new FileWriter("a.out"));
		int nc = sc.nextInt();
		char[][] g = new char[4][4];
		for (int tc = 1; tc <= nc; tc++) {
			for (int i = 0; i < 4; i++) {
				g[i] = sc.next().toCharArray();
			}
			if (won('X', g)) {
				pw.printf("Case #%d: X won\n", tc);
			} else if (won('O', g)) {
				pw.printf("Case #%d: O won\n", tc);
			} else if (!empty(g)) {
				pw.printf("Case #%d: Draw\n", tc);
			} else {
				pw.printf("Case #%d: Game has not completed\n", tc);
			}
		}
		pw.close();
	}

	private boolean won(char c, char[][] g) {
		for (int i = 0; i < 4; i++) {
			int cnt = 0;
			for (int j = 0; j < 4; j++) {
				if (g[i][j] == c || g[i][j] == 'T')
					cnt++;
			}
			if (cnt == 4)
				return true;
			cnt = 0;
			for (int j = 0; j < 4; j++) {
				if (g[j][i] == c || g[j][i] == 'T')
					cnt++;
			}
			if (cnt == 4)
				return true;
		}
		int cnt = 0;
		for (int i = 0; i < 4; i++) {
			if (g[i][i] == c || g[i][i] == 'T')
				cnt++;
		}
		if (cnt == 4)
			return true;
		cnt = 0;
		for (int i = 0; i < 4; i++) {
			if (g[3 - i][i] == c || g[3 - i][i] == 'T')
				cnt++;
		}
		if (cnt == 4)
			return true;
		return false;
	}

	private boolean empty(char[][] g) {
		for (int i = 0; i < 4; i++) {
			for (int j = 0; j < 4; j++) {
				if (g[i][j] == '.')
					return true;
			}
		}
		return false;
	}

	public static void main(String[] args) throws IOException {
		new A().work();
	}
}
