import java.io.File;
import java.io.IOException;
import java.util.List;
import java.util.Scanner;

import com.google.common.base.Charsets;
import com.google.common.collect.Lists;
import com.google.common.io.Files;

/*
 * using Google Guava (http://code.google.com/p/guava-libraries/)
 */

public class TicTacToeTomek {
	public static void main(String[] args) throws IOException {
		String content = Files.toString(new File(args[0]), Charsets.UTF_8);
		Scanner scanner = new Scanner(content);
		
		StringBuilder output = new StringBuilder();
		int testCases = scanner.nextInt();
		for(int i=1; i<=testCases; i++) {
			String solution = "Case #"+i+": "+solve(scanner)+"\n";
			System.err.print(solution);
			output.append(solution);
		}
		Files.write(output.toString(), new File("out.out"), Charsets.UTF_8);
	}

	private static enum RowGameState {
		X_WINS,
		O_WINS,
		NO_CLEAR_WINNER
	}
	
	private static String solve(Scanner scanner) {
		char[][] board = readBoard(scanner);
		RowGameState gameState;
		for (int i=0; i<4; i++) {
			gameState = solveRow(Lists.newArrayList(board[i][0], board[i][1], board[i][2], board[i][3]));
			if (gameState == RowGameState.X_WINS) return "X won";
			if (gameState == RowGameState.O_WINS) return "O won";
			
			gameState = solveRow(Lists.newArrayList(board[0][i], board[1][i], board[2][i], board[3][i]));
			if (gameState == RowGameState.X_WINS) return "X won";
			if (gameState == RowGameState.O_WINS) return "O won";
		}
		gameState = solveRow(Lists.newArrayList(board[0][0], board[1][1], board[2][2], board[3][3]));
		if (gameState == RowGameState.X_WINS) return "X won";
		if (gameState == RowGameState.O_WINS) return "O won";
		gameState = solveRow(Lists.newArrayList(board[0][3], board[1][2], board[2][1], board[3][0]));
		if (gameState == RowGameState.X_WINS) return "X won";
		if (gameState == RowGameState.O_WINS) return "O won";
		
		if(containsOpenSpace(board)) return "Game has not completed";
		
		return "Draw";
	}

	private static boolean containsOpenSpace(char[][] board) {
		for(char[] row:board) for(char c:row) if(c=='.') return true;
		return false;
	}

	private static RowGameState solveRow(List<Character> row) {
		if (row.contains('.')) return RowGameState.NO_CLEAR_WINNER;
		if (row.contains('X') && row.contains('O')) return RowGameState.NO_CLEAR_WINNER;
		if (row.contains('X')) return RowGameState.X_WINS;
		return RowGameState.O_WINS;
	}

	private static char[][] readBoard(Scanner scanner) {
		char[][] board = new char[4][4];
		for(int i=0; i<4; i++) {
			board[i] = scanner.next().toCharArray();
		}
		return board;
	}
	
}
