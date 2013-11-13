using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

using System.IO;

namespace TicTacToeTomek
{
    class Program
    {
        enum SquareStatus
        {
            T,
            X,
            O,
            Empty
        }

        static void Main(string[] args)
        {

            //StreamReader sr = new StreamReader("D:\\a.txt");
            //StreamWriter sw = new StreamWriter("D:\\b.txt");

            //StreamReader sr = new StreamReader("D:\\A-small-attempt0.in");
            //StreamWriter sw = new StreamWriter("D:\\A-small-attempt0.out");
            
            StreamReader sr = new StreamReader("D:\\A-large.in");
            StreamWriter sw = new StreamWriter("D:\\A-large.out");

            int numTestCases = Convert.ToInt32(sr.ReadLine());


            for (int i = 0; i < numTestCases; i++)
            {
                Console.WriteLine(i);

                SquareStatus[,] board = new SquareStatus[4, 4];

                bool isBoardFull = true;

                for (int j = 0; j < 4; j++)
                {
                    string lineData = sr.ReadLine();

                    for (int k = 0; k < 4; k++)
                    {
                        switch (lineData[k])
                        {
                            case 'T':
                                board[j, k] = SquareStatus.T;
                                break;
                            case 'X':
                                board[j, k] = SquareStatus.X;
                                break;
                            case 'O':
                                board[j, k] = SquareStatus.O;
                                break;
                            case '.':
                                board[j, k] = SquareStatus.Empty;
                                isBoardFull = false;
                                break;
                        }
                    }
                }
                sr.ReadLine();

                //Check rows

                bool xWon = false;
                bool oWon = false;

                for (int j = 0; j < 4; j++)
                {
                    xWon = CheckFourSquares(board[j, 0], board[j, 1], board[j, 2], board[j, 3], SquareStatus.X);
                    oWon = CheckFourSquares(board[j, 0], board[j, 1], board[j, 2], board[j, 3], SquareStatus.O);

                    if (xWon || oWon)
                    {
                        break;
                    }
                }

                if (xWon == false && oWon == false)
                {
                    for (int j = 0; j < 4; j++)
                    {
                        xWon = CheckFourSquares(board[0, j], board[1, j], board[2, j], board[3, j], SquareStatus.X);
                        oWon = CheckFourSquares(board[0, j], board[1, j], board[2, j], board[3, j], SquareStatus.O);

                        if (xWon || oWon)
                        {
                            break;
                        }
                    }
                }

                if (xWon == false && oWon == false)
                {
                    xWon = CheckFourSquares(board[0, 0], board[1, 1], board[2, 2], board[3, 3], SquareStatus.X);
                    oWon = CheckFourSquares(board[0, 0], board[1, 1], board[2, 2], board[3, 3], SquareStatus.O);
                }

                if (xWon == false && oWon == false)
                {
                    xWon = CheckFourSquares(board[3, 0], board[2, 1], board[1, 2], board[0, 3], SquareStatus.X);
                    oWon = CheckFourSquares(board[3, 0], board[2, 1], board[1, 2], board[0, 3], SquareStatus.O);
                }

                sw.Write("Case #{0}: ", i + 1);
                if (xWon) sw.Write("X won");
                else if (oWon) sw.Write("O won");
                else if (isBoardFull) sw.Write("Draw");
                else sw.Write("Game has not completed");
                sw.WriteLine();

            }
            sw.Close();
        }


        static bool CheckFourSquares(SquareStatus s1, SquareStatus s2, SquareStatus s3, SquareStatus s4, SquareStatus req)
        {
            if (s1 != req && s1 != SquareStatus.T)
            {
                return false;
            }
            if (s2 != req && s2 != SquareStatus.T)
            {
                return false;
            }
            if (s3 != req && s3 != SquareStatus.T)
            {
                return false;
            }
            if (s4 != req && s4 != SquareStatus.T)
            {
                return false;
            }

            return true;
        }
    }
}
