using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.IO;

namespace GCJ
{
    class TicTac
    {
        private static bool xWins, oWins;
        public static string Result(StreamReader sr)
        {
            var g = new char[4,4];
            bool movesPossible = false;
            xWins = false; oWins = false; 

            for(int y=0; y<4; y++)
            {
                var line = sr.ReadLine().Trim();
                for(int x=0; x<4; x++)
                {
                    g[x,y] = line[x];
                    if (g[x, y] == '.') movesPossible = true;
                }
            }
            sr.ReadLine();


            //row/column
            for (int y = 0; y < 4; y++)
            {
                String row = String.Empty, column=String.Empty;
                for (int x = 0; x < 4; x++)
                {
                    row += g[x, y];
                    column += g[y, x];
                }
                Check(row);
                Check(column);
            }

            //diagonal
            String diag1 = String.Empty, diag2 = String.Empty;
            for (int y = 0; y < 4; y++)
            {
                diag1 += g[y, y];
                diag2 += g[y, 3 - y];
            }
            Check(diag1);
            Check(diag2);

            if (xWins) return "X won";
            else if (oWins) return "O won";
            else if (movesPossible) return "Game has not completed";
            return "Draw";
        }

        private static void Check(String s)
        {
            if (String.IsNullOrEmpty(s) || s.Contains('.')) return;
            if (s.Contains('X') && !s.Contains('O')) xWins = true;
            if (s.Contains('O') && !s.Contains('X')) oWins = true;
        }
    }

    class ProblemA
    {
        public ProblemA(StreamReader sr)
        {
            using (StreamWriter sw = new StreamWriter("testOutput.txt"))
            Convert.ToInt32(sr.ReadLine().Trim()).Times(i =>
            {
                var output = String.Format("Case #{0}: {1}", i + 1, TicTac.Result(sr));
                Console.Out.WriteLine(output);
                sw.WriteLine(output);
            });
        }
    }
}
