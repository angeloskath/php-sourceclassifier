using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.IO;

namespace GCJ
{
    class Program
    {

        class Solver
        {
            bool check(string[] s, char c)
            {
                for (int i = 0; i < 4; i++)
                {
                    if (s[i][0] == c && s[i][1] == c && s[i][2] == c && s[i][3] == c) return true;
                    if (s[0][i] == c && s[1][i] == c && s[2][i] == c && s[3][i] == c) return true;

                }
                if (s[0][0] == c && s[1][1] == c && s[2][2] == c && s[3][3] == c) return true;
                if (s[3][0] == c && s[2][1] == c && s[1][2] == c && s[0][3] == c) return true;
                return false;
            }
            public string Solve(MyIO io)
            {
                string[] s = new string[4];
                for (int i = 0; i < 4; i++) s[i] = io.NextString;
                bool ow = false, xw = false;
                string[] s1 = new string[4], s2 = new string[4];
                for (int i = 0; i < 4; i++)
                {
                    s1[i] = s[i].Replace('T', 'O');
                    s2[i] = s[i].Replace('T', 'X');
                }
                ow = check(s1, 'O'); xw = check(s2, 'X');
                StringBuilder sb = new StringBuilder();
                if (!ow && xw) return "X won\n";
                if (ow && !xw) return "O won\n";
                if (!ow && !xw)
                {
                    bool end = true;
                    for (int i = 0; i < 4; i++) for (int j = 0; j < 4; j++) if (s[i][j] == '.') end = false;
                    if (end) return "Draw\n";
                    else        return "Game has not completed\n";
                }
                return sb.ToString();
            }
        }
        static void Main(string[] args)
        {
            MyIO io = new MyIO(new StreamReader("in.txt"));
            int caseCount = io.NextInt;
            for (int i = 0; i < caseCount; i++)
            {
                Solver solve = new Solver();
                string res = solve.Solve(io);
                io.Write("Case #{0}: {1}", i + 1, res);
            }
            io.Flush();
        }
        class MyIO
        {
            TextReader reader;
            TextWriter writer = new StreamWriter("out.txt");
            string[] tokens;
            int pointer;
            public MyIO(TextReader rd)
            {
                reader = rd;
            }
            public string NextLine()
            {
                try
                {
                    return reader.ReadLine();
                }
                catch (IOException)
                {
                    return null;
                }
            }
            public string NextString
            {
                get
                {
                    try
                    {
                        while (tokens == null || pointer >= tokens.Length)
                        {
                            tokens = NextLine().Split(new char[] { ' ' }, System.StringSplitOptions.RemoveEmptyEntries);
                            pointer = 0;
                        }
                        return tokens[pointer++];
                    }
                    catch (IOException)
                    {
                        return null;
                    }
                }
            }
            public int NextInt
            {
                get { return int.Parse(NextString); }
            }
            public long NextLong
            {
                get { return long.Parse(NextString); }
            }
            public double NextDouble
            {
                get { return double.Parse(NextString); }
            }
            public bool Write(string format, params object[] args)
            {
                writer.Write(format, args);
                return true;
            }
            public void WriteLine(string format, params object[] args)
            {
                writer.WriteLine(format, args);
            }
            public void WriteLine(object obj)
            {
                writer.WriteLine("{0}", obj);
            }
            public void WriteLine()
            {
                writer.WriteLine();
            }
            public void Write(object obj)
            {
                writer.Write("{0}", obj);
            }
            public void Flush()
            {
                writer.Flush();
            }
        }
    }
}
