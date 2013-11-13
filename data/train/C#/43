using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;

namespace GoogleCodeJam
{
	internal class Template
	{
		private static readonly Scanner cin = new Scanner();
		private const string fileName = "A-large";

		private static void Main()
		{
			Console.SetIn(new StreamReader(string.Format(@"C:\GoogleCodeJam\{0}.in", fileName)));
			Console.SetOut(new StreamWriter(string.Format(@"C:\GoogleCodeJam\{0}.out", fileName)) { AutoFlush = true });
			var t = cin.NextInt();
			for (var c = 1; c <= t; c++)
			{
				Console.Write("Case #{0}: ", c);
				Solve();
			}
		}

		private static void Solve()
		{
			var game = new string[4];
			for (var i = 0; i < 4; i++)
			{
				game[i] = cin.Next();
			}

			for (var i = 0; i < 4; i++)
			{
				if (game[i].All(x => x == 'X' || x == 'T'))
				{
					Console.WriteLine("X won");
					return;
				}
				if (game[i].All(x => x == 'O' || x == 'T'))
				{
					Console.WriteLine("O won");
					return;
				} 
			}
			for (var i = 0; i < 4; i++)
			{
				if (game.SelectMany(x => x.Substring(i, 1)).All(x => x == 'X' || x == 'T'))
				{
					Console.WriteLine("X won");
					return;
				}
				if (game.SelectMany(x => x.Substring(i, 1)).All(x => x == 'O' || x == 'T'))
				{
					Console.WriteLine("O won");
					return;
				}
			}
			var diag = new List<char>();
			var diag2 = new List<char>();
			for (var i = 0; i < 4; i++)
			{
				diag.Add(game[i][i]);
				diag2.Add(game[i][3 - i]);
			}
			if (diag.All(x => x == 'X' || x == 'T'))
			{
				Console.WriteLine("X won");
				return;
			}
			if (diag.All(x => x == 'O' || x == 'T'))
			{
				Console.WriteLine("O won");
				return;
			}
			if (diag2.All(x => x == 'X' || x == 'T'))
			{
				Console.WriteLine("X won");
				return;
			}
			if (diag2.All(x => x == 'O' || x == 'T'))
			{
				Console.WriteLine("O won");
				return;
			}
			var all = game.SelectMany(x => x);
			if (all.Contains('.'))
			{
				Console.WriteLine("Game has not completed");
			}
			else
			{
				Console.WriteLine("Draw");
			}
		}
	}

	internal class Scanner
	{
		private string[] s = new string[0];
		private int i;
		private readonly char[] cs = new[] { ' ' };

		public string Next()
		{
			if (i < s.Length) return s[i++];
			var line = Console.ReadLine() ?? string.Empty;
			if (line == string.Empty)
			{
				return Next();
			}
			s = line.Split(cs, StringSplitOptions.RemoveEmptyEntries);
			i = 1;
			return s.First();
		}

		public double NextDouble()
		{
			return double.Parse(Next());
		}

		public int NextInt()
		{
			return int.Parse(Next());
		}

		public long NextLong()
		{
			return long.Parse(Next());
		}
	}
}