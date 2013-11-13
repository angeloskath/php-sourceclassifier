using System;

namespace Application {
	public class gcj_a {
		string[] board = new string[4];
		int emptyCells = 0;
		
		public void setBoard(int i, string s) {
			this.board[i] = s;
			this.emptyCells += s.Split('.').Length - 1;
		}
		
		public void printBoard() {
			Console.WriteLine(emptyCells);
			for(int j = 0; j < 4; j++) {
				Console.Write(board[j][0]);	
				Console.Write(board[j][1]);
				Console.Write(board[j][2]);
				Console.WriteLine(board[j][3]);
			}
		}
		
		public bool isWinningPositionFor(char P) {
			int diagCount1=0, diagCount2 = 0;
			for(int i = 0; i < 4; i++) {
				int rowCount = 0,colCount = 0;
				for(int j = 0; j < 4; j++) {
					if(this.board[i][j] == P || this.board[i][j] == 'T') rowCount++;	
					if(this.board[j][i] == P || this.board[j][i] == 'T') colCount++;
				}
				if(this.board[i][i] == P || this.board[i][i] == 'T') diagCount1++;
				if(this.board[i][3 - i] == P || this.board[i][3 - i] == 'T') diagCount2++;
				if(rowCount == 4 || colCount == 4 || diagCount1 == 4 || diagCount2 == 4) return true;
			}			
			return false;
		}
		
		public string boardStatus() {
			if(isWinningPositionFor('X')) return "X won";
			if(isWinningPositionFor('O')) return "O won";
			if(this.emptyCells == 0) return "Draw";
			return "Game has not completed";
		}
		
		public static void Main() {
			int t,i,j;
			t = int.Parse(Console.ReadLine());
			//Console.WriteLine(t);
			for(i = 1; i <= t; i++) {
				gcj_a g = new gcj_a();
				for(j = 0; j < 4; j++) {
					g.setBoard(j, Console.ReadLine());
				}
				//g.printBoard();
				Console.WriteLine("Case #{0}: {1}",i,g.boardStatus());
				Console.ReadLine();
			}
		}
	}
}

