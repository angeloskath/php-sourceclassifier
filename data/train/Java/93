package cn.zhoushuyan.codejam._2013.qualification;

import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.FileReader;
import java.io.FileWriter;

public class A {
	public static void main(String[] args) throws Exception {
		// TODO input file path
		String filePath = "/Users/Alen/Documents/CodeJam/2013/Qualification/A-Large.in";

		BufferedReader br = new BufferedReader(new FileReader(filePath));
		String outFile = filePath.substring(0, filePath.lastIndexOf('.'))
				+ ".out";
		BufferedWriter bw = new BufferedWriter(new FileWriter(outFile));
		
		String line = br.readLine();
		int t = Integer.valueOf(line);
		for (int i = 0; i < t; i++) {
			// TODO main logical
			// ...
			final int w = 4;
			final int h = 4;
			int[][] t4 = new int[w][h];
			boolean complete = true;
			
			for (int j = 0; j < t4.length; j++) {
				line = br.readLine();
				for (int j2 = 0; j2 < t4[j].length; j2++) {
					switch (line.charAt(j2)) {
					case 'X':
						t4[j][j2] = 1;
						break;
					case 'O':
						t4[j][j2] = 2;
						break;
					case 'T':
						t4[j][j2] = 3;
						break;
					default:
						t4[j][j2] = 0;
						complete = false;
						break;
					}
				}
			}
			line = br.readLine();
			
			int result = 0x0;
			result = t4[0][0] & t4[1][1] & t4[2][2] & t4[3][3];
			if (result == 0) {
				result = t4[0][3] & t4[1][2] & t4[2][1] & t4[3][0];
			}
			if (result == 0) {
				for (int j = 0; j < w; j++) {
					result = t4[j][0] & t4[j][1] & t4[j][2] & t4[j][3];
					if (result != 0) {
						break;
					} else {
						result = t4[0][j] & t4[1][j] & t4[2][j] & t4[3][j];
						if (result != 0) break;
					}
				}
			}
			
			String resultString = "";
			if ((result & 1) > 0) resultString = "X won";
			else if ((result & 2) > 0) resultString = "O won";
			else if (complete) resultString = "Draw";
			else resultString = "Game has not completed";
			
			// TODO output
			bw.write(String.format("Case #%d: %s\r\n", i + 1, resultString));
		}

		bw.flush();
		bw.close();
		br.close();

	}
}
