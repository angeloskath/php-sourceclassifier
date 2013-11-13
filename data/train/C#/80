using System.Collections.Generic;
using System.Linq;

namespace CodeJam2013Cs
{
    using System.IO;

    class Program
    {
        public static void TicTacToeTomek(string fileName)
        {
            var inputLines = File.ReadAllLines(fileName).Skip(1).ToList();
            var testCases = new List<List<char[]>>();
            var output = new List<string>();
            var testCaseIndex = 1;

            while (inputLines.Any())
            {
                testCases.Add(inputLines.TakeWhile(x => x != string.Empty)
                                  .Select(x => x.ToCharArray()).ToList());

                if (inputLines.Count() < 5)
                    break;
                inputLines.RemoveRange(0, 5);
            }

            // Solve problem.
            foreach (var testCase in testCases)
            {
                string resultString;
                bool xWon = false;
                bool oWon = false;

                var allChars = new List<char>();
                foreach (var line in testCase)
                {
                    allChars.AddRange(line);
                }

                // Check lines.
                foreach (var line in testCase)
                {
                    if (line.All(x => x != '.' && x != 'O') && line.Count(x => x == 'T') <= 1)
                    {
                        xWon = true;
                    }
                    else if (line.All(x => x != '.' && x != 'X') && line.Count(x => x == 'T') <= 1)
                    {
                        oWon = true;
                    }
                }

                // Check columns.
                for (int i = 0; i < 4; i++)
                {
                    int i1 = i;
                    var column = testCase.Select(x => x[i1]).ToList();
                    if (column.All(x => x != '.' && x != 'O') && column.Count(x => x == 'T') <= 1)
                    {
                        xWon = true;
                    }
                    else if (column.All(x => x != '.' && x != 'X') && column.Count(x => x == 'T') <= 1)
                    {
                        oWon = true;
                    }
                }

                // Check for diagonals.
                var diagonal = new List<char>();
                for (int i = 3; i >= 0; i--)
                {
                    diagonal.Add(testCase[i][i]);
                }
                if (diagonal.All(x => x != '.' && x != 'O') && diagonal.Count(x => x == 'T') <= 1)
                {
                    xWon = true;
                }
                else if (diagonal.All(x => x != '.' && x != 'X') && diagonal.Count(x => x == 'T') <= 1)
                {
                    oWon = true;
                }
                diagonal.Clear();

                for (int i = 0; i < 4; i++)
                {
                    var index = 3 - i;
                    diagonal.Add(testCase[i][index]);
                }
                if (diagonal.All(x => x != '.' && x != 'O') && diagonal.Count(x => x == 'T') <= 1)
                {
                    xWon = true;
                }
                else if (diagonal.All(x => x != '.' && x != 'X') && diagonal.Count(x => x == 'T') <= 1)
                {
                    oWon = true;
                }

                // Write the problem output.
                if (xWon && oWon)
                {
                    resultString = "Draw";
                }
                else if (!xWon && !oWon)
                {
                    resultString = allChars.All(x => x != '.') ? "Draw" : "Game has not completed";
                }
                else if (xWon)
                {
                    resultString = "X won";
                }
                else
                {
                    resultString = "O won";
                }

                output.Add(string.Format("Case #{0}: {1}", testCaseIndex, resultString));
                testCaseIndex++;
            }

            using (var writer = new StreamWriter(@"C:\codejam\a-small-output.txt"))
            {
                foreach (var line in output)
                {
                    writer.WriteLine(line);
                }
            }
        }

        static void Main()
        {
            const string inputFile = @"C:\codejam\asample.txt";
            TicTacToeTomek(inputFile);
        }
    }
}
