package qualificationRound2011;

import java.io.PrintWriter;
import java.util.Scanner;

public class A {

	static Scanner scan = new Scanner(System.in);
	static PrintWriter out = new PrintWriter(System.out);
	static int[][] map;

	public static void main(String[] args) {
		int n = si();
		for (int i = 0; i < n; i++) {
			map = new int[4][4];
			for (int j = 0; j < 4; j++) {
				char[] tmp = scan.next().toCharArray();
				for (int k = 0; k < 4; k++) {
					map[j][k] = tmp[k]=='O' ? 2 : (tmp[k]=='T' ? 3 : (tmp[k]=='X' ? 5 : 0));
				}
			}
			scan.nextLine();
			out.print("Case #"+(i+1)+": ");

			boolean f = isComplete();
			int winlose = -1;
			Judge : do{
				for (int j = 0; j < 4; j++) {
					int pt = map[0][j]*map[1][j]*map[2][j]*map[3][j];
					if(pt==16 || pt==24){
						winlose=0;
						break Judge;
					}
					if(pt==625 || pt==375){
						winlose=1;
						break Judge;
					}
				}
				for (int j = 0; j < 4; j++) {
					int pt = map[j][0]*map[j][1]*map[j][2]*map[j][3];
					if(pt==16 || pt==24){
						winlose=0;
						break Judge;
					}
					if(pt==625 || pt==375){
						winlose=1;
						break Judge;
					}
				}
				{
					int pt = map[0][0]*map[1][1]*map[2][2]*map[3][3];
					if(pt==16 || pt==24){
						winlose=0;
						break Judge;
					}
					if(pt==625 || pt==375){
						winlose=1;
						break Judge;
					}
				}
				{
					int pt = map[0][3]*map[1][2]*map[2][1]*map[3][0];
					if(pt==16 || pt==24){
						winlose=0;
						break Judge;
					}
					if(pt==625 || pt==375){
						winlose=1;
						break Judge;
					}
				}
			}while(false);

			if(winlose==-1){
				out.println(f ? "Draw" : "Game has not completed");
			}else{
				out.println(winlose==0 ? "O won" : "X won");
			}
		}
		out.flush();
	}

	static boolean isComplete(){
		long tmp = 1;
		for (int i = 0; i < 4 ; i++) {
			for (int j = 0; j < 4; j++) {
				tmp*=map[i][j];
			}
		}
		return tmp!=0;
	}

	static int si() {
		return Integer.parseInt(scan.next());
	}
}

class P {
	int y,x;
	P(int ny,int nx){
		y=ny; x=nx;
	}
}