using System;

namespace Gibbed.GoogleCodeJam2013.Qualification.ProblemA
{
    internal class Program
    {
        private static void Main(string[] args)
        {
            string input;

            input = Console.In.ReadLine();
            if (input == null)
            {
                throw new System.IO.EndOfStreamException();
            }

            var count = int.Parse(input);
            for (int i = 1; i <= count; i++)
            {
                var board = new char[4, 4];

                for (int y = 0; y < 4; y++)
                {
                    input = Console.In.ReadLine().Trim();
                    if (input.Length != 4)
                    {
                        throw new InvalidOperationException();
                    }

                    board[0, y] = input[0];
                    board[1, y] = input[1];
                    board[2, y] = input[2];
                    board[3, y] = input[3];
                }

                Console.WriteLine("Case #{0}: {1}", i, GetState(board));

                Console.In.ReadLine();
            }
        }

        protected const char X = 'X';
        protected const char O = 'O';
        protected const char Neutral = 'T';
        protected const char Empty = '.';

        private static bool IsHorizontalWin(char[,] board, char player)
        {
            for (int x = 0; x < 4; x++)
            {
                bool bad = false;

                for (int y = 0; y < 4; y++)
                {
                    if (board[x, y] != player &&
                        board[x, y] != Neutral)
                    {
                        bad = true;
                        break;
                    }
                }

                if (bad == false)
                {
                    return true;
                }
            }

            return false;
        }

        private static bool IsVerticalWin(char[,] board, char player)
        {
            for (int y = 0; y < 4; y++)
            {
                bool bad = false;

                for (int x = 0; x < 4; x++)
                {
                    if (board[x, y] != player &&
                        board[x, y] != Neutral)
                    {
                        bad = true;
                        break;
                    }
                }

                if (bad == false)
                {
                    return true;
                }
            }

            return false;
        }

        private static bool IsDiagonalWinDownRight(char[,] board, char player)
        {
            for (int x = 0, y = 0; x < 4 && y < 4; x++, y++)
            {
                if (board[x, y] != player &&
                    board[x, y] != Neutral)
                {
                    return false;
                }
            }

            return true;
        }

        private static bool IsDiagonalWinDownLeft(char[,] board, char player)
        {
            for (int x = 3, y = 0; x >= 0 && y < 4; x--, y++)
            {
                if (board[x, y] != player &&
                    board[x, y] != Neutral)
                {
                    return false;
                }
            }

            return true;
        }

        private static bool IsWin(char[,] board, char player)
        {
            return IsHorizontalWin(board, player) == true ||
                   IsVerticalWin(board, player) == true ||
                   IsDiagonalWinDownRight(board, player) ||
                   IsDiagonalWinDownLeft(board, player);
        }

        private static bool HasEmpty(char[,] board)
        {
            for (int x = 0; x < 4; x++)
            {
                for (int y = 0; y < 4; y++)
                {
                    if (board[x, y] == Empty)
                    {
                        return true;
                    }
                }
            }

            return false;
        }

        private static string GetState(char[,] board)
        {
            if (IsWin(board, X) == true)
            {
                return "X won";
            }

            if (IsWin(board, O) == true)
            {
                return "O won";
            }

            if (HasEmpty(board) == true)
            {
                return "Game has not completed";
            }

            return "Draw";
        }
    }
}
