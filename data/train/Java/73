import java.io.BufferedReader;
import java.io.InputStreamReader;


public class R0_1 {
	
	private static final String[] gameStatus = new String[]{"Game has not completed", "Draw", "X won", "O won"};	  
	private static int result = -1;
	
	public static void main(String[] args) {
		
		try {
		
			BufferedReader bf = new BufferedReader(new InputStreamReader(System.in));
			
			int T = Integer.parseInt(bf.readLine());
			
			for (int i=0; i<T; i++) {
			
				String[] tictac = new String[4];
				result = -1;
				
				for (int j=0; j<4; j++) {
					tictac[j] = bf.readLine();
					if (tictac[j].contains("."))
						result = 0; // Incomplete
				}
				bf.readLine();
				
				if (result == -1) result = 1; //Draw
				
				for (int x=0; x<4; x++) {
					
					if (hasResult (tictac[x])) break;
					
					String strTemp = "";
					for (int y=0; y<4; y++)
						strTemp += tictac[y].charAt(x);
					
					if (hasResult (strTemp)) break;
					
					strTemp = "";
					if (x == 0)
						for (int y=0; y<4; y++)
							strTemp += tictac[y].charAt(y);

					if (hasResult (strTemp)) break;
					
					strTemp = "";
					if (x == 3)
						for (int y=0; y<4; y++)
							strTemp += tictac[y].charAt(3-y);
					
					if (hasResult (strTemp)) break;
					
				}
				
				System.out.println("Case #" + (i+1) + ": " + gameStatus[result]);
			}
			
		} catch (Exception e) {
			e.printStackTrace();
		}
		
		
	}
	
	private static boolean hasResult(String series) {
		
		if (("XXXX").equals(series.replace("T", "X"))) {
			result = 2; //X
			return true;
		} else if (("OOOO").equals(series.replace("T", "O"))) {
			result = 3; //O
			return true;
		}
		
		return false;
		
	}
	
}
