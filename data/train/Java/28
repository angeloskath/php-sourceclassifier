import java.io.BufferedReader;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.util.StringTokenizer;

public class TicTac {
	
	static char[][] board;
	static boolean dot;
	
	static int check(){
		
		boolean X = false;
		boolean O = false;
		for(int i = 0; i<4; i++){
			if(winCol(i,'X')) X = true;
			if(winCol(i,'O')) O = true;
		}
		
		for(int i = 0; i<4; i++){
			if(winRow(i,'X')) X = true;
			if(winRow(i,'O')) O = true;
		}
		
		if(winDiag1('X')) X = true;
		if(winDiag2('X')) X = true;
		if(winDiag1('O')) O = true;
		if(winDiag2('O')) O = true;
		
		if(O && X) return 2;
		else if(O) return 1;
		else if(X) return 0;
		else if(dot) return -1;
		else return 2;
	}
	
	static boolean winCol(int ind, char player){
		if( (board[ind][0]==player || board[ind][0]=='T') && 
			(board[ind][1]==player || board[ind][1]=='T') &&
			(board[ind][2]==player || board[ind][2]=='T') && 
			(board[ind][3]==player || board[ind][3]=='T')){
			return true;
		}
		return false;
	}
	
	static boolean winRow(int ind, char player){
		if( (board[0][ind]==player || board[0][ind]=='T') && 
			(board[1][ind]==player || board[1][ind]=='T') &&
			(board[2][ind]==player || board[2][ind]=='T') && 
			(board[3][ind]==player || board[3][ind]=='T')){
			return true;
		}
		return false;
	}
	
	static boolean winDiag1(char player){
		if( (board[0][0]==player || board[0][0]=='T') && 
			(board[1][1]==player || board[1][1]=='T') &&
			(board[2][2]==player || board[2][2]=='T') && 
			(board[3][3]==player || board[3][3]=='T')){
			return true;
		}
		return false;
	}
	
	static boolean winDiag2(char player){
		if( (board[0][3]==player || board[0][3]=='T') && 
			(board[1][2]==player || board[1][2]=='T') &&
			(board[2][1]==player || board[2][1]=='T') && 
			(board[3][0]==player || board[3][0]=='T')){
			return true;
		}
		return false;
	}

	public static void main(String[] args) {
		FastScanner sc = new FastScanner(System.in);
		int cases = sc.nextInt();
		
		for(int c = 0; c<cases; c++){
			board = new char[4][4];
			dot = false;
			for(int i=0; i<4; i++){
				String aux =  sc.next();
				for(int j=0; j<4; j++){
					board[i][j] = aux.charAt(j);
					if(board[i][j]=='.'){
						dot =true;
					}
				}
			}
			
			int res = check();
			if(res == -1){ //Not finished
				System.out.printf("Case #%d: %s\n",(c+1),"Game has not completed");
			} else if (res==0){ // X
				System.out.printf("Case #%d: %s\n",(c+1),"X won");
			} else if (res==1){ // O
				System.out.printf("Case #%d: %s\n",(c+1),"O won");
			} else { // Tie
				System.out.printf("Case #%d: %s\n",(c+1),"Draw");
			}
			
		}
	}
	
	static class FastScanner {
		BufferedReader br;
		StringTokenizer st;

		public FastScanner(File f) {
			try {
				br = new BufferedReader(new FileReader(f));
			} catch (FileNotFoundException e) {
				e.printStackTrace();
			}
		}

		public FastScanner(InputStream f) {
			br = new BufferedReader(new InputStreamReader(f));
		}

		String next() {
			while (st == null || !st.hasMoreTokens()) {
				String s = null;
				try {
					s = br.readLine();
				} catch (IOException e) {
					e.printStackTrace();
				}
				if (s == null)
					return null;
				st = new StringTokenizer(s);
			}
			return st.nextToken();
		}

		boolean hasMoreTokens() {
			while (st == null || !st.hasMoreTokens()) {
				String s = null;
				try {
					s = br.readLine();
				} catch (IOException e) {
					e.printStackTrace();
				}
				if (s == null)
					return false;
				st = new StringTokenizer(s);
			}
			return true;
		}

		int nextInt() {
			return Integer.parseInt(next());
		}

		long nextLong() {
			return Long.parseLong(next());
		}
		
		double nextDouble(){
			return Double.parseDouble(next());
		}
	}

}
