import java.util.*;
public class QualProblemA {
	public static void main(String[] args){
		Scanner br = new Scanner(System.in);
		int t = br.nextInt();
		for(int c = 1;c<=t;c++){
			char[][] board = new char[4][4];
			for(int i = 0;i<4;i++){
				String line = br.next();
				for(int j = 0;j<4;j++){
					board[i][j] = line.charAt(j);
				}
			}
			int res = 2;
			//Check if not finished
			for(int i = 0;i<4;i++){
				for(int j = 0;j<4;j++){
					if(board[i][j] == '.'){
						res = -1;
					}
				}
			}
			if(check(board, 'X')){
				res = 0;
			}
			if(check(board, 'O')){
				if(res == 0){
					System.out.println("Error");
				}
				res = 1;
			}
			if(res == -1){
				System.out.println("Case #"+c+": Game has not completed");
			}
			else if(res == 2){
				System.out.println("Case #"+c+": Draw");
			}
			else if(res == 0){
				System.out.println("Case #"+c+": X won");
			}
			else{
				System.out.println("Case #"+c+": O won");
			}
		}
	}
	public static boolean check(char[][] board, char c){
		for(int i = 0;i<4;i++){
			int count = 0;
			for(int j = 0;j<4;j++){
				if(board[i][j] == 'T' || board[i][j] == c){
					count++;
				}
			}
			if(count == 4){
				return true;
			}
			count = 0;
			for(int j = 0;j<4;j++){
				if(board[j][i] == 'T' || board[j][i] == c){
					count++;
				}
			}
			if(count == 4){
				return true;
			}
		}
		int count = 0;
		int count2 = 0;
		for(int i = 0;i<4;i++){
			if(board[i][i] == 'T' || board[i][i] == c){
				count++;
			}
			if(board[i][4-i-1] == 'T' || board[i][4-i-1] == c){
				count2++;
			}
		}
		if(count == 4 || count2 == 4){
			return true;
		}
		
		return false;
	}
}
