import java.util.Scanner;

public class A {
	public static void main(String[] args) {
		Scanner in = new Scanner(System.in);
		int T = in.nextInt();
		for(int cas=1; cas<=T; cas++) {
			char[][] G = new char[4][4];
			for(int r=0; r<4; r++)
				G[r] = in.next().toCharArray();
		
			boolean done = true;
			for(int r=0; r<4; r++)
				for(int c=0; c<4; c++)
					if(G[r][c]=='.')
						done = false;
		
			boolean XW = won('X', G);
			boolean OW = won('O', G);
			if(XW) System.out.printf("Case #%d: X won\n", cas);
			else if(OW) System.out.printf("Case #%d: O won\n", cas);
			else if(!done) System.out.printf("Case #%d: Game has not completed\n", cas);
			else System.out.printf("Case #%d: Draw\n", cas);
		}
	}
	
	static boolean won(char ch, char[][] G) {
		R: for(int r=0; r<4; r++) {
			for(int c=0; c<4; c++)
				if(G[r][c]!=ch && G[r][c]!='T') continue R;
			return true;
		}
		C: for(int c=0; c<4; c++) {
			for(int r=0; r<4; r++)
				if(G[r][c]!=ch && G[r][c]!='T') continue C;
			return true;
		}
		
		boolean d_ok = true;
		for(int i=0; i<4; i++)
			if(G[i][i]!=ch && G[i][i]!='T')
				d_ok = false;
		if(d_ok) return true;
		
		d_ok = true;
		for(int i=0; i<4; i++)
			if(G[i][3-i]!=ch && G[i][3-i]!='T')
				d_ok = false;
		if(d_ok) return true;
		
		return false;
	}
}
