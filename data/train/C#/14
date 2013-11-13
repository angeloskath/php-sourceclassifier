using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace Q_TTTT
{
    class Program
    {
        static void Main(string[] args)
        {
            int n = int.Parse(Console.ReadLine());
            for (int i = 0; i < n; i++)
            {
                string[] board = ReadCase();
                Console.WriteLine(string.Format("Case #{0}: {1}", i + 1, new TTT(board).Status));
            }

        }

        static string[] ReadCase()
        {
            string[] ret = new string[4];
            int i=0;
            ret[i++] = Console.ReadLine();
            ret[i++] = Console.ReadLine();
            ret[i++] = Console.ReadLine();
            ret[i++] = Console.ReadLine();
            Console.ReadLine();
            return ret;
        }

        
    }

    class TTT
    {
        private char[][] unfold;
        public TTT (string[] input)
	    {
            var board = input.Select(x => x.Select(c => c).ToArray()).ToArray();
            unfold =
                input.Select(x => x.Select(c => c).ToArray())
                .Union(new[] { input.Select((x, i) => x[i]).ToArray() })
                .Union(Rotate(input))
                .Union(new[] { Rotate(input).Select((x, i) => x[i]).ToArray() })
                .ToArray();
	    }

        private char[][] Rotate(string[] input)
        {
            char[][] ret = new char[4][];
            for (int i = 0; i < ret.Length; i++)
                ret[i] = new char[4];

            for (int i = 0; i < 4; ++i)
                for (int j = 0; j < 4; ++j)
                    ret[i][j] = input[4 - j - 1][i];
            return ret;
        }

        private bool IsWon(char c)
        {
            List<Tuple<int,int>> Ts = new List<Tuple<int,int>>();

            for (int iy = 0; iy < unfold.Length; iy++)
                for (int ix = 0; ix < unfold[iy].Length; ix++)
                    if (unfold[iy][ix] == 'T')
                    {
                        Ts.Add(Tuple.Create(ix, iy));
                        unfold[iy][ix] = c;
                    }

            bool result = unfold.Any(a => a.All(x => x == c));

            foreach (var t in Ts)
                unfold[t.Item2][t.Item1] = 'T';

            return result;
        }

        private bool AnyEmptyCell()
        {
            return unfold.Any(a => a.Any(c => c == '.'));
        }

        public string Status
        {
            get
            {
                string wonTemplate = "{0} won";
                char c = 'X';
                if (IsWon(c)) return string.Format(wonTemplate, c);
                if (IsWon(c = 'O')) return string.Format(wonTemplate, c);
                if (AnyEmptyCell()) return "Game has not completed";
                return "Draw";
            }
        }
    }
}
