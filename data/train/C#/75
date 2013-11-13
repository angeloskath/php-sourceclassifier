    using System;
    using System.Collections.Generic;
    using System.IO;
    using System.Linq;
    using System.Globalization;
    using System.Threading;

    namespace AcmSolution
    {
        internal class Program
        {
            private static void Main(string[] args)
            {
                Thread.CurrentThread.CurrentCulture = CultureInfo.InvariantCulture;
    #if !ACM_HOME
                Do();
    #else
                var tmp = Console.In;
                Console.SetIn(new StreamReader("A/A-large (1).in"));
                Console.SetOut(new StreamWriter("A/a-large.out"));
                var tests = GetInt();

                for (int i = 1; i <= tests; ++i)
                {
                    W(string.Format("Case #{0}: ", i));
                    Do();
                    if (i != tests) WL("");
                }
                Console.In.Close();
                Console.Out.Close();
                Console.SetIn(tmp);
                //Console.ReadLine();
#endif
            }

            private static int[,] a;
            private static int[,] b;

            private static bool Check(int c)
            {
                bool res = false;

                for (int i = 0; i < 4; ++i)
                {
                    res |= a[i, 0] == a[i, 1] && a[i, 2] == a[i, 3] && a[i, 0] == a[i, 2] && a[i, 0] == c;
                    res |= a[0, i] == a[1, i] && a[2, i] == a[3, i] && a[0, i] == a[2, i] && a[0, i] == c;
                }

                res |= a[0, 0] == a[1, 1] && a[2, 2] == a[3, 3] && a[0, 0] == a[2, 2] && a[0, 0] == c;
                res |= a[3, 0] == a[2, 1] && a[1, 2] == a[0, 3] && a[3, 0] == a[1, 2] && a[3, 0] == c;

                return res;
            }

            static void FillA(int c)
            {
                a = new int[4, 4];

                for (int i = 0; i < 4; i++)
                    for (int j = 0; j < 4; j++)
                    {
                        if (b[i, j] == 3)
                            a[i, j] = c;
                        else
                            a[i, j] = b[i, j];
                    }
            }

            private static void Do()
            {
                b = new int[4, 4];

                bool notFinished = false;

                for (int i = 0; i < 4; ++i)
                {
                    var s = GetStr();
                    for (int j = 0; j < 4; ++j)
                    {
                        if (s[j] == '.')
                            notFinished = true;
                        else if (s[j] == 'X')
                            b[i, j] = 1;
                        else
                            b[i, j] = s[j] == 'O' ? 2 : 3;
                    }
                }

                FillA(1);

                if (Check(1))
                    W("X won");
                else
                {
                    FillA(2);

                    if (Check(2))
                        W("O won");
                    else if (notFinished)
                        W("Game has not completed");
                    else
                        W("Draw");
                }

                GetStr();
            }

            #region Utils
            private const double Epsilon = 0.00000001;

            private static string GetStr()
            {
                return Console.ReadLine();
            }

            private static string[] GetStrs()
            {
                return GetStr().Split(new[] { ' ', '\t' }, StringSplitOptions.RemoveEmptyEntries);
            }

            private static string[] GetStrs(int cnt)
            {
                var s = new string[cnt];
                for (var i = 0; i < cnt; ++i)
                    s[i] = GetStr();
                return s;
            }

            private static int GetInt()
            {
                return int.Parse(GetStr());
            }

            private static void GetInts(out int a, out int b)
            {
                var q = GetInts();
                a = q[0];
                b = q[1];
            }

            private static void GetInts(out int a, out int b, out int c)
            {
                var q = GetInts();
                a = q[0];
                b = q[1];
                c = q[2];
            }

            private static int[] GetInts()
            {
                var s = GetStrs();
                var a = new int[s.Length];
                for (var i = 0; i < s.Length; ++i)
                    a[i] = int.Parse(s[i]);
                return a;
            }

            private static long GetLong()
            {
                return long.Parse(GetStr());
            }

            private static IEnumerable<long> GetLongs()
            {
                return GetStrs().Select(long.Parse);
            }

            private static void WriteDouble<T>(T d)
            {
                Console.WriteLine(string.Format("{0:0.000000000}", d).Replace(',', '.'));
            }

            private static void WL<T>(T s)
            {
                Console.WriteLine(s);
            }

            private static void W<T>(T s)
            {
                Console.Write(s);
            }

            private static void Assert(bool b)
            {
                if (!b) throw new Exception();
            }

            private static void Swap<T>(ref T a, ref T b)
            {
                var temp = a;
                a = b;
                b = temp;
            }

            #endregion
        }
    }