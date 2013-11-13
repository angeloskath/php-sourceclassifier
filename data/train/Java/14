package qual2013;

import java.io.File;
import java.io.PrintWriter;
import java.util.Scanner;

public class A
{

	public static void main(String[] args) throws Exception {
		Scanner in = new Scanner(System.in);
		//PrintWriter out = new PrintWriter(System.out);
		PrintWriter out = new PrintWriter(new File("A.out"));
		
		final int K = 4;
		
		for (int t = Integer.valueOf(in.nextLine()), cs = 1; t > 0; t--, cs++) {
			out.print("Case #" + cs + ": ");
			
			int tx = -1, ty = -1, cnt = 0;
			int[][] map = new int[K][K];
			for (int i = 0; i < K; i++) {
				char[] line = in.nextLine().toCharArray();
				for (int j = 0; j < K; j++, cnt++)
					if (line[j] == 'X') map[i][j] = 1;
					else if (line[j] == 'O') map[i][j] = -1;
					else if (line[j] == 'T') {
						tx = i;
						ty = j;
					}
					else cnt--;
			}
			in.nextLine();
			
			int ans = 0;
			if (tx == -1 && ty == -1) {
				ans = get(map);
			}
			else {
				map[tx][ty] = 1;
				ans = get(map);
				if (ans == 0) {
					map[tx][ty] = -1;
					ans = get(map);
				}
			}
			
			if (ans == 1) out.println("X won");
			else if (ans == -1) out.println("O won");
			else if (cnt == K*K) out.println("Draw");
			else out.println("Game has not completed");
		}

		out.flush();
	}

	static int get(int[][] map) {
		int k = map.length;
		for (int i = 0; i < k; i++) {
			int sum = 0;
			for (int j = 0; j < k; j++) sum += map[i][j];
			if (sum == k) return 1;
			else if (sum == -k) return -1;
		}
		for (int i = 0; i < k; i++) {
			int sum = 0;
			for (int j = 0; j < k; j++) sum += map[j][i];
			if (sum == k) return 1;
			else if (sum == -k) return -1;
		}
		{
			int sum = 0;
			for (int i = 0; i < k; i++) sum += map[i][i];
			if (sum == k) return 1;
			else if (sum == -k) return -1;
		}
		{
			int sum = 0;
			for (int i = 0; i < k; i++) sum += map[i][k-i-1];
			if (sum == k) return 1;
			else if (sum == -k) return -1;
		}
		return 0;
	}
}
