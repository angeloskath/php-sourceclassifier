import java.io.*;
import java.util.*;

public class Main {
	
	static boolean verifyRow(int i, char[][] board, char x){
		if(board[i][0] == x && board[i][1] == x && board[i][2] ==x && board[i][3] == x) return true;
		return false;
	}
	
	static boolean verifyColumn(int i, char[][] board, char x){
		if(board[0][i] == x && board[1][i] == x && board[2][i] ==x && board[3][i] == x) return true;
		return false;
	}
	
	static boolean verifyDiag(char[][] board, char x){
		if(board[0][0] == x && board[1][1] == x && board[2][2] ==x && board[3][3] == x) return true;
		if(board[0][3] == x && board[1][2] == x && board[2][1] ==x && board[3][0] == x) return true;
		return false;
	}

	public static void main(String[] args) {
		Scanner in = null;
		PrintWriter out = null;
		try {
			in = new Scanner(new File("A-large.in"));
			out = new PrintWriter("output.txt");
		} catch (Exception e) {
			e.printStackTrace();
		}
		int T = in.nextInt();
		for(int c = 0; c < T; c++){
			out.print("Case #" + (c+1) + ": ");
			char[][] boardX = new char[4][4];
			for(int i = 0; i < 4; i++){
				boardX[i] = in.next().toCharArray();
			}
			char[][] boardO = new char[4][4];
			for(int i = 0; i < 4; i++){
				for(int j = 0; j < 4; j++){
					boardO[i][j] = boardX[i][j];
					if(boardX[i][j] == 'T') boardX[i][j] = 'X';
					if(boardO[i][j] == 'T') boardO[i][j] = 'O';
				}
			}
			boolean won = false;
			won = won || verifyDiag(boardX, 'X');
			for(int i = 0; i < 4; i++){
				won = won || verifyRow(i, boardX, 'X');
				won = won || verifyColumn(i, boardX, 'X');
			}
			if(won){
				out.println("X won");
				continue;				
			}
			won = false;
			won = won || verifyDiag(boardO, 'O');
			for(int i = 0; i < 4; i++){
				won = won || verifyRow(i, boardO, 'O');
				won = won || verifyColumn(i, boardO, 'O');
			}
			if(won){
				out.println("O won");
				continue;
			}
			boolean draw = true;
			for(int i = 0; i < 4; i++){
				for(int j = 0; j < 4; j++){
					if(boardO[i][j] == '.') draw = false;
				}
			}
			if(draw){
				out.println("Draw");
			}else{
				out.println("Game has not completed");
			}
		}
		in.close();
		out.close();
	}

}

