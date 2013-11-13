using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace _2013QualifyA
{
	class Program
	{
		static void Main(string[] args)
		{
			int tcCount = int.Parse(Console.ReadLine());
			for (int tcIndex = 1; tcIndex <= tcCount; tcIndex++)
			{
				char[,] tictacArray = new char[4,4];
				for (int r = 0; r < 4; r++)
				{
					string line = Console.ReadLine();
					for (int c=0;c<4;c++)
						tictacArray[r, c] = line[c];
				}

				Console.ReadLine();

				// Output
				Console.WriteLine("Case #{0}: {1}", tcIndex, GameStatus(tictacArray));
			}
		}

		static string GameStatus(char[,] tictacArray)
		{
			string status = "Draw";

			int xDiag1Count = 0;
			int oDiag1Count = 0;
			int tDiag1Count = 0;

			int xDiag2Count = 0;
			int oDiag2Count = 0;
			int tDiag2Count = 0;

			for (int d = 0; d < 4; d++)
			{
				switch (tictacArray[d, d])
				{
					case 'X':
						xDiag1Count++;
						break;
					case 'O':
						oDiag1Count++;
						break;
					case 'T':
						tDiag1Count++;
						break;
				}

				switch (tictacArray[d, 3-d])
				{
					case 'X':
						xDiag2Count++;
						break;
					case 'O':
						oDiag2Count++;
						break;
					case 'T':
						tDiag2Count++;
						break;
				}
			}

			if ((xDiag1Count + tDiag1Count == 4) || (xDiag2Count + tDiag2Count == 4))
				return "X won";
			else if ((oDiag1Count + tDiag1Count == 4) || (oDiag2Count + tDiag2Count == 4))
				return "O won";

			if ((xDiag1Count + oDiag1Count + tDiag1Count < 4) || (xDiag2Count + oDiag2Count + tDiag2Count < 4))
				status = "Game has not completed";

			for (int i = 0; i < 4; i++)
			{
				int xRowCount = 0;
				int oRowCount = 0;
				int tRowCount = 0;

				int xColCount = 0;
				int oColCount = 0;
				int tColCount = 0;

				for (int j = 0; j < 4; j++)
				{
					switch (tictacArray[i, j])
					{
						case 'X':
							xRowCount++;
							break;
						case 'O':
							oRowCount++;
							break;
						case 'T':
							tRowCount++;
							break;
					}

					switch (tictacArray[j, i])
					{
						case 'X':
							xColCount++;
							break;
						case 'O':
							oColCount++;
							break;
						case 'T':
							tColCount++;
							break;
					}
				}

				if ((xRowCount + tRowCount == 4) || (xColCount + tColCount == 4))
					return "X won";
				else if ((oRowCount + tRowCount == 4) || (oColCount + tColCount == 4))
					return "O won";

				if ((xRowCount + oRowCount + tRowCount < 4) || (xColCount + oColCount + tColCount < 4))
					status = "Game has not completed";
			}

			return status;
		}
	}
}
