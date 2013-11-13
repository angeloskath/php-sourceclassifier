using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace BaseApp
{
    class Program
    {
        static void Main(string[] args)
        {
            string input = @"d:\Work\Current\CodeJam\1\A-large.in";
            string output = @"d:\Work\Current\CodeJam\1\A-large.out";

            using (var sin = new StreamReader(input))
            {
                using (var sout = new StreamWriter(output, false))
                {
                    var s = sin.ReadLine();
                    var N = long.Parse(s);
                    for (long i = 1; i <= N; i++)
                    {
                        string result = ReadOneInputAndReturnResult(sin);
                        sout.WriteLine("Case #{0}: {1}", i, result);
                    }
                }
            }
        }

        private static string ReadOneInputAndReturnResult(StreamReader sin)
        {
            var r1 = "X won";
            var r2 = "O won";
            var r3 = "Draw";
            var r4 = "Game has not completed";

            string inp;
            var sb = new StringBuilder();
            for (int i = 0; i < 4; i++)
            {
                sb.Append(sin.ReadLine().Substring(0, 4));
            }
            inp = sb.ToString();
            //Console.WriteLine(inp);
            sin.ReadLine();

            // process
            // find winner
            bool hasEmpty = false;
            var combos = new[]
                {
                    new[] { 0, 1, 2, 3 },
                    new[] { 4, 5, 6, 7 },
                    new[] { 8, 9, 10, 11 },
                    new[] { 12, 13, 14, 15 },
                    new[] { 0, 4, 8, 12 },
                    new[] { 1, 5, 9, 13 },
                    new[] { 2, 6, 10, 14 },
                    new[] { 3, 7, 11, 15 },
                    new[] { 0, 5, 10, 15 },
                    new[] { 3, 6, 9, 12 },
                };
            foreach (var combo in combos)
            {
                char? r = CheckCombo(inp, combo);
                if (r.HasValue)
                {
                    if (r == 'O')
                        return r2;
                    if (r == 'X')
                        return r1;
                }
            }
            // no winner
            if (inp.IndexOf('.') >= 0)
                return r4;
            else return r3;
        }

        private static char? CheckCombo(string inp, int[] p)
        {
            int i = 0;
            char x = inp[p[i++]];
            if (x == 'T')
            {
                x = inp[p[i++]];
            }

            while (true)
            {
                if (i > 3) return x;
                char cc = inp[p[i]];
                if (cc == '.') return null;
                if (cc != x && cc != 'T') return null;
                i++;
            }
        }
    }
}
