import java.util.Scanner;

public class TicTacToeTomek {
	
	private String solve(String[] board) {
		boolean isDraw = true;
		// check horizontal
		for (int i = 0; i < 4; i++) {
			boolean hasX = false;
			boolean hasO = false;
			boolean hasEmpty = false;
			for (int j = 0; j < 4; j++) {
				if (board[i].charAt(j) == 'X')
					hasX = true;
				if (board[i].charAt(j) == 'O')
					hasO = true;
				if (board[i].charAt(j) == '.')
					hasEmpty = true;
			}
			if (hasEmpty)
				isDraw = false;
			if (hasX && (!hasO) && (!hasEmpty))
				return "X won";
			if (hasO && (!hasX) && (!hasEmpty))
				return "O won";
		}
		// check vertical
		for (int i = 0; i < 4; i++) {
			boolean hasX = false;
			boolean hasO = false;
			boolean hasEmpty = false;
			for (int j = 0; j < 4; j++) {
				if (board[j].charAt(i) == 'X')
					hasX = true;
				if (board[j].charAt(i) == 'O')
					hasO = true;
				if (board[j].charAt(i) == '.')
					hasEmpty = true;
			}
			if (hasX && (!hasO) && (!hasEmpty))
				return "X won";
			if (hasO && (!hasX) && (!hasEmpty))
				return "O won";
		}
		// check diagonal
		boolean hasX = false;
		boolean hasO = false;
		boolean hasEmpty = false;
		for (int i = 0; i < 4; i++) {
			if (board[i].charAt(i) == 'X')
				hasX = true;
			if (board[i].charAt(i) == 'O')
				hasO = true;
			if (board[i].charAt(i) == '.')
				hasEmpty = true;
		}
		if (hasX && (!hasO) && (!hasEmpty))
			return "X won";
		if (hasO && (!hasX) && (!hasEmpty))
			return "O won";
		hasX = false;
		hasO = false;
		hasEmpty = false;
		for (int i = 0; i < 4; i++) {
			if (board[i].charAt(3 - i) == 'X')
				hasX = true;
			if (board[i].charAt(3 - i) == 'O')
				hasO = true;
			if (board[i].charAt(3 - i) == '.')
				hasEmpty = true;
		}
		if (hasX && (!hasO) && (!hasEmpty))
			return "X won";
		if (hasO && (!hasX) && (!hasEmpty))
			return "O won";
		if (isDraw)
			return "Draw";
		else
			return "Game has not completed";
	}

	public static void main(String[] args) {
		Scanner scanner = new Scanner(System.in);
		int T = scanner.nextInt();
		for (int i = 0; i < T; i++) {
			scanner.nextLine();
			String[] board = new String[4];
			for (int j = 0; j < 4; j++)
				board[j] = scanner.nextLine();
			System.out.println("Case #" + (i + 1) + ": " + new TicTacToeTomek().solve(board));
		}
	}
}
