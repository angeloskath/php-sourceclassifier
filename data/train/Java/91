package codejam;

import java.io.BufferedReader;
import java.io.File;
import java.io.FileReader;
import java.io.PrintWriter;

public class A {
	private static class LineStats {
		final int xCount;
		final int oCount;
		final int tCount;
		final int emptyCount;

		public LineStats(int xCount, int oCount, int tCount, int emptyCount) {
			this.xCount = xCount;
			this.oCount = oCount;
			this.tCount = tCount;
			this.emptyCount = emptyCount;
		}
	}
	
	private static enum Result {
		X_WON,
		O_WON,
		DRAW,
		INCOMPLETE
	}
	
	private static LineStats checkRow (String[] gameState, int index) {
		
		int xCount = 0, oCount = 0, tCount = 0, emptyCount = 0;
		
		for (int i=0; i<4; i++) {
			switch (gameState[index].charAt(i)) {
			case 'X' : xCount++; break;
			case 'O' : oCount++; break;
			case '.' : emptyCount++; break;
			case 'T' : tCount++; break;
			default: throw new RuntimeException ("Unexpected char " + gameState[index].charAt(i));
			}
		}
		
		return new LineStats(xCount, oCount, tCount, emptyCount);
	}
	
	private static LineStats checkCol (String[] gameState, int index) {
		int xCount = 0, oCount = 0, tCount = 0, emptyCount = 0;
		
		for (int i=0; i<4; i++) {
			switch (gameState[i].charAt(index)) {
			case 'X' : xCount++; break;
			case 'O' : oCount++; break;
			case '.' : emptyCount++; break;
			case 'T' : tCount++; break;
			default: throw new RuntimeException ("Unexpected char " + gameState[index].charAt(i));
			}
		}
		
		return new LineStats(xCount, oCount, tCount, emptyCount);
	}
	
	private static LineStats checkDiag1(String[] gameState) {
		int xCount = 0, oCount = 0, tCount = 0, emptyCount = 0;
		
		for (int i=0; i<4; i++) {
			switch (gameState[i].charAt(i)) {
			case 'X' : xCount++; break;
			case 'O' : oCount++; break;
			case '.' : emptyCount++; break;
			case 'T' : tCount++; break;
			default: throw new RuntimeException ("Unexpected char " + gameState[i].charAt(i));
			}
		}
		
		return new LineStats(xCount, oCount, tCount, emptyCount);
	}
	
	private static LineStats checkDiag2(String[] gameState) {
		int xCount = 0, oCount = 0, tCount = 0, emptyCount = 0;
		
		for (int i=0; i<4; i++) {
			switch (gameState[i].charAt(3-i)) {
			case 'X' : xCount++; break;
			case 'O' : oCount++; break;
			case '.' : emptyCount++; break;
			case 'T' : tCount++; break;
			default: throw new RuntimeException ("Unexpected char " + gameState[i].charAt(3-i));
			}
		}
		
		return new LineStats(xCount, oCount, tCount, emptyCount);
	}
	
	
	private static Result check(String[] gameState) {
		int totalEmpty = 0;
		
		for (int i=0; i<4; i++) {
			LineStats stats = checkRow(gameState, i);
			
			if ((stats.xCount + stats.tCount) == 4)
				return Result.X_WON;
			else if ((stats.oCount + stats.tCount) == 4)
				return Result.O_WON;
			
			totalEmpty += stats.emptyCount;
		}
		
		for (int i=0; i<4; i++) {
			LineStats stats = checkCol(gameState, i);

			if ((stats.xCount + stats.tCount) == 4)
				return Result.X_WON;
			else if ((stats.oCount + stats.tCount) == 4)
				return Result.O_WON;
		}
		
		LineStats stats = checkDiag1(gameState);
		
		if ((stats.xCount + stats.tCount) == 4)
			return Result.X_WON;
		else if ((stats.oCount + stats.tCount) == 4)
			return Result.O_WON;
		
		stats = checkDiag2(gameState);
		
		if ((stats.xCount + stats.tCount) == 4)
			return Result.X_WON;
		else if ((stats.oCount + stats.tCount) == 4)
			return Result.O_WON;
		
		if (totalEmpty == 0)
			return Result.DRAW;
		else
			return Result.INCOMPLETE;
	}

	public static void main(String[] args) {
		
		try {
			File in = new File("E:\\Dev\\CodeJam2013\\Qual\\io\\A-large.in");
			File out = new File("E:\\Dev\\CodeJam2013\\Qual\\io\\A-large.out");
			
			BufferedReader reader = new BufferedReader(new FileReader(in));
			PrintWriter writer = new PrintWriter(out);
			
			int n = Integer.parseInt(reader.readLine());
			
			for (int i=1; i<=n; i++) {
				String[] gameState = new String[4];
				
				for (int j=0; j<4; j++)
					gameState[j] = reader.readLine();
				
				reader.readLine();
				
				
				writer.print ("Case #" + i + ": ");
				
				switch (check(gameState)) {
				case X_WON: writer.println ("X won"); break;
				case O_WON: writer.println ("O won"); break;
				case DRAW: writer.println ("Draw"); break;
				case INCOMPLETE: writer.println ("Game has not completed"); break;
				}
				
			}
			
			reader.close();
			writer.close();
			
		} catch (Throwable e) {
			throw new RuntimeException(e);
		}
	}
}
