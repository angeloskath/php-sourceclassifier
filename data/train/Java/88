package qualificationRound;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.PrintWriter;
import java.util.Scanner;

public class ProblemA {

	/**
	 * @param args
	 * @throws FileNotFoundException 
	 */
	public static void main(String[] args) throws FileNotFoundException {
		Scanner sc = new Scanner(new File("qualificationRound/A-large.in"));
		PrintWriter out = new PrintWriter(new File("qualificationRound/out.txt"));

		int N = sc.nextInt();
		sc.nextLine();

		for (int tc = 1; tc <= N; tc++) {

			String[] b = new String[4];
			for (int i=0; i<4; i++)
				b[i] = sc.next();
			if (tc < N) {
				sc.nextLine();
				sc.nextLine();
			}

			String answer = "Game has not completed";
			boolean done = false;
			boolean draw = true;

			// horizontals
			for (int r=0; r<4 && !done; r++) {
				int T=0, O=0, X=0;
				for (int c=0; c<4; c++)
					if (b[r].charAt(c) == 'X')
						X++;
					else if (b[r].charAt(c) == 'O')
						O++;
					else if (b[r].charAt(c) == 'T')
						T++;
				if (X+T == 4) {
					done = true;
					draw = false;
					answer = "X won";
				} else if (O+T == 4) {
					done = true;
					draw = false;
					answer = "O won";
				} else if (O+X+T < 4) 
					draw = false;
			}

			// verticals
			for (int c=0; c<4 && !done; c++) {
				int T=0, O=0, X=0;
				for (int r=0; r<4; r++)
					if (b[r].charAt(c) == 'X')
						X++;
					else if (b[r].charAt(c) == 'O')
						O++;
					else if (b[r].charAt(c) == 'T')
						T++;
				if (X+T == 4) {
					done = true;
					draw = false;
					answer = "X won";
				} else if (O+T == 4) {
					done = true;
					draw = false;
					answer = "O won";
				} else if (O+X+T < 4) 
					draw = false;
			}

			//diagonal 1
			int T=0, O=0, X=0;
			for (int c=0; c<4 && !done; c++) 
				if (b[c].charAt(c) == 'X')
					X++;
				else if (b[c].charAt(c) == 'O')
					O++;
				else if (b[c].charAt(c) == 'T')
					T++;
			if (X+T == 4) {
				done = true;
				draw = false;
				answer = "X won";
			} else if (O+T == 4) {
				done = true;
				draw = false;
				answer = "O won";
			} else if (O+X+T < 4) 
				draw = false;

			// diagonal 2
			T=0; O=0; X=0;
			for (int c=0; c<4 && !done; c++) 
				if (b[3-c].charAt(c) == 'X')
					X++;
				else if (b[3-c].charAt(c) == 'O')
					O++;
				else if (b[3-c].charAt(c) == 'T')
					T++;
			if (X+T == 4) {
				done = true;
				draw = false;
				answer = "X won";
			} else if (O+T == 4) {
				done = true;
				draw = false;
				answer = "O won";
			} else if (O+X+T < 4) 
				draw = false;
			
			if (draw)
				answer = "Draw";
			
			printSolution(out, tc, answer);
		}
		out.close();
		sc.close();
	}

	public static void printSolution(PrintWriter out, int tc, String soln) {
		out.println("Case #"+tc+": "+soln);
		out.flush();
		System.out.println("Case #"+tc+": "+soln);

	}
}