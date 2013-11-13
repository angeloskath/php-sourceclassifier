using System;
using System.IO;

namespace CodeJam2013
{
    class ProblemA
    {
        static void Main(string[] args)
        {
            //Console.SetIn(new StreamReader(new FileStream("Test.txt", FileMode.Open)));
            //Console.SetOut(new StreamWriter(new FileStream("Test.Out.txt", FileMode.OpenOrCreate)));

            int problemCount = int.Parse(Console.In.ReadLine());

            for (int i = 0; i < problemCount; i++)
            {
                solveA(i + 1);
            }

            Console.Out.Flush();
        }

        public static void solveA(int caseNumber)
        {
            const int xWins = 0x00000004;
            const int oWins = 0x00040000;

            int[,] grid = new int[4, 4];

            bool spacesEmpty = false;

            bool xHasWon = false;
            bool oHasWon = false;

            bool winnerFound = false;

            for (int y = 0; y < 4; y++)
            {
                String line = Console.In.ReadLine();
                char[] letters = line.ToCharArray();
                for (int x = 0; x < 4; x++)
                {
                    if (letters[x] == 'X')
                    {
                        grid[x, y] = 0x00000001;
                    }
                    else if (letters[x] == 'O')
                    {
                        grid[x, y] = 0x00010000;
                    }
                    else if (letters[x] == 'T')
                    {
                        grid[x, y] = 0x00010001;
                    }
                    else
                    {
                        spacesEmpty = true;
                    }
                }
            }

            for (int y = 0; !winnerFound && y < 4; y++)
            {
                int sum = grid[0, y] + grid[1, y] + grid[2, y] + grid[3, y];
                xHasWon = (sum & xWins) == xWins;
                oHasWon = (sum & oWins) == oWins;
                winnerFound = xHasWon || oHasWon;
            }

            for (int x = 0; !winnerFound && x < 4; x++)
            {
                int sum = grid[x, 0] + grid[x, 1] + grid[x, 2] + grid[x, 3];
                xHasWon = (sum & xWins) == xWins;
                oHasWon = (sum & oWins) == oWins;
                winnerFound = xHasWon || oHasWon;
            }

            if (!winnerFound)
            {
                int diag1 = grid[0, 0] + grid[1, 1] + grid[2, 2] + grid[3, 3];
                xHasWon = (diag1 & xWins) == xWins;
                oHasWon = (diag1 & oWins) == oWins;
                winnerFound = xHasWon || oHasWon;
            }

            if (!winnerFound)
            {
                int diag2 = grid[0, 3] + grid[1, 2] + grid[2, 1] + grid[3, 0];
                xHasWon = (diag2 & xWins) == xWins;
                oHasWon = (diag2 & oWins) == oWins;
                winnerFound = xHasWon || oHasWon;
            }

            if (xHasWon)
            {
                Console.Out.WriteLine("Case #" + caseNumber.ToString() + ": X won");

            }
            else if (oHasWon)
            {
                Console.Out.WriteLine("Case #" + caseNumber.ToString() + ": O won");

            }
            else if (spacesEmpty)
            {
                Console.Out.WriteLine("Case #" + caseNumber.ToString() + ": Game has not completed");
            }
            else
            {
                Console.Out.WriteLine("Case #" + caseNumber.ToString() + ": Draw");
            }

            Console.In.ReadLine();
        }
    }
}
