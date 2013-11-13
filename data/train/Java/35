package qual;

import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.io.PrintWriter;
import java.util.Arrays;

public class p1 {

	private static void debug(Object... args) {
		System.out.println(Arrays.deepToString(args));
	}

	private static final char b[][] = new char[4][4];
	private static final String[] st = {"X won", "O won","Draw","Game has not completed"};
	private static String solve(BufferedReader br) throws Exception {
		for(int i=0;i<4;i++) {
			String s=br.readLine();
			for(int j=0;j<4;j++) {
				b[i][j] = s.charAt(j);
			}
		}
		int ec=0;
		for(int i=0;i<4;i++) {
			int xc=0,oc=0,tc=0;
			for(int j=0;j<4;j++) {
				if(b[i][j]=='X')xc++;
				if(b[i][j]=='O')oc++;
				if(b[i][j]=='T')tc++;				
				if(b[i][j]=='.')ec++;
			}
			if(xc == 4 || (xc == 3 && tc == 1)) return st[0];
			if(oc == 4 || (oc == 3 && tc == 1)) return st[1];
		}
		for(int i=0;i<4;i++) {
			int xc=0,oc=0,tc=0;
			for(int j=0;j<4;j++) {
				if(b[j][i]=='X')xc++;
				if(b[j][i]=='O')oc++;
				if(b[j][i]=='T')tc++;				
				if(b[j][i]=='.')ec++;
			}
			if(xc == 4 || (xc == 3 && tc == 1)) return st[0];
			if(oc == 4 || (oc == 3 && tc == 1)) return st[1];
		}
		int xc=0,oc=0,tc=0;
		for(int i=0;i<4;i++) {
			if(b[i][i]=='X')xc++;
			if(b[i][i]=='O')oc++;
			if(b[i][i]=='T')tc++;				
			if(b[i][i]=='.')ec++;			
		}
		if(xc == 4 || (xc == 3 && tc == 1)) return st[0];
		if(oc == 4 || (oc == 3 && tc == 1)) return st[1];
		
		xc=oc=tc=0;
		for(int i=0;i<4;i++) {
			if(b[3-i][i]=='X')xc++;
			if(b[3-i][i]=='O')oc++;
			if(b[3-i][i]=='T')tc++;				
			if(b[3-i][i]=='.')ec++;			
		}
		if(xc == 4 || (xc == 3 && tc == 1)) return st[0];
		if(oc == 4 || (oc == 3 && tc == 1)) return st[1];
		
		if(ec == 0) return st[2];
		else return st[3];
	}

	public static void main(String[] rags) throws Exception {
		BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
		PrintWriter pw = new PrintWriter(System.out, true);
		int t = Integer.parseInt(br.readLine());
		for (int i = 1; i <= t; i++) {
			pw.println("Case #" + i + ": " + solve(br));
			br.readLine();
		}
	}
}
