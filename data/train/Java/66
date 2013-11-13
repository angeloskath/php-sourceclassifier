import static java.lang.Math.*;
import static java.util.Arrays.*;
import java.util.*;

public class A {
	Scanner sc = new Scanner(System.in);
	
	boolean win(char[][] cs, int si, int sj, int di, int dj, char c) {
		for (int i = 0; i < 4; i++) {
			char s = cs[si][sj];
			if (s != c && s != 'T') return false;
			si += di;
			sj += dj;
		}
		return true;
	}
	
	void solve() {
		char[][] cs = new char[4][];
		for (int i = 0; i < 4; i++) cs[i] = sc.next().toCharArray();
		boolean notFinished = false;
		for (int i = 0; i < 4; i++) for (int j = 0; j < 4; j++) if (cs[i][j] == '.') notFinished = true;
		for (char c : "OX".toCharArray()) {
			for (int i = 0; i < 4; i++) if (win(cs, 0, i, 1, 0, c) || win(cs, i, 0, 0, 1, c) || win(cs, 0, 0, 1, 1, c) || win(cs, 3, 0, -1, 1, c)) {
				System.out.println(c + " won");
				return;
			}
		}
		if (!notFinished) System.out.println("Draw");
		else System.out.println("Game has not completed");
	}
	
	void run() {
		int T = sc.nextInt();
		for (int caseID = 1; caseID <= T; caseID++) {
			System.out.printf("Case #%d: ", caseID);
			solve();
		}
	}
	
	void debug(Object...os) {
		System.err.println(deepToString(os));
	}
	
	public static void main(String[] args) {
		new A().run();
	}
}
