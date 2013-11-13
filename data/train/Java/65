import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.math.BigInteger;
import java.util.*;
/* 
 * Problem A. 
 */
public class A {
	static BufferedReader _in = new BufferedReader(new InputStreamReader(System.in));
	static String _string;
	static StringTokenizer _stok;
	static String nextLine() throws IOException {
		_string = _in.readLine();
		_stok = new StringTokenizer(_string);
		return _string;}
	static String nextWord()	{return _stok.nextToken();}
	static int nextInt()		{return Integer.parseInt(nextWord());} // 2.1 x 10^9, 
	static long nextLong()		{return Long.parseLong(nextWord());}   // 9.2 x 10^18, 
	static double nextDouble() 	{return Double.parseDouble(nextWord());}
	static BigInteger nextBig()	{return new BigInteger(nextWord());}
	static void Dprintln(Object s) 	{if(debug) System.out.println(s);}
	static void Dprintln() 	{if(debug) System.out.println();}
	static void Dprint(Object s) 	{if(debug) System.out.print(s);}
	static void Dprintf(String s, Object... args) 	{if(debug) System.out.printf(s, args);}
	static void print(Object s) {System.out.print(s);}
	static void println(Object s) {System.out.println(s);}
	static void println() 	{System.out.println();}
	static void printf(String s, Object... args) {System.out.printf(s, args);}
	
	static boolean debug = false;
	
	static void precomp() {
	}
	
	static class Diff {
		int si,sj,dsi,dsj,di,dj,count;
		Diff(int a, int b, int c, int d, int e, int f, int g) {
			si=a; sj=b; dsi=c; dsj=d; di=e; dj=f; count=g;
		}
	}
	
	public static void main(String[] args) throws Exception {
		precomp();

		nextLine();
		int Cases = nextInt();
		for (int Case=0; Case<Cases; Case++) {
			String ans = null;
			
			char[][] grid = new char[4][4];
			
			for (int i=0; i<4; i++) {
				String l = nextLine();
				grid[i] = l.toCharArray();
			}
			
			int ic=0;

			Diff diffs[] = new Diff[]{
					new Diff(0,0,1,0,0,1,4),
					new Diff(0,0,0,1,1,0,4),
					new Diff(0,0,0,0,1,1,1),
					new Diff(3,0,0,0,-1,1,1)
			};
			outer:
			for (Diff diff : diffs) {
				for (int k=0, si=diff.si, sj=diff.sj; 
						k<diff.count; 
						k++, si+=diff.dsi, sj+=diff.dsj) {
					
					int xc=0,oc=0,tc=0;
					for (int m=0, i=si, j=sj; m<4; m++, i+=diff.di, j+=diff.dj) {
						Dprintf("loc: %d %d\n", i, j);
						char c = grid[i][j];
						if (c=='X')xc++;
						if (c=='O')oc++;
						if (c=='T')tc++;
						if (c=='.')ic++;
					}
					//Dprintf("%d %d %d %d\n", xc, oc, tc, ic);
					if (xc==4 || (xc==3 && tc==1)) {
						ans = "X won"; break outer;
					}
					else if (oc==4 || (oc==3 && tc==1)) {
						ans = "O won"; break outer;
					}
				}
			}
			
			if (ans == null) {
				if (ic == 0) ans = "Draw";
				else ans = "Game has not completed";
			}
			
			System.out.println("Case #" + (Case+1) + ": " + (ans));

			nextLine();

		} // end for each case

	} // end main
	

}
