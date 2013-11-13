import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;


public class TicTacToeTomek {
	
	public static final void main(String[] params) throws IOException {
		BufferedReader br = new BufferedReader(new FileReader("TicTacToeTomek.in"));
		BufferedWriter bw = new BufferedWriter(new FileWriter("TicTacToeTomek.out"));
		int count = Integer.parseInt(br.readLine().trim());
		String[] x = new String[4];
		for (int test = 0; test < count; test++) {
			for (int i = 0; i < 4; i++) {
				x[i] = br.readLine();
			}
			bw.write("Case #" + (test+1) + ": " + new TicTacToeTomek().solve(x));
			bw.newLine();
			br.readLine();
		}
		bw.close();
		br.close();
	}
	
	private String solve(String[] x) {
		if (isWin(x, 'X')) return "X won";
		if (isWin(x, 'O')) return "O won";
		for (String s: x) {
			if (s.indexOf('.') >= 0) {
				return "Game has not completed";
			}
		}
		return "Draw";
	}
	
	private boolean isWin(String[] x, char ch) {
		for (String s: x) {
			if (isWin(s, ch)) {
				return true;
			}
		}
		String d1 = "", d2 = "";
		for (int j = 0; j < 4; j++) {
			String v = "";
			for (int i = 0; i < 4; i++) {
				v += x[i].charAt(j);
			}
			if (isWin(v, ch)) return true;
			d1 += x[j].charAt(j);
			d2 += x[j].charAt(3 - j);
		}
		if (isWin(d1, ch)) return true;
		if (isWin(d2, ch)) return true;
		return false;
	}
	
	private boolean isWin(String s, char ch) {
		for (char ch2: s.toCharArray()) {
			if (ch != ch2 && ch2 != 'T') return false;
		}
		return true;
	}

}
