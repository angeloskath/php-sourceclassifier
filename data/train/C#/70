/// <summary>
/// Solution for Code Jam Problem - TicTacToeTomek
/// Author - JSSVPrasad Buddha
/// </summary>
using System;
using Microsoft.VisualStudio.TestTools.UnitTesting;
using System.IO;
using System.Text;
using System.Linq;

namespace CodeJam2013
{
    [TestClass]
    public class TicTacToeTomek
    {
        static string inputfile = @"C:\Documents\Dropbox\Code\BitBucket\Temp\CodeJam\IO\TicTacToeTomek-large.in";
        static string outputfile = @"C:\Documents\Dropbox\Code\BitBucket\Temp\CodeJam\IO\TicTacToeTomek-large.out";
        static StringBuilder solution = new StringBuilder();
        static string[] lines = File.ReadAllLines(inputfile);

        static FileStream fs = new FileStream(@"C:\Documents\Dropbox\Code\BitBucket\Temp\CodeJam\IO\Global.out", FileMode.Create);
        static StreamWriter sw = new StreamWriter(fs);
        static TextWriter tmp = Console.Out;

        [TestMethod]
        public void TicTacToeTomekSolver()
        {
            int lineCount = lines.Length;
            string result = "";
            for (int line = 1, tc = 1; line < lineCount; tc++)
            {
                Table t = new Table(4);

                for (int i = 0; i < 4; i++)
                    t.SetLine(lines[line++], i);
                line++;
                
                //t.Print();
                t.Transpose();
                result = "Game has not completed";
                if (t.DoHorizontalScan('X'))
                {
                    result = "X won";
                }
                else if(t.DoVerticalScan('X'))
                {
                    result = "X won";
                }
                else if (t.DoCrossScan('X'))
                {
                    result = "X won";
                }
                else if (t.DoHorizontalScan('O'))
                {
                    result = "O won";
                }
                else if (t.DoVerticalScan('O'))
                {
                    result = "O won";
                }
                else if (t.DoCrossScan('O'))
                {
                    result = "O won";
                }
                else if (t.IsFull())
                {
                    result = "Draw";
                }


                solution.AppendLine("Case #" + tc + ": " + result);
            }

            File.WriteAllText(outputfile, solution.ToString());
            return;
        }

        public class Table
        {
            private string _emptyrow = "..................................................";
            private string[] _table, _temp, _inverse;
            private int _size;

            public Table(int n)
            {
                _size = n;
                _table = new string[n];
                _temp = new string[n];
                int i = 0;
                while (i < n)
                {
                    _table[i] = _emptyrow.Substring(0, n);

                    i++;
                }
            }

            public void SetLine(string line, int linenum)
            {
                _table[linenum] = line;
            }

            public string Print()
            {
                StringBuilder str = new StringBuilder();
                for (int i = 0; i < _size; i++)
                {
                    str.AppendLine(_table[i]);
                }
                string s = str.ToString();
                Console.Write(s);
                return s;
            }

            

            public bool DoHorizontalScan(char player)
            {
                string sequence = "".PadRight(2, player);
                foreach (string line in _table)
                {
                    if (line.Contains(sequence))
                    {
                        string l = line;
                        l = l.Replace(sequence, "");
                        if ((l.Length == 0) || (l.Contains(player) && l.Contains("T")))
                            return true;
                    }
                }

                return false;
            }

            public bool DoVerticalScan(char player)
            {
                string sequence = "".PadRight(2, player);
                foreach (string line in _inverse)
                {
                    if (line.Contains(sequence))
                    {
                        string l = line;
                        l = l.Replace(sequence, "");
                        if ((l.Length==0)||(l.Contains(player) && l.Contains("T")))
                            return true;
                    }
                }

                return false;
            }
            
            public void Transpose()
            {
                _inverse = new string[_size];
                _inverse[0] = _table[0][0].ToString() + _table[1][0] + _table[2][0] + _table[3][0];
                _inverse[1] = _table[0][1].ToString() + _table[1][1] + _table[2][1] + _table[3][1];
                _inverse[2] = _table[0][2].ToString() + _table[1][2] + _table[2][2] + _table[3][2];
                _inverse[3] = _table[0][3].ToString() + _table[1][3] + _table[2][3] + _table[3][3];
            }

            public bool DoCrossScan(char player)
            {
                string sequence = "".PadRight(2, player);
                string forwardslash = _table[0][3].ToString() + _table[1][2] + _table[2][1] + _table[3][0];
                string backwardslash = _table[0][0].ToString() + _table[1][1] + _table[2][2] + _table[3][3];

                forwardslash.Replace(".", "");
                if (forwardslash.Contains(sequence))
                {
                    string l = forwardslash;
                    l = l.Replace(sequence, "");
                    if ((l.Length == 0) || (l.Contains(player) && l.Contains("T")))
                        return true;
                }

                backwardslash.Replace(".", "");
                if (backwardslash.Contains(sequence))
                {
                    string l = backwardslash;
                    l = l.Replace(sequence, "");
                    if ((l.Length == 0) || (l.Contains(player) && l.Contains("T")))
                        return true;
                }

                return false;
            }

            public bool IsFull()
            {
                foreach (string line in _table)
                {
                    if (line.Contains('.'))
                        return false;
                }
                return true;
            }
        }

        [TestCleanup]
        public void CleanUp()
        {
            // This method Sets the test output to a text file rather than Standard Output for seeing the output without indentation issues
            // To disable redirecting output to text file, comment next line
            Console.SetOut(tmp);
            sw.Close();
        }

        [TestInitialize]
        public void Initialize()
        {
            Console.SetOut(sw);
        }
    }
}
