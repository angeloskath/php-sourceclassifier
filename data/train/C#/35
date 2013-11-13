using System;
using System.Collections.Generic;
using System.IO;

namespace Test
{
    public class Program
    {
		private static void Main()
		{
			Solve(Console.In, Console.Out);
		}

		public static void Solve(TextReader input, TextWriter output)
		{
			int t = Convert.ToInt32(input.ReadLine());
			Dictionary<char, string> consts = new Dictionary<char, string>();

			consts['.'] = "Game has not completed";
			consts['D'] = "Draw";
			consts['X'] = "X won";
			consts['O'] = "O won";

			for (int z = 1; z <= t; z++)
			{
				string[] r = new string[4];
				char a = 'D';
				
				for (int i = 0; i < 4; i++)
				{
					r[i] = input.ReadLine();
					if (r[i].IndexOf('.') >= 0) a = '.';
				}

				input.ReadLine();

				foreach (char w in "XO".ToCharArray())
				{
					bool res = false;

					for (int i = 0; i < 4; i++)
					{
						res = true;

						for (int j = 0; j < 4; j++)
							res = res && ((r[i][j] == w) || (r[i][j] == 'T'));

						if (res) break;
					}

					if (!res)
					{
						for (int i = 0; i < 4; i++)
						{
							res = true;

							for (int j = 0; j < 4; j++)
								res = res && ((r[j][i] == w) || (r[j][i] == 'T'));

							if (res) break;
						}
					}

					if (!res)
					{
						res = true;

						for (int i = 0; i < 4; i++)
							res = res && ((r[i][i] == w) || (r[i][i] == 'T'));
					}

					if (!res)
					{
						res = true;

						for (int i = 0; i < 4; i++)
							res = res && ((r[i][3 - i] == w) || (r[i][3 - i] == 'T'));
					}

					if (res)
					{
						a = w;
						break;
					}
				}

				output.WriteLine("Case #{0}: {1}", z, consts[a]);
			}
		}
    }
}