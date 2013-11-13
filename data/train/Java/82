import java.util.*;

public class Main {
    public static void main(String args[]) {
		Scanner s = new Scanner(System.in);
		
		int t = s.nextInt(), c = 1;
		String grid[] = new String[4];
		while (c <= t) {			
			for (int i = 0; i < grid.length; i++) {
				grid[i] = s.next();
			}
			
	    	result = Status.DRAW;
			checkStatus(grid);
			
			System.out.print("Case #" + (c++) + ": ");
			switch (result) {
				case XWON:
					System.out.println("X won");
					break;
				case OWON:
					System.out.println("O won");
					break;
				case UNKNOWN:
					System.out.println("Game has not completed");
					break;
				case DRAW:
					System.out.println("Draw");
					break;
				default:
					break;
			}
		}
	}
    
    public static enum Status { UNKNOWN, DRAW, XWON, OWON};
    public static Status result;
    public static void checkStatus(String grid[]) {
    	boolean isDone;
    	
    	// rows
    	for (int i = 0; i < grid.length; i++) {
    		 isDone = checkFour(grid[i].charAt(0), grid[i].charAt(1), 
    				grid[i].charAt(2), grid[i].charAt(3));
    		 if (isDone) return;
    	}
    	
    	// cols
    	for (int i = 0; i < grid[0].length(); i++) {
    		isDone = checkFour(grid[0].charAt(i), grid[1].charAt(i), 
    				grid[2].charAt(i), grid[3].charAt(i));
    		if (isDone) return;
    	}
    	
    	isDone = checkFour(grid[0].charAt(0), grid[1].charAt(1), 
				grid[2].charAt(2), grid[3].charAt(3));
		if (isDone) return;
		
		isDone = checkFour(grid[0].charAt(3), grid[1].charAt(2), 
				grid[2].charAt(1), grid[3].charAt(0));
		if (isDone) return;
    }
    
    public static boolean hasx, haso, hast, hasd;
    public static boolean checkFour(char c1, char c2, char c3, char c4) {
    	hasx = haso = hast = hasd = false;
    	checkOne(c1);
    	checkOne(c2);
    	checkOne(c3);
    	checkOne(c4);
    	
    	Status temp;
    	if (hasd) 
    		temp = Status.UNKNOWN;
    	else if (hasx) 
    		temp = haso ? Status.DRAW : Status.XWON;
    	else 
    		temp = haso ? Status.OWON : Status.DRAW;
    	
		switch (temp) {
			case XWON:
			case OWON:
				result = temp;
				return true;
			case UNKNOWN:
				result = Status.UNKNOWN;
				break;
			case DRAW:
			default:
				break;
		}
		return false;
    }
    
    public static void checkOne(char c) {
    	if (c == 'X') hasx = true;
    	if (c == 'O') haso = true;
    	if (c == 'T') hast = true;
    	if (c == '.') hasd = true;    	
    }
}