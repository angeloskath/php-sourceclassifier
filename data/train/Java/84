import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.FileReader;
import java.io.FileWriter;

public class Main {
	public BufferedWriter writer;
	public BufferedReader reader;

	public void checkState(String[] board, int k) throws Exception {
		writer.write("Case #" + k + ": ");
		boolean isComplete=true;
		for (int i = 0; i < 4; i++) {
			int cntX = 0, cntO = 0, cntT = 0;
			for (int j = 0; j < 4; j++) {
				switch (board[i].charAt(j)) {
				case 'X':
					cntX++;
					break;
				case 'O':
					cntO++;
					break;
				case 'T':
					cntT++;
					break;
				default:
					isComplete=false;
				}
			}
			if(cntX==4 || (cntX==3 && cntT==1)){
				writer.write("X won");
				writer.newLine();
				return;
			}
			if(cntO==4 || (cntO==3 && cntT==1)){
				writer.write("O won");
				writer.newLine();
				return;
			}
		}
		for (int j = 0; j < 4; j++) {
			int cntX = 0, cntO = 0, cntT = 0;
			for (int i = 0; i < 4; i++) {
				switch (board[i].charAt(j)) {
				case 'X':
					cntX++;
					break;
				case 'O':
					cntO++;
					break;
				case 'T':
					cntT++;
					break;
				default:
					isComplete=false;
				}
			}
			if(cntX==4 || (cntX==3 && cntT==1)){
				writer.write("X won");
				writer.newLine();
				return;
			}
			if(cntO==4 || (cntO==3 && cntT==1)){
				writer.write("O won");
				writer.newLine();
				return;
			}
		}
		int cntX=0,cntO=0,cntT=0;
		for(int i=0;i<4;i++){
			switch (board[i].charAt(i)) {
			case 'X':
				cntX++;
				break;
			case 'O':
				cntO++;
				break;
			case 'T':
				cntT++;
				break;
			default:
				isComplete=false;
			}
		}
		if(cntX==4 || (cntX==3 && cntT==1)){
			writer.write("X won");
			writer.newLine();
			return;
		}
		if(cntO==4 || (cntO==3 && cntT==1)){
			writer.write("O won");
			writer.newLine();
			return;
		}
		cntX=0;
		cntO=0;
		cntT=0;
		for(int i=0;i<4;i++){
			switch (board[3-i].charAt(i)) {
			case 'X':
				cntX++;
				break;
			case 'O':
				cntO++;
				break;
			case 'T':
				cntT++;
				break;
			default:
				isComplete=false;
			}
		}
		if(cntX==4 || (cntX==3 && cntT==1)){
			writer.write("X won");
			writer.newLine();
			return;
		}
		if(cntO==4 || (cntO==3 && cntT==1)){
			writer.write("O won");
			writer.newLine();
			return;
		}
		if(isComplete){
			writer.write("Draw");
			writer.newLine();
			return;
		}
		writer.write("Game has not completed");
		writer.newLine();
	}

	public static void main(String[] args) throws Exception {
		Main m = new Main();
		m.reader = new BufferedReader(new FileReader("A-large.in"));
		m.writer = new BufferedWriter(new FileWriter("out.txt"));
		String line = m.reader.readLine();
		String[] board = new String[4];
		int T = Integer.parseInt(line);
		int k=1;
		while (k<=T) {
			for (int i = 0; i < 4; i++) {
				board[i] = m.reader.readLine();
			}
			m.reader.readLine();
			m.checkState(board, k);
			k++;
		}
		m.reader.close();
		m.writer.close();
	}
}
