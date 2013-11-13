package qualification;

import java.util.Scanner;

public class A {

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);
		
		int T = sc.nextInt();
		t:
		for (int i = 1; i <= T; i++) {
			String A[] = new String[4];
			for (int j = 0; j < A.length; j++) {
				A[j] = sc.next("[XO.T]{4}"); 
			}
			
			char chars[] = new char[]{'X','O'};
			for (int j = 0; j < chars.length; j++) {
				
				for (int j2 = 0; j2 < 4; j2++) {
					int cc = 0;
					for (int k = 0; k < 4; k++) {
						char c = A[j2].charAt(k);
						if (c == chars[j] || c == 'T') {
							++cc;
						}
					}
					if (cc == 4) {
						System.out.println("Case #" + i + ": " + chars[j] + " won");
						continue t;
					}
				}
				
				for (int j2 = 0; j2 < 4; j2++) {
					int cc = 0;
					for (int k = 0; k < 4; k++) {
						char c = A[k].charAt(j2);
						if (c == chars[j] || c == 'T') {
							++cc;
						}
					}
					if (cc == 4) {
						System.out.println("Case #" + i + ": " + chars[j] + " won");
						continue t;
					}
				}
				
				int cc = 0;
				for (int j2 = 0; j2 < 4; j2++) {
					char c = A[j2].charAt(j2);
					if (c == chars[j] || c == 'T') {
						++cc;
					}
				}
				if (cc == 4) {
					System.out.println("Case #" + i + ": " + chars[j] + " won");
					continue t;
				}
				
				cc = 0;
				for (int j2 = 0; j2 < 4; j2++) {
					char c = A[j2].charAt(3-j2);
					if (c == chars[j] || c == 'T') {
						++cc;
					}
				}
				if (cc == 4) {
					System.out.println("Case #" + i + ": " + chars[j] + " won");
					continue t;
				}
			}
			
			for (int k = 0; k < 4; k++) {
				for (int k2 = 0; k2 < 4; k2++) {
					if (A[k].charAt(k2) == '.') {
						System.out.println("Case #" + i + ": Game has not completed");
						continue t;
					}
				}
			}
			
			System.out.println("Case #" + i + ": Draw");
		}
	}

}
