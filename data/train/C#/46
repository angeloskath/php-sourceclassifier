using System;
using System.Collections;
using System.Globalization;
using System.IO;
using System.Linq;
using System.Collections.Generic;

namespace CodeChefNet
{

    class Program
    {
        private static bool fromFile = true;
        private static TextReader tmpReader;
        private static TextWriter tmpWriter;

        static void Main(string[] args)
        {
            if (fromFile)
            {
                tmpWriter = Console.Out;
                tmpReader = Console.In;
                Console.SetIn(new StreamReader(@"in.txt"));
                Console.SetOut(new StreamWriter(@"out.txt"));
            }

            var T = GetInt();
            for(var i = 0; i < T; i++)
            {
                Console.Write(string.Format(@"Case #{0}: ",i+1));
                var isFull = true;
                var isWon = false;
                var grid = new char[4,4];
                for(var j = 0; j < 4; j++)
                {
                    var row = GetString();
                    for(var k = 0; k < 4;k++)
                    {
                        grid[j, k] = row[k];
                        if(row[k]=='.') isFull = false;
                    }
                }

                if ((grid[0, 0] == 'X' || grid[0, 0] == 'T') && (grid[1,1] == 'X' || grid[1,1] == 'T')
                    && (grid[2,2] == 'X' || grid[2,2] == 'T') && (grid[3,3] == 'X' || grid[3,3] == 'T'))
                {
                    Console.WriteLine("X won");
                    isWon = true;
                }
                else if ((grid[0, 0] == 'O' || grid[0, 0] == 'T') && (grid[1, 1] == 'O' || grid[1, 1] == 'T')
                    && (grid[2, 2] == 'O' || grid[2, 2] == 'T') && (grid[3, 3] == 'O' || grid[3, 3] == 'T'))
                {
                    Console.WriteLine("O won");
                    isWon = true;
                }
                else if ((grid[0, 3] == 'X' || grid[0, 3] == 'T') && (grid[1, 2] == 'X' || grid[1, 2] == 'T')
                    && (grid[2, 1] == 'X' || grid[2, 1] == 'T') && (grid[3, 0] == 'X' || grid[3, 0] == 'T'))
                {
                    Console.WriteLine("X won");
                    isWon = true;
                }
                else if ((grid[0, 3] == 'O' || grid[0, 3] == 'T') && (grid[1, 2] == 'O' || grid[1, 2] == 'T')
                    && (grid[2, 1] == 'O' || grid[2, 1] == 'T') && (grid[3, 0] == 'O' || grid[3, 0] == 'T'))
                {
                    Console.WriteLine("O won");
                    isWon = true;
                }
                else
                {

                    for (var j = 0; j < 4; j++)
                    {
                        var horizO = 0;
                        var horizX = 0;
                        var vO = 0;
                        var vX = 0;
                        for (var k = 0; k < 4; k++)
                        {
                            if (grid[j, k] == 'T')
                            {
                                horizO++;
                                horizX++;
                            }
                            else if (grid[j, k] == 'X')
                            {
                                horizX++;
                            }
                            else if (grid[j, k] == 'O')
                            {
                                horizO++;
                            }

                            if (grid[k, j] == 'T')
                            {
                                vO++;
                                vX++;
                            }
                            else if (grid[k, j] == 'X')
                            {
                                vX++;
                            }
                            else if (grid[k, j] == 'O')
                            {
                                vO++;
                            }
                        }
                        if (horizO == 4 || vO == 4)
                        {
                            Console.WriteLine("O won");
                            isWon = true;
                            break;
                        }
                        if (horizX == 4 || vX == 4)
                        {
                            Console.WriteLine("X won");
                            isWon = true;
                            break;
                        }
                    }
                }
                if(!isWon && isFull)
                {
                    Console.WriteLine("Draw");
                }
                else if(!isWon)
                {
                    Console.WriteLine("Game has not completed");
                }


            }

            if (fromFile)
            {
                Console.Out.Flush();
                Console.Out.Close();
                Console.SetOut(tmpWriter);
                Console.SetIn(tmpReader);

                //Console.WriteLine("TIME: " + DateTime.Now.Subtract(st).TotalMilliseconds);
                //Console.ReadKey();
            }
        }

        #region Getting stuff from console

        static string GetLine()
        {
            var line = Console.ReadLine();
            while (string.IsNullOrEmpty(line))
            {
                line = Console.ReadLine();
            }
            return line;
        }

        static int GetInt()
        {
            return int.Parse(GetLine());
        }

        static List<int> GetInts()
        {
            return GetLine().Split(' ').Select(x => int.Parse(x)).ToList();
        }

        static long GetLong()
        {
            return long.Parse(GetLine());
        }

        static List<long> GetLongs()
        {
            return GetLine().Split(' ').Select(x => long.Parse(x)).ToList();
        }

        static string GetString()
        {
            return GetLine();
        }

        static string[] GetStrings()
        {
            return GetLine().Split(' ').ToArray();
        }

        #endregion
    }
}
