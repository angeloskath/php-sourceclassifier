import java.io.File;
import java.io.FileInputStream;
import java.io.PrintStream;
import java.util.Scanner;

/*
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

 */
public class A {
	A() throws Exception{
		System.setIn(new FileInputStream(new File("A-large.in")));
		System.setOut(new PrintStream(new File("A-large.out")));
		Scanner in = new Scanner(System.in);
		int tests = in.nextInt();
		for(int t = 1; t<=tests; t++){
			char[][] grid = new char[4][];
			boolean filled = true;
			for(int i =0; i<4; i++){
				String next = in.next();
				if(next.contains("."))
					filled = false;
				grid[i] = next.toCharArray();
			}
			char winner = '-';
			//horz
			hLoop: for(int i = 0; i<4 && winner == '-'; i++){
				boolean foundT = false;
				char plyr = '-';
				for(int j = 0; j<4; j++){
					if(grid[i][j] == 'T'){
						if(foundT) continue hLoop;
						else foundT = true;
					}else{
						if(plyr == '-') plyr = grid[i][j];
						if(grid[i][j] != plyr) continue hLoop;
					}
					if(plyr == '.')
						continue hLoop;
				}
				winner = plyr;
			}
			//vert
			vLoop: for(int i = 0; i<4 && winner == '-'; i++){
				boolean foundT = false;
				char plyr = '-';
				for(int j = 0; j<4; j++){
					if(grid[j][i] == 'T'){
						if(foundT) continue vLoop;
						else foundT = true;
					}else{
						if(plyr == '-') plyr = grid[j][i];
						if(grid[j][i] != plyr) continue vLoop;
					}
					if(plyr == '.')
						continue vLoop;
				}
				winner = plyr;
			}
			//dag
			d1Loop: for(int i = 0; i<1 && winner == '-'; i++){
				boolean foundT = false;
				char plyr = '-';
				for(int j = 0; j<4; j++){
					if(grid[j][j] == 'T'){
						if(foundT) continue d1Loop;
						else foundT = true;
					}else{
						if(plyr == '-') plyr = grid[j][j];
						if(grid[j][j] != plyr) continue d1Loop;
					}
					if(plyr == '.')
						continue d1Loop;
				}
				winner = plyr;
			}
			d2Loop: for(int i = 0; i<1 && winner == '-'; i++){
				boolean foundT = false;
				char plyr = '-';
				for(int j = 0; j<4; j++){
					if(grid[3-j][j] == 'T'){
						if(foundT) continue d2Loop;
						else foundT = true;
					}else{
						if(plyr == '-') plyr = grid[3-j][j];
						if(grid[3-j][j] != plyr) continue d2Loop;
					}
					if(plyr == '.')
						continue d2Loop;
				}
				winner = plyr;
			}
			System.out.printf("Case #%d: ", t);
			if(winner != '-'){
				System.out.printf("%c won\n", winner);
			}else System.out.printf("%s\n", filled ? "Draw" : "Game has not completed");
		}
	}
	public static void main(String[] args) throws Exception{
		new A();
	}
}
