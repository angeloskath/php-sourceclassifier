import java.io.BufferedWriter;
import java.nio.charset.Charset;
import java.nio.file.Files;
import java.nio.file.Path;
import java.nio.file.Paths;
import java.util.HashMap;
import java.util.HashSet;
import java.util.Map;
import java.util.Scanner;
import java.util.Set;

public class A_large_0 {
	private String solveCase(Scanner reader) {
		char[][] board = new char[4][4];
		boolean dotFound = false;

		//Read the board
		for (int row=0; row<4;row++) {
			board[row] = reader.nextLine().toCharArray();
			for (int col=0;col<4;col++) {
				dotFound = dotFound || (board[row][col]=='.');
			}
		}
		reader.nextLine();

		//Check for winders
		int[][][] combinations = {
			{{0,0},{0,1},{0,2},{0,3}},
			{{1,0},{1,1},{1,2},{1,3}},
			{{2,0},{2,1},{2,2},{2,3}},
			{{3,0},{3,1},{3,2},{3,3}},

			{{0,0},{1,0},{2,0},{3,0}},
			{{0,1},{1,1},{2,1},{3,1}},
			{{0,2},{1,2},{2,2},{3,2}},
			{{0,3},{1,3},{2,3},{3,3}},

			{{0,0},{1,1},{2,2},{3,3}},
			{{0,3},{1,2},{2,1},{3,0}}
		};

		String winner = null;
		for (int i=0;i<combinations.length;i++) {
			winner = findWinner(board, combinations[i]);
			if (winner != null) {
				break;
			}
		}

		if (winner!=null) {
			return winner;
		}
		else if (!dotFound) {
			return "Draw";
		}
		else {
			return "Game has not completed";
		}
	}

	private String findWinner(char[][] board, int[][] combination) {
		boolean winnerX=true;
		boolean winnerO=true;

		for (int i=0;i<combination.length;i++) {
			char field = board[combination[i][0]][combination[i][1]];
			winnerX = winnerX && (field=='X' || field=='T');
			winnerO = winnerO && (field=='O' ||	field=='T');
		}

		if (winnerX) {
			return "X won";
		}
		else if (winnerO) {
			return "O won";
		}
		else {
			return null;
		}
	}

	private void solve(Scanner reader, BufferedWriter writer) throws Exception {
		long cases_T = new Long(reader.nextLine());

		for (long case_T = 1; case_T<=cases_T; case_T++) {
			writeOutput(writer, case_T, solveCase(reader));
		}
	}

	private void run() throws Exception {
		Path inputFile = Paths.get(getClass().getSimpleName()+".in");
		Path outputFile = Paths.get(getClass().getSimpleName()+".out");

		Charset charset = Charset.forName("US-ASCII");
		try (
				Scanner reader = new Scanner(Files.newBufferedReader(inputFile, charset));
				BufferedWriter writer = Files.newBufferedWriter(outputFile, charset)) {
			solve(reader,writer);
		}
	}

	private void writeOutput(BufferedWriter writer, long case_T, String output) throws Exception {
		String result = String.format("Case #%d: %s",  case_T, output);

		System.out.println(result);
		writer.write(result+"\n");
	}

	public static void main(String... args) throws Exception {
		new A_large_0().run();
	}
}
