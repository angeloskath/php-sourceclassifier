using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Text;

namespace GCJ2013
{
    class Program
    {
        //private const string FILE_NAME = "../../test.txt";
        //private const string FILE_NAME = "../../small.txt";
        private const string FILE_NAME = "../../large.txt";

        private const string OUTPUT = "../../outQA.txt";

        static void Main(string[] args)
        {
            var eval = new Eval();
            var res = "";

            // Test Case
            if ((res = eval.eval(new[] { "XXXT", "....", "OO..", "....", "", "", "", }, 0)) != Eval.XWON) throw new Exception(res);
            if ((res = eval.eval(new[] { "XOXT", "XXOO", "OXOX", "XXOO", "", "", "", }, 0)) != Eval.DRAW) throw new Exception(res);
            //if ((res = eval.eval(new[] { "", "", "", "", }, 0)) != "") throw new Exception(res);
            //if ((res = eval.eval(new[] { "", "", "", "", }, 0)) != "") throw new Exception(res);
            //return;

            File.Delete(OUTPUT);
            var lines = File.ReadAllLines(FILE_NAME);
            var T = int.Parse(lines[0]);

            for (int t = 0; t < T; t++)
            {
                res = eval.eval(lines, t * 5 + 1);

                File.AppendAllText(OUTPUT, string.Format("Case #{0}: {1}\n", t + 1, res));
                Console.Write(DateTime.Now.ToShortTimeString() + "." + DateTime.Now.Second + string.Format(" Case #{0}: {1}\n", t + 1, res));
            }
        }

        private class Eval
        {
            private string[] b = new string[4];

            public const string XWON = "X won", OWON = "O won", DRAW = "Draw", GHNC = "Game has not completed";
            private const char X = 'X', O = 'O', T = 'T', D = 'D', DOT = '.';

            private string[] lines;
            private int t;

            public string eval(string[] lines, int t)
            {
                this.lines = lines;
                this.t = t;
                string s = small();
                //string l = large();
                //if (s != l) throw new Exception(s + " != " + l);
                return s.ToString();
            }

            /// <summary>工夫する</summary>
            private string large()
            {
                parse();
                return "";
            }

            /// <summary>まともにやる</summary>
            private string small()
            {
                parse();
                var res = judge();
                if (res == X) return XWON;
                if (res == O) return OWON;
                if (res == D) return DRAW;
                return GHNC;
            }

            /// <summary>勝利判定</summary>
            private char judge()
            {
                int xc = 0, oc = 0;

                // 横
                for (int y = 0; y < 4; y++)
                {
                    xc = 0; oc = 0;
                    for (int x = 0; x < 4; x++)
                    {
                        var byx = b[y][x];
                        if (byx == X || byx == T) { xc++; }
                        if (byx == O || byx == T) { oc++; }
                    }
                    if (xc == 4) return X;
                    if (oc == 4) return O;
                }

                // 縦
                for (int x = 0; x < 4; x++)
                {
                    xc = 0; oc = 0;
                    for (int y = 0; y < 4; y++)
                    {
                        var byx = b[y][x];
                        if (byx == X || byx == T) { xc++; }
                        if (byx == O || byx == T) { oc++; }
                    }
                    if (xc == 4) return X;
                    if (oc == 4) return O;
                }

                // 斜め
                {
                    // 左上から
                    xc = 0; oc = 0;
                    for (int xy = 0; xy < 4; xy++)
                    {
                        var byx = b[xy][xy];
                        if (byx == X || byx == T) { xc++; }
                        if (byx == O || byx == T) { oc++; }
                    }
                    if (xc == 4) return X;
                    if (oc == 4) return O;
                    // 右上から
                    xc = 0; oc = 0;
                    for (int xy = 0; xy < 4; xy++)
                    {
                        var byx = b[xy][3 - xy];
                        if (byx == X || byx == T) { xc++; }
                        if (byx == O || byx == T) { oc++; }
                    }
                    if (xc == 4) return X;
                    if (oc == 4) return O;
                }

                // Draw判定
                for (int y = 0; y < 4; y++)
                {
                    for (int x = 0; x < 4; x++)
                    {
                        if (b[y][x] == DOT) return DOT;
                    }
                }

                return D;
            }

            /// <summary>変数初期化</summary>
            private void parse()
            {
                for (int i = 0; i < 4; i++)
                {
                    b[i] = lines[t + i];
                }
            }
        }
    }
}
