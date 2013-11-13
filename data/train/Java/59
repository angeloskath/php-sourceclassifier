import java.io.*;
import java.util.*;

class tictactoe {
	public static void main(String[] args) throws IOException {
		BufferedReader br = new BufferedReader(new FileReader("tictactoe.in"));
		PrintWriter out = new PrintWriter(new BufferedWriter(new FileWriter("tictactoe.out")));
		int T = Integer.parseInt(br.readLine());
		for (int i = 0; i < T; i++) {
			char[][] game = new char[4][4];
			for (int j = 0; j < 4; j++) {
				String s = br.readLine();
				for (int k = 0; k < 4; k++) {
					game[j][k] = s.charAt(k);
				}
			}
			String answer = "Game has not completed";
			//row
			char[] arr = {game[0][0], game[1][0], game[2][0], game[3][0]};
			int res = check(arr);
			if (res == 2) answer = "X won";
			if (res == 1) answer = "O won";
			char[] arr2 = {game[0][1], game[1][1], game[2][1], game[3][1]};
			res = check(arr2);
			if (res == 2) answer = "X won";
			if (res == 1) answer = "O won";
			char[] arr3 = {game[0][2], game[1][2], game[2][2], game[3][2]};
			res = check(arr3);
			if (res == 2) answer = "X won";
			if (res == 1) answer = "O won";
			char[] arr4 = {game[0][3], game[1][3], game[2][3], game[3][3]};
			res = check(arr4);
			if (res == 2) answer = "X won";
			if (res == 1) answer = "O won";
			//col
			char[] arr5 = {game[0][0], game[0][1], game[0][2], game[0][3]};
			res = check(arr5);
			if (res == 2) answer = "X won";
			if (res == 1) answer = "O won";
			char[] arr6 = {game[1][0], game[1][1], game[1][2], game[1][3]};
			res = check(arr6);
			if (res == 2) answer = "X won";
			if (res == 1) answer = "O won";
			char[] arr7 = {game[2][0], game[2][1], game[2][2], game[2][3]};
			res = check(arr7);
			if (res == 2) answer = "X won";
			if (res == 1) answer = "O won";
			char[] arr8 = {game[3][0], game[3][1], game[3][2], game[3][3]};
			res = check(arr8);
			if (res == 2) answer = "X won";
			if (res == 1) answer = "O won";
			//diag
			char[] arr9 = {game[0][0], game[1][1], game[2][2], game[3][3]};
			res = check(arr9);
			if (res == 2) answer = "X won";
			if (res == 1) answer = "O won";
			char[] arr10 = {game[3][0], game[2][1], game[1][2], game[0][3]};
			res = check(arr10);
			if (res == 2) answer = "X won";
			if (res == 1) answer = "O won";
			if (full(game) && !answer.equals("X won") && !answer.equals("O won")) answer = "Draw";
			out.println("Case #" + (i+1) + ": " + answer);
			br.readLine();
		}
		out.close();
		System.exit(0);
	}
	public static int check(char[] c) {
		if (c[0] == 'X' && c[1] == 'X' && c[2] == 'X' && c[3] == 'X') return 2;
		if (c[0] == 'T' && c[1] == 'X' && c[2] == 'X' && c[3] == 'X') return 2;
		if (c[0] == 'X' && c[1] == 'T' && c[2] == 'X' && c[3] == 'X') return 2;
		if (c[0] == 'X' && c[1] == 'X' && c[2] == 'T' && c[3] == 'X') return 2;
		if (c[0] == 'X' && c[1] == 'X' && c[2] == 'X' && c[3] == 'T') return 2;
		if (c[0] == 'O' && c[1] == 'O' && c[2] == 'O' && c[3] == 'O') return 1;
		if (c[0] == 'T' && c[1] == 'O' && c[2] == 'O' && c[3] == 'O') return 1;
		if (c[0] == 'O' && c[1] == 'T' && c[2] == 'O' && c[3] == 'O') return 1;
		if (c[0] == 'O' && c[1] == 'O' && c[2] == 'T' && c[3] == 'O') return 1;
		if (c[0] == 'O' && c[1] == 'O' && c[2] == 'O' && c[3] == 'T') return 1; 
		return 0;
	}
	public static boolean full(char[][] game) {
		for (int i = 0; i < 4; i++) {
			for (int j = 0; j < 4; j++) {
				if (game[i][j] == '.') return false;
			}
		}
		return true;
	}
}

