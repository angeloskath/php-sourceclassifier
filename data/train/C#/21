using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace TicTacToeTomek
{
    class Program
    {
        static void Main(string[] args)
        {
            var T = int.Parse(Console.ReadLine());
            for (var t = 0; t < T; t++)
            {
                var board = new char[4, 4];
                for (var i = 0; i < 4; i++)
                {
                    var line = Console.ReadLine();
                    for (var j = 0; j < 4; j++)
                    {
                        board[i, j] = line[j];
                    }
                }
                var status = GetStatus(board);
                Console.WriteLine("Case #{0}: {1}", t + 1, status);
                Console.ReadLine();
            }
        }

        static string GetStatus(char[,] board)
        {
            const string XWon = "X won";
            const string OWon = "O won";
            const string Draw = "Draw";
            const string NotComplete = "Game has not completed";


            var matchesX = new[] { "TXXX", "XXXX", "XXXT" };
            var matchesO = new[] { "TOOO", "OOOO", "OOOT" };

            for (int k = 0; k < 4; k++)
            {
                {
                    var row = new[] { board[k, 0], board[k, 1], board[k, 2], board[k, 3] }.ToList();
                    row.Sort();
                    var rowString = new string(row.ToArray());
                    //Console.WriteLine("RowString: {0}",rowString);
                    if (matchesX.Contains(rowString))
                        return XWon;
                    if (matchesO.Contains(rowString))
                        return OWon;
                }
                {
                    var column = new[] { board[0, k], board[1, k], board[2, k], board[3, k] }.ToList();
                    column.Sort();
                    var columnString = new string(column.ToArray());
                   // Console.WriteLine("Column: {0}", columnString);
                    if (matchesX.Contains(columnString))
                        return XWon;
                    if (matchesO.Contains(columnString))
                        return OWon;
                }
            }

            {
                var diag1 = new[] { board[0, 0], board[1, 1], board[2, 2], board[3, 3] }.ToList();
                diag1.Sort();
                var diag1String = new string(diag1.ToArray());
                //Console.WriteLine("Diag1: {0}", diag1String);
                if (matchesX.Contains(diag1String))
                    return XWon;
                if (matchesO.Contains(diag1String))
                    return OWon;
            }

            {
                var diag2 = new[] { board[0, 3], board[1, 2], board[2, 1], board[3, 0] }.ToList();
                diag2.Sort();
                var diag2String = new string(diag2.ToArray());
                //Console.WriteLine("Diag2: {0}", diag2String);
                if (matchesX.Contains(diag2String))
                    return XWon;
                if (matchesO.Contains(diag2String))
                    return OWon;
            }

            for (int i = 0; i < 16; i++)
            {
                if (board[i / 4, i % 4] == '.')
                {
                    return NotComplete;
                }
            }

            return Draw;
        }
    }
}
