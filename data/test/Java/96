import java.io.File;
import java.io.FileNotFoundException;
import java.util.Scanner;


public class TicTacToeTomek {

	static Scanner scanner;
	
	public static void main(String[] args) throws FileNotFoundException {
		scanner = new Scanner(new File("A-large.in"));
		
		int caseCount = scanner.nextInt();
		for (int caseNumber = 1; caseNumber <= caseCount; caseNumber++) {
			String result = solve();
			System.out.format("Case #%d: %s%n", caseNumber, result);
		}
	}

	static String solve() {
		
		// init
		char[][] symbols = new char[4][];
		for (int y = 0; y < 4; y++) {
			symbols[y] = scanner.next().toCharArray();
		}
		
		// find winner

		// check rows
		for (int y = 0; y < 4; y++) {
			String rowResult = checkFourSymbols(symbols[y]);
			if (rowResult != null) {
				return rowResult;
			}
		}
		
		// check columns
		for (int x = 0; x < 4; x++) {
			char[] fourSymbols = new char[4];
			for (int y = 0; y < 4; y++) {
				fourSymbols[y] = symbols[y][x];
			}
			String columnResult = checkFourSymbols(fourSymbols);
			if (columnResult != null) {
				return columnResult;
			}
		}
		
		// check diagonal1
		char[] fourSymbols = new char[4];
		for (int xy = 0; xy < 4; xy++) {
			fourSymbols[xy] = symbols[xy][xy];
		}
		String diagonal1Result = checkFourSymbols(fourSymbols);
		if (diagonal1Result != null) {
			return diagonal1Result;
		}
		
		// check diagonal2
		for (int xy = 0; xy < 4; xy++) {
			fourSymbols[xy] = symbols[xy][3-xy];
		}
		String diagonal2Result = checkFourSymbols(fourSymbols);
		if (diagonal2Result != null) {
			return diagonal2Result;
		}
		
		// no one won, search for available spaces
		for (int y = 0; y<4; y++) {
			for (int x = 0; x<4; x++) {
				if (symbols[y][x] == '.') {
					return "Game has not completed";
				}
			}
		}

		return "Draw";
	}
	
	static String checkFourSymbols(char[] fourSymbols) {
		boolean xCanWin = true;
		boolean oCanWin = true;

		for (int i = 0; i < 4; i++) {
			switch (fourSymbols[i]) {
			case 'X':
				oCanWin = false;
				if (!xCanWin) {
					return null;
				}
				break;
			case 'O':
				xCanWin = false;
				if (!oCanWin) {
					return null;
				}
				break;
			case '.':
				return null;
			}
		}
		if (xCanWin) {
			return "X won";
		} else {
			return "O won";
		}
	}

}
