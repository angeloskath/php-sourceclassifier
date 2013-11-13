using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.IO;

namespace CodeJamQualifications
{
    class Program
    {
        const string X_WON = "X won";
        const string O_WON = "O won";
        const string DRAW = "Draw";
        const string NOT_DONE = "Game has not completed";

        static void Main(string[] args)
        {
            Console.WriteLine(args.Length);
            string[] lines = File.ReadAllLines(args[0]);
            int count = int.Parse(lines[0]);
            for (int i = 0; i < count; i++)
            {
                bool won = false;
                string[] game = new string[4];
                for (int h = 0; h < 4; h++)
                {
                    game[h] = lines[1 + 5 * i + h];
                }

                
                if (isX(game[0][0]) && isX(game[1][1]) && isX(game[2][2]) && isX(game[3][3]))
                {
                    File.AppendAllText(@"C:\Users\Arch\Documents\CodeJam\Output\Tic-Tac-Toe-Tomek.out", "Case #" + (i + 1) + ": " + X_WON + "\n");
                    won = true;
                }
                else if (isO(game[0][0]) && isO(game[1][1]) && isO(game[2][2]) && isO(game[3][3]))
                {
                    File.AppendAllText(@"C:\Users\Arch\Documents\CodeJam\Output\Tic-Tac-Toe-Tomek.out", "Case #" + (i + 1) + ": " + O_WON + "\n");
                    won = true;
                }
                else if (isX(game[0][3]) && isX(game[1][2]) && isX(game[2][1]) && isX(game[3][0]))
                {
                    File.AppendAllText(@"C:\Users\Arch\Documents\CodeJam\Output\Tic-Tac-Toe-Tomek.out", "Case #" + (i + 1) + ": " + X_WON + "\n");
                    won = true;
                }
                else if (isO(game[0][3]) && isO(game[1][2]) && isO(game[2][1]) && isO(game[3][0]))
                {
                    File.AppendAllText(@"C:\Users\Arch\Documents\CodeJam\Output\Tic-Tac-Toe-Tomek.out", "Case #" + (i + 1) + ": " + O_WON + "\n");
                    won = true;
                }
                else
                {
                    for (int h = 0; h < 4; h++)
                    {
                        if (isX(game[h][0]) && isX(game[h][1]) && isX(game[h][2]) && isX(game[h][3]))
                        {
                            File.AppendAllText(@"C:\Users\Arch\Documents\CodeJam\Output\Tic-Tac-Toe-Tomek.out", "Case #" + (i + 1) + ": " + X_WON + "\n");
                            won = true;
                            break;
                        }
                        else if (isO(game[h][0]) && isO(game[h][1]) && isO(game[h][2]) && isO(game[h][3]))
                        {
                            File.AppendAllText(@"C:\Users\Arch\Documents\CodeJam\Output\Tic-Tac-Toe-Tomek.out", "Case #" + (i + 1) + ": " + O_WON + "\n");
                            won = true;
                            break;
                        }
                        else if (isX(game[0][h]) && isX(game[1][h]) && isX(game[2][h]) && isX(game[3][h]))
                        {
                            File.AppendAllText(@"C:\Users\Arch\Documents\CodeJam\Output\Tic-Tac-Toe-Tomek.out", "Case #" + (i + 1) + ": " + X_WON + "\n");
                            won = true;
                            break;
                        }
                        else if (isO(game[0][h]) && isO(game[1][h]) && isO(game[2][h]) && isO(game[3][h]))
                        {
                            File.AppendAllText(@"C:\Users\Arch\Documents\CodeJam\Output\Tic-Tac-Toe-Tomek.out", "Case #" + (i + 1) + ": " + O_WON + "\n");
                            won = true;
                            break;
                        }
                    }
                }

                if (!won)
                {
                    bool empty = false;
                    for (int h = 0; h < 4; h++)
                    {
                        if (game[h].IndexOf('.') != -1)
                        {
                            empty = true;
                            break;
                        }
                    }

                    if (empty)
                        File.AppendAllText(@"C:\Users\Arch\Documents\CodeJam\Output\Tic-Tac-Toe-Tomek.out", "Case #" + (i + 1) + ": " + NOT_DONE + "\n");
                    else
                        File.AppendAllText(@"C:\Users\Arch\Documents\CodeJam\Output\Tic-Tac-Toe-Tomek.out", "Case #" + (i + 1) + ": " + DRAW + "\n");
                }
            }
        }

        static bool isX(string input)
        {
            return input == "X" || input == "T";
        }

        static bool isX(char input)
        {
            return input == 'X' || input == 'T';
        }

        static bool isO(string input)
        {
            return input == "O" || input == "T";
        }

        static bool isO(char input)
        {
            return input == 'O' || input == 'T';
        }
    }
}
