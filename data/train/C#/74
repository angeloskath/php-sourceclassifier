using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace TicTacToe
{
    class Program
    {
        static void Main(string[] args)
        {
            string input = "D:\\Data\\CodeJam\\1_1\\A-large.in";
            string output = "D:\\Data\\CodeJam\\1_1\\output_large.txt";

            StreamReader sr = new StreamReader(input);
            int T = int.Parse(sr.ReadLine());
            char[][,] matrix = new char[T][,];
            string line;
            for (int k = 0; k < T; k++)
            {
                matrix[k] = new char[4, 4];
                for (int i = 0; i < 4; i++)
                {
                    line = sr.ReadLine();
                    matrix[k][i, 0] = line[0];
                    matrix[k][i, 1] = line[1];
                    matrix[k][i, 2] = line[2];
                    matrix[k][i, 3] = line[3];
                }
                sr.ReadLine();
            }

            sr.Close();

            StreamWriter sw = new StreamWriter(output);
            for (int k = 0; k < T; k++)
            {
                int result = GetResult(matrix[k]);
                switch(result)
                {
                    case 0:
                        sw.WriteLine("Case #{0}: Draw", k + 1);
                        break;
                    case 1:
                        sw.WriteLine("Case #{0}: X won", k + 1);
                        break;
                    case 2:
                        sw.WriteLine("Case #{0}: O won", k + 1);
                        break;
                    case 3:
                        sw.WriteLine("Case #{0}: Game has not completed", k + 1);
                        break;
                    default:
                        break;
                }
            }
            sw.Close();
            
        }

        //0: Draw, 1: X, 2: O, 3: no complete
        static int GetResult(char[,] board)
        {
            bool isXWin = false;
            bool isOWin = false;
            isXWin = Check('X', board);
            isOWin = Check('O', board);
            if (isXWin)
                return 1;
            else if (isOWin)
                return 2;
            else
            {
                int points = 0;
                for (int i = 0; i < 4; i++)
                {
                    for (int j = 0; j < 4; j++)
                    {
                        if (board[i, j] == '.')
                            points++;
                    }
                }
                if (points == 0)
                    return 0;
                else
                    return 3;
            }
        }

        static bool Check(char c, char[,] board)
        {
            // check whether the human player can win
            if (isLine(board[0, 0], board[1, 1], board[2, 2], board[3, 3], c)) return true;
            if (isLine(board[0, 0], board[0, 1], board[0, 2], board[0, 3], c)) return true;
            if (isLine(board[0, 0], board[1, 0], board[2, 0], board[3, 0], c)) return true;
            if (isLine(board[0, 1], board[1, 1], board[2, 1], board[3, 1], c)) return true;
            if (isLine(board[0, 2], board[1, 2], board[2, 2], board[3, 2], c)) return true;
            if (isLine(board[0, 3], board[1, 3], board[2, 3], board[3, 3], c)) return true;
            if (isLine(board[0, 3], board[1, 2], board[2, 1], board[3, 0], c)) return true;
            if (isLine(board[1, 0], board[1, 1], board[1, 2], board[1, 3], c)) return true;
            if (isLine(board[2, 0], board[2, 1], board[2, 2], board[2, 3], c)) return true;
            if (isLine(board[3, 0], board[3, 1], board[3, 2], board[3, 3], c)) return true;
            return false;
        }

        static bool isLine(char a, char b, char c, char d, char match)
        {
            if (a == match && b == match && c == match && d == match) return true;
            if (a == 'T' && b == match && c == match && d == match) return true;
            if (a == match && b == 'T' && c == match && d == match) return true;
            if (a == match && b == match && c == 'T' && d == match) return true;
            if (a == match && b == match && c == match && d == 'T') return true;
            return false;
        }
    }
}
