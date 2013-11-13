using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace QualificationRound2013 {
	class TaskA {
		private enum Result {
			OWin,
			XWin,
			NotCompleted,
			Draw,
		}

		private static Result Test(params char[] row) {
			if(row.Contains('.')) {
				return Result.NotCompleted;
			}
			var containsX = row.Contains('X');
			var containsO = row.Contains('O');
			if(containsX && containsO) {
				return Result.Draw;
			}
			if(containsX) {
				return Result.XWin;
			}
			return Result.OWin;
		}

		public static void Run() {
			int number = int.Parse(Console.ReadLine());

			for(int i = 1; i <= number; i++) {
				char[,] board = new char[4, 4];
				for(int j=0; j<4; j++) {
					var line = Console.ReadLine();
					for(int k=0; k<4; k++) {
						board[j, k] = line[k];
					}
				}

				bool notcompleted = false;
				bool xwin = false;
				bool owin = false;
				Action<Result> processTest = result => {
					switch(result) {
						case Result.XWin:
							xwin = true;
							return;
						case Result.OWin:
							owin = true;
							return;
						case Result.NotCompleted:
							notcompleted = true;
							return;
					}
				};
				for(int j=0; j<4; j++) {
					processTest(Test(board[j, 0], board[j, 1], board[j, 2], board[j, 3]));
					processTest(Test(board[0, j], board[1, j], board[2, j], board[3, j]));
				}
				processTest(Test(board[0, 0], board[1, 1], board[2, 2], board[3, 3]));
				processTest(Test(board[0, 3], board[1, 2], board[2, 1], board[3, 0]));

				Console.Write("Case #" + i + ": ");
				if(xwin && owin) {
					Console.WriteLine("Draw");
				} else if(xwin) {
					Console.WriteLine("X won");
				} else if(owin) {
					Console.WriteLine("O won");
				} else if(notcompleted) {
					Console.WriteLine("Game has not completed");
				} else {
					Console.WriteLine("Draw");
				}
				Console.ReadLine();
			}
		}
	}
}
