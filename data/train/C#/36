using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.IO;
using System.Diagnostics;

namespace Google.CodeJam2013
{
#if _ONLINE_JUDGE_
	[OnlineJudge.Task("CodeJam13 01A")]
#endif
	class Task01A
	{
		private class Solver
		{
			private InputTokenizer input = new InputTokenizer();
			private TextWriter output = Console.Out;

			public void Solve()
			{
				int T;
				input.Line().Read(out T);

				for (int _T = 0; _T < T; ++_T)
				{
					string[] grid = new string[4];
					input.Line().Read(out grid[0])
							 .Line().Read(out grid[1])
							 .Line().Read(out grid[2])
							 .Line().Read(out grid[3])
							 .Line();

					int[] xStart = new int[] { 0, 0, 0, 0, 0, 1, 2, 3, 0,  0 };
					int[] yStart = new int[] { 0, 1, 2, 3, 0, 0, 0, 0, 0,  3 };
					int[] dx     = new int[] { 1, 1, 1, 1, 0, 0, 0, 0, 1,  1 };
					int[] dy     = new int[] { 0, 0, 0, 0, 1, 1, 1, 1, 1, -1 };

					bool wonX = false, wonO = false;

					for (int i = 0; i < xStart.Length; ++i)
					{
						int Ts = 0, Xs = 0, Os = 0, x = xStart[i], y = yStart[i];
						for (int j = 0; j < 4; ++j, x += dx[i], y += dy[i])
							switch (grid[y][x])
							{
								case 'X': ++Xs; break;
								case 'O': ++Os; break;
								case 'T': ++Ts; break;
							}

						if (Xs == 4 || Xs + Ts == 4) wonX = true;
						if (Os == 4 || Os + Ts == 4) wonO = true;
					}

					if (wonX && wonO != false) throw new Exception();

					int filled = 0;
					for (int i = 0; i < 4; ++i) filled += grid[i].Count(c => c != '.');

					string result;

					if (wonX)
						result = "X won";
					else if (wonO)
						result = "O won";
					else if (filled == 16)
						result = "Draw";
					else
						result = "Game has not completed";
					
					output.WriteLine("Case #{0}: {1}", _T + 1, result);
				}
			}
		}

		#region
		public static void Main()
		{
			var obj = new Solver();
			obj.Solve();
		}

		private class InputTokenizer
		{
			private List<string> _tokens = new List<string>();
			private int _offset = 0;

			public InputTokenizer()
			{
			}

			public InputTokenizer String(String s)
			{
				_tokens.AddRange(s.Split(new char[] { ' ', '\n', '\t', '\r' }, StringSplitOptions.RemoveEmptyEntries));
				return this;
			}

			public InputTokenizer Line()
			{
				return String(Console.In.ReadLine());
			}

			public String ReadLine()
			{
				return Console.In.ReadLine();
			}

			public InputTokenizer Read(out int v)
			{
				v = int.Parse(_tokens[_offset++]);
				return this;
			}

			public InputTokenizer Read(int n, out int[] v)
			{
				v = new int[n];
				for (int i = 0; i < n; ++i) Read(out v[i]);
				return this;
			}

			public InputTokenizer Read(out long v)
			{
				v = long.Parse(_tokens[_offset++]);
				return this;
			}

			public InputTokenizer Read(int n, out long[] v)
			{
				v = new long[n];
				for (int i = 0; i < n; ++i) Read(out v[i]);
				return this;
			}

			public InputTokenizer Read(out ulong v)
			{
				v = ulong.Parse(_tokens[_offset++]);
				return this;
			}

			public InputTokenizer Read(int n, out ulong[] v)
			{
				v = new ulong[n];
				for (int i = 0; i < n; ++i) Read(out v[i]);
				return this;
			}

			public InputTokenizer Read(out double v)
			{
				v = double.Parse(_tokens[_offset++].Replace('.', ','));
				return this;
			}

			public InputTokenizer Read(int n, out double[] v)
			{
				v = new double[n];
				for (int i = 0; i < n; ++i) Read(out v[i]);
				return this;
			}

			public InputTokenizer Read(out string v)
			{
				v = _tokens[_offset++];
				return this;
			}

			public InputTokenizer Read(int n, out string[] v)
			{
				v = new string[n];
				for (int i = 0; i < n; ++i) Read(out v[i]);
				return this;
			}
		}
		#endregion
	}
}
