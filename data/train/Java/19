import java.io.BufferedReader;
import java.io.File;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.PrintWriter;
import java.math.BigInteger;
import java.security.MessageDigest;
import java.security.NoSuchAlgorithmException;
import java.util.Arrays;
import java.util.StringTokenizer;

public class A implements Runnable {
	
	PrintWriter out;
	BufferedReader breader;
	StringTokenizer st;
	
	boolean ok(char i, char c) {
		return i == 'T' || i == c;
	}
	
	boolean checkWin(char[][] board, char c) {
		boolean res = false;
		for (int i = 0; i < 4; ++i) {
			boolean h = true;
			boolean v = true;
			for (int j = 0; j < 4; ++j) {
				h &= ok(board[i][j], c);
				v &= ok(board[j][i], c);
			}
			res |= h | v;			
		}
		boolean d1 = true;
		boolean d2 = true;
		for (int i = 0; i < 4; ++i) {
			d1 &= ok(board[i][i], c);
			d2 &= ok(board[3 - i][i], c);
		}
		return res | d1 | d2;		
	}

	void solve() throws NoSuchAlgorithmException, IOException {
		char[][] board = new char[4][];
		boolean filled = true;
		for (int i = 0; i < 4; ++i) {
			board[i] = next().toCharArray();
			filled &= !Arrays.toString(board[i]).contains(".");
		}
		boolean x = checkWin(board, 'X');
		boolean o = checkWin(board, 'O');
		if (x || o) {
			out.println((x ? 'X' : 'O') + " won");			
		} else if (filled) {
			out.println("Draw");
		} else {
			out.println("Game has not completed");
		}
	}
	
	/**
	 * @param args
	 * @throws NoSuchAlgorithmException 
	 * @throws IOException 
	 * @throws LineUnavailableException 
	 */
	
	public static void main(String[] args)  {
		(new Thread(new A())).start();
	}

	@Override
	public void run() {
		try {
			//breader = new BufferedReader(new InputStreamReader(System.in));
			breader = new BufferedReader(new FileReader("inp.file"));
			st = new StringTokenizer("");
			out = new PrintWriter("res.file");
			int tst = nextInt();
			for (int i = 1; i <= tst; ++i) {
				out.print("Case #" + i + ": ");
				solve();
			}
			out.close();
		} catch (NoSuchAlgorithmException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		} catch (IOException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
	}

	String next() throws IOException {
		while (!st.hasMoreTokens()) {
			String temp = breader.readLine();
			if (temp == null) {
				return null;
			}
			st = new StringTokenizer(temp);
		}
		return st.nextToken();
	}
	int nextInt() throws IOException {
		return Integer.parseInt(next());
	}
	double nextDouble() throws IOException {
		return Double.parseDouble(next());
	}
	long nextLong() throws IOException {
		return Long.parseLong(next());
	}
	
}
