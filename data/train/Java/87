package gcj2013.Pre;

import static java.lang.Math.max;
import static java.lang.Math.min;
import static java.util.Arrays.deepToString;

import java.io.BufferedInputStream;
import java.io.File;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.PrintStream;
import java.util.Arrays;
import java.util.Scanner;

public class A {
	public static void main(String[] args) throws FileNotFoundException{
		String DIR = "src/gcj2013/Pre/";
		String READ_FILE = null;
		String WRITE_FILE = null;

//				READ_FILE = "asmall.in";
//				WRITE_FILE = "asmall.out";
		READ_FILE = "alarge.in";
		WRITE_FILE = "alarge.out";

		if(READ_FILE != null){
			System.setIn(new BufferedInputStream(new FileInputStream(new File(DIR+READ_FILE))));
		}
		if(WRITE_FILE != null){
			System.setOut(new PrintStream(new File(DIR+WRITE_FILE)));
		}
		precalc();
		new A().run();
	}

	Scanner sc;
	static void precalc(){}

	void run(){
		sc = new Scanner(System.in);
		int caseCnt = sc.nextInt();
		for (int caseNum = 1; caseNum <= caseCnt; caseNum++) {
			System.out.print("Case #" + caseNum + ": ");
			solve();
			System.out.flush();
		}
	}
	
	void solve(){
		char[][] arr = new char[4][4];
		for(int i = 0 ; i < 4; i++){
			String s = sc.next();
			for(int j = 0 ; j < 4 ; j++){
				arr[i][j] = s.charAt(j);
			}
		}
//		sc.nextLine();
		boolean NC = false;
		outer : for(int i = 0 ; i < 4 ; i++)
			for(int j = 0 ; j < 4; j++)
				if(arr[i][j] == '.'){
					NC = true; break outer;
				}
		
		String ret = chk(arr);
		if(ret.equals("X")){
			System.out.println("X won");
		}else if(ret.equals("O")){
			System.out.println("O won");
		}else if(NC){
			System.out.println("Game has not completed");
		}else{
			System.out.println("Draw");
		}
	}
	int pos[][][] = {
			{{0, 0}, {0, 1}, {0, 2}, {0, 3}},
			{{1, 0}, {1, 1}, {1, 2}, {1, 3}},
			{{2, 0}, {2, 1}, {2, 2}, {2, 3}},
			{{3, 0}, {3, 1}, {3, 2}, {3, 3}},

			{{0, 0}, {1, 0}, {2, 0}, {3, 0}},
			{{0, 1}, {1, 1}, {2, 1}, {3, 1}},
			{{0, 2}, {1, 2}, {2, 2}, {3, 2}},
			{{0, 3}, {1, 3}, {2, 3}, {3, 3}},

			{{0, 3}, {1, 2}, {2, 1}, {3, 0}},
			{{0, 0}, {1, 1}, {2, 2}, {3, 3}},
	};
	String chk(char[][] arr){
		for(int[][] p : pos){
			char[] tmp = new char[4];
			for(int i = 0 ; i < 4 ; i++){
				tmp[i] = arr[p[i][0]][p[i][1]];
			}
			Arrays.sort(tmp);
			String s = "" + tmp[0] + tmp[1] + tmp[2] + tmp[3];
			if(s.equals("XXXX") || s.equals("TXXX")){
				return "X";
			}
			if(s.equals("OOOO") || s.equals("OOOT")){
				return "O";
			}
		}
		return "A";
	}
	void debug(Object... o){
		System.out.println(deepToString(o));
	}
}

/*
	
Output 

6
XXXT
....
OO..
....

XOXT
XXOO
OXOX
XXOO

XOX.
OX..
....
....

OOXX
OXXX
OX.T
O..O

XXXO
..O.
.O..
T...

OXXX
XO..
..O.
...O

Case #1: X won
Case #2: Draw
Case #3: Game has not completed
Case #4: O won
Case #5: O won
Case #6: O won
*/