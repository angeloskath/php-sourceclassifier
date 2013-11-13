import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.util.StringTokenizer;


public class A {
	
	static class Scanner{
		BufferedReader br=null;
		StringTokenizer tk=null;
		public Scanner(){
			br=new BufferedReader(new InputStreamReader(System.in));
		}
		public String next() throws IOException{
			while(tk==null || !tk.hasMoreTokens())
				tk=new StringTokenizer(br.readLine());
			return tk.nextToken();
		}
		public int nextInt() throws NumberFormatException, IOException{
			return Integer.valueOf(next());
		}
		public double nextDouble() throws NumberFormatException, IOException{
			return Double.valueOf(next());
		}
	}
	
	static char[][] m;
	
	static boolean won(char c){
		boolean flag = true;
		for(int i = 0; i < 4; i++)
			if (m[i][i] != c && m[i][i] != 'T')
				flag = false;
		if (flag)
			return true;
		flag = true;
		for(int i = 0; i < 4; i++)
			if (m[i][3 - i] != c && m[i][3 - i] != 'T')
				flag = false;
		if (flag)
			return true;
		for(int i = 0; i < 4; i++){
			boolean all = true;
			for(int j = 0; j < 4; j++)
				if (m[i][j] != c && m[i][j]!= 'T' ){
					all = false;
					break;
				}
			if (all)
				return true;
		}
		
		for(int i = 0; i < 4; i++){
			boolean all = true;
			for(int j = 0; j < 4; j++)
				if (m[j][i] != c && m[j][i]!= 'T' ){
					all = false;
					break;
				}
			if (all)
				return true;
		}
		return false;
	}
	
	static boolean nodots(){
		for(int i = 0; i < 4; i++)
			for(int j = 0; j < 4; j++)
				if (m[i][j] == '.')
					return false;
		return true;
	}
	
	public static void main(String args[]) throws NumberFormatException, IOException{
		Scanner sc = new Scanner();
		int T = sc.nextInt();
		for(int c = 1; c <= T; c++){
			m = new char[4][];
			for(int i = 0; i < 4; i++)
				m[i] = sc.next().toCharArray();
			System.out.print("Case #"+c+": ");
			if (won('O'))
				System.out.println("O won");
			else if (won('X'))
				System.out.println("X won");
			else if (nodots())
				System.out.println("Draw");
			else
				System.out.println("Game has not completed");
		}
	}

}
