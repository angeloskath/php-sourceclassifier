package qualify;

import java.util.Scanner;

public class A {

	private static String data [] = new String[4];
	private static int [][] directions = new int[][] {{1, -1}, {1, 0}, {1, 1}, {0, 1}};
	
	private static boolean checkPosition(int x, int y, int direction, char what) {
		if (directions[direction][0] > 0 && x != 0 || directions[direction][1] > 0 && y != 0 || directions[direction][1] < 0 && y != 3) return false;
		for(int i=0;i<4;i++) {
			if (data[y].charAt(x) != what && data[y].charAt(x) != 'T') return false;
			x += directions[direction][0];
			y += directions[direction][1];
		}
		return true;
	}
	
	private static boolean checkBoard(char what) {
		for(int i=0;i<directions.length;i++) {
			for(int j=0;j<4;j++) {
				if (checkPosition(0, j, i, what)) return true;
				if (checkPosition(j, 0, i, what)) return true;
			}
		}
		return false;
	}
	
	private static boolean emptySpace() {
		for(int i=0;i<4;i++) for(int j=0;j<4;j++)
			if (data[i].charAt(j) == '.') return true;
		return false;
	}
	
	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);
		int t = sc.nextInt();
		
		for (int i=0;i<t;i++) {
			for(int j=0;j<4;j++) data[j] = sc.next();
			
			boolean o = checkBoard('O');
			boolean x = checkBoard('X');
			boolean empty = emptySpace();
			
			String result = "";
			if (o) {
				result = x ? "Draw" : "O won";
			} else if (x) {
				result = "X won";
			} else {
				result = empty ? "Game has not completed" : "Draw";
			}
			
			System.out.println("Case #" + (i + 1) + ": " + result);
		}
		sc.close();
	}

}
