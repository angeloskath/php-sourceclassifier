using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace TicTacTomek
{
    class Program
    {
        static bool RowWinner(ref String[] board)
        {
            // first check for 4 in a row
            for (int j = 0; j < 4; j++)
            {
                char row = 'T';
                for (int k = 0; k < 4; k++)
                {
                    if (board[j][k] == row || board[j][k] == 'T' ||
                        ((board[j][k] == 'X' || board[j][k] == 'O') && (row == 'T')))
                    {
                        row = (row == 'T' ? board[j][k] : row);
                        if (k == 3)
                        {
                            Console.WriteLine("{0} won", row);
                            return true;
                        }
                    }
                    else
                        break;
                }
            }
            return false;
        }

        static bool ColWinner(ref String[] board)
        {
            // first check for 4 in a row
            for (int j = 0; j < 4; j++)
            {
                char row = 'T';
                for (int k = 0; k < 4; k++)
                {
                    if (board[k][j] == row || board[k][j] == 'T' ||
                        ((board[k][j] == 'X' || board[k][j] == 'O') && (row == 'T')))
                    {
                        row = (row == 'T' ? board[k][j] : row);
                        if (k == 3)
                        {
                            Console.WriteLine("{0} won", row);
                            return true;
                        }
                    }
                    else
                        break;
                }
            }
            return false;
        }

        static bool DiagonalWinner(ref String[] board)
        {
            // first check for 4 in a row
            char row = 'T';
            for (int k = 0; k < 4; k++)
            {
                if (board[3-k][k] == row || board[3-k][k] == 'T' ||
                    ((board[3-k][k] == 'X' || board[3-k][k] == 'O') && (row == 'T')))
                {
                    row = (row == 'T' ? board[3-k][k] : row);
                    if (k == 3)
                    {
                        Console.WriteLine("{0} won", row);
                        return true;
                    }
                }
                else
                    break;
            }

            row = 'T';
            for (int k = 0; k < 4; k++)
            {
                if (board[k][k] == row || board[k][k] == 'T' ||
                    ((board[k][k] == 'X' || board[k][k] == 'O') && (row == 'T')))
                {
                    row = (row == 'T' ? board[k][k] : row);
                    if (k == 3)
                    {
                        Console.WriteLine("{0} won", row);
                        return true;
                    }
                }
                else
                    break;
            }

            return false;
        }

        static bool Draw(ref String[] board)
        {
            // draw if no . on the board
            for (int i = 0; i < 4; ++i)
            {
                for (int j = 0; j < 4; ++j)
                {
                    if (board[i][j] == '.')
                    {
                        Console.WriteLine("Game has not completed");
                        return false;
                    }
                }
            }
            Console.WriteLine("Draw");
            return true;
        }

        static void Main(string[] args)
        {
            int T = int.Parse(Console.ReadLine());
            for (int i = 0; i < T; ++i)
            {
                String[] board = new String[4];
                board[0] = Console.ReadLine();
                board[1] = Console.ReadLine();
                board[2] = Console.ReadLine();
                board[3] = Console.ReadLine();
                if (i < T-1)
                    Console.ReadLine();// empty line
                Console.Write("Case #{0}: ", 1 + i);
                bool blah = RowWinner(ref board) || ColWinner(ref board) || DiagonalWinner(ref board) || Draw(ref board);

            }
        }
    }
}
