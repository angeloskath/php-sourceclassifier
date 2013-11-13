using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.IO;
using System.Diagnostics;

namespace CodeJam
{
    class TicTacToeTomek
    {
        private enum Result
        {
            WinX,
            WinO,
            Draw,
            Incomplete
        }
        static void Main(string[] args)
        {
            using (TextReader input = new StreamReader("input.txt"))
            using (TextWriter output = new StreamWriter("output.txt"))
            //using (TextReader input = new StreamReader(Console.OpenStandardInput()))
            //using (TextWriter output = new StreamWriter(Console.OpenStandardOutput()))
            {
                Process(input, output);
            }
        }

        private static void Process(TextReader input, TextWriter output)
        {
            int numberOfCases = int.Parse(input.ReadLine());
            for (int currentCase = 0; currentCase < numberOfCases; currentCase++)
            {
                output.Write("Case #" + (currentCase + 1).ToString() + ": ");
                ProcessLine(input, output);
            }
        }

        private static void ProcessLine(TextReader input, TextWriter output)
        {
            char[] buffer = new char[4];
            int diag = 3;
            int[] down = new int[4];
            int diag1 = 3;
            int diag2 = 3;
            for (int index = 0; index < 4; index++)
            {
                down[index] = 3;
            }
            Result result = Result.Draw;
            for (int line = 0; line < 4; line++, diag--)
            {
                input.Read(buffer, 0, 4);
                input.ReadLine();
                int across = 3;
                for (int character = 0; character < 4; character++)
                {
                    int add;
                    switch (buffer[character])
                    {
                        case 'O':
                            add = 1;
                            break;
                        case 'X':
                            add = 2;
                            break;
                        case 'T':
                            add = 3;
                            break;
                        case '.':
                            if (result == Result.Draw)
                            {
                                result = Result.Incomplete;
                            }
                            add = 0;
                            break;
                        default:
                            add = 0;
                            break;
                    }
                    across &= add;
                    down[character] &= add;
                    if (line == character)
                    {
                        diag1 &= add;
                    }
                    if (diag == character)
                    {
                        diag2 &= add;
                    }
                }
                SetResult(across, ref result);
            }
            SetResult(diag1, ref result);
            SetResult(diag2, ref result);
            for (int index = 0; index < 4; index++)
            {
                SetResult(down[index], ref result);
            }
            input.ReadLine();
            switch (result)
            {
                case Result.WinX:
                    output.WriteLine("X won");
                    break;
                case Result.WinO:
                    output.WriteLine("O won");
                    break;
                case Result.Draw:
                    output.WriteLine("Draw");
                    break;
                case Result.Incomplete:
                    output.WriteLine("Game has not completed");
                    break;
                default:
                    break;
            }
            
        }

        private static void SetResult(int across, ref Result result)
        {
            if (across == 1)
            {
                result = Result.WinO;
            }
            if (across == 2)
            {
                result = Result.WinX;
            }
        }
    }
}
