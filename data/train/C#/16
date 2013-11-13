using System;
using System.Collections.Generic;
using System.Diagnostics;
using System.Globalization;
using System.IO;
using System.Linq;
using System.Numerics;
using System.Text;

namespace Qualification
{
	class A : ICodeJamSolver
	{
		int testNum;

		char[,] map;

		public void ReadCase(int caseNumber, StreamReader reader)
		{
			testNum = caseNumber;

			map = new char[4, 4];
			for (int i = 0; i < 4; i++)
			{
				var line = reader.ReadLine().ToCharArray();
				for (int j = 0; j < 4; j++)
				{
					map[i, j] = line[j];
				}
			}
			reader.ReadLine();
		}

		public string SolveCase()
		{
			var x = HasFour('X');
			var o = HasFour('O');
			var result = (x & o)
				? "Draw"
				: x
					? "X won"
					: o
						? "O won"
						: IsComplete()
							? "Draw"
							: "Game has not completed";

			return "Case #" + testNum + ": " + result.ToString(CultureInfo.InvariantCulture);
		}


		private bool IsComplete()
		{
			for (int i = 0; i < 4; i++)
			{
				for (int j = 0; j < 4; j++)
				{
					if (map[i, j] == '.') return false;
				}
			}
			return true;
		}

		private bool HasFour(char player)
		{
			for (int i = 0; i < 4; i++)
			{
				bool allOk1 = true;
				bool allOk2 = true;
				for (int j = 0; j < 4; j++)
				{
					allOk1 &= map[i, j] == player || map[i, j] == 'T';
					allOk2 &= map[j, i] == player || map[j, i] == 'T';
				}
				if (allOk1 || allOk2) return true;
			}
			{
				bool allOk1 = true;
				bool allOk2 = true;
				for (int i = 0; i < 4; i++)
				{
					allOk1 &= map[i, i] == player || map[i, i] == 'T';
					allOk2 &= map[3 - i, i] == player || map[3 - i, i] == 'T';
				}
				return allOk1 || allOk2;
			}
		}


		///////////////////////
		static void MainZ(string[] args)
		{
			using (var reader = new StreamReader(args[0]))
			{
				int numTests = int.Parse(reader.ReadLine());

				for (int i = 0; i < numTests; i++)
				{
					var solver = (ICodeJamSolver)Activator.CreateInstance(System.Reflection.MethodBase.GetCurrentMethod().DeclaringType);
					solver.ReadCase(i + 1, reader);
					var result = solver.SolveCase();
					Console.WriteLine(result);
				}
			}
		}
	}
}
