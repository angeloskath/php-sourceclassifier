using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.IO;

namespace probA
{
    class Program
    {
        static string Solve(string[] b)
        {
            bool finish = true;
            StringBuilder sb = new StringBuilder();
            List<string> l = new List<string>();

            // horizontal
            for (int i = 0; i < 4; ++i)
            {
                sb.Clear();
                for (int j = 0; j < 4; ++j)
                    sb.Append(b[i][j]);
                l.Add(sb.ToString());
            }

            // vertical
            for (int i = 0; i < 4; ++i)
            {
                sb.Clear();
                for (int j = 0; j < 4; ++j)
                    sb.Append(b[j][i]);
                l.Add(sb.ToString());
            }
            // diagonal
            sb.Clear();
            for (int j = 0; j < 4; ++j)
                sb.Append(b[j][j]);
            l.Add(sb.ToString());
            sb.Clear();
            for (int j = 0; j < 4; ++j)
                sb.Append(b[3 - j][j]);
            l.Add(sb.ToString());

            foreach (var s in l)
            {
                bool Owin = true, Xwin = true;
                Flag(s, ref finish, ref Owin, ref Xwin);
                if (Owin) return "O won";
                if (Xwin) return "X won";
            }

            if (finish) return "Draw";
            return "Game has not completed";
        }

        private static void Flag(string s, ref bool finish, ref bool Owin, ref bool Xwin)
        {
            for (int i = 0; i < 4; ++i)
            {
                switch (s[i])
                {
                    case 'O':
                        Xwin = false;
                        break;
                    case 'X':
                        Owin = false;
                        break;
                    case 'T':
                        break;
                    case '.':
                        Xwin = Owin = false;
                        finish = false;
                        return;
                }
            }
        }

        static void Main(string[] args)
        {
            int cases;
            //int[,] matrix = new int[4, 4];
            string[] board = new string[4];
            using (StreamReader sr = new StreamReader(args[0]))
            {
                cases = int.Parse(sr.ReadLine());
                for (int i = 0; i < cases; ++i)
                {
                    for (int r = 0; r < 4; ++r)
                    {
                        //string[] s = sr.ReadLine().Split(' ');
                        board[r] = sr.ReadLine();
                    }
                    sr.ReadLine(); // empty
                    System.Console.WriteLine(string.Format("Case #{0}: {1}", i + 1, Solve(board)));
                }
            }
        }
    }
}
