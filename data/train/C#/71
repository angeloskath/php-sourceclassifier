using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Collections;

namespace GCJ.Round1
{
    class Program
    {
        static int ReadInt(System.IO.StreamReader reader)
        {
            return int.Parse(reader.ReadLine());
        }

        static int[] ReadIntArray(System.IO.StreamReader reader)
        {
            string data = reader.ReadLine();
            return data.Split(' ').Select(x => int.Parse(x)).ToArray();
        }

        static Int64[] ReadInt64Array(System.IO.StreamReader reader)
        {
            string data = reader.ReadLine();
            return data.Split(' ').Select(x => Int64.Parse(x)).ToArray();
        }

        static string[] ReadStringArray(System.IO.StreamReader reader)
        {
            string data = reader.ReadLine();
            return data.Split(' ');
        }

        static void Main(string[] args)
        {
            System.IO.StreamReader reader = System.IO.File.OpenText("input.in");
            System.IO.StreamWriter writer = System.IO.File.CreateText("output.out");

            int T = ReadInt(reader);

            for (int i = 1; i <= T; i++)
            {
                bool isWon = false;
                bool notOver = false;
                int [,] data = new int[4,4];
                string result = String.Empty;

                for (int j = 0;j < 4;j++)
                {
                    string line = reader.ReadLine();

                    for (int k = 0; k < 4; k++)
                    {
                        if (line[k] == '.')
                        {
                            data[j, k] = 0;
                            notOver = true;
                        }
                        else if (line[k] == 'O')
                            data[j, k] = 1;
                        else if (line[k] == 'X')
                            data[j, k] = 2;
                        else 
                            data[j, k] = 3;
                    }
                }

                for (int j = 0; j < 4; j++)
                {
                    int r = data[j, 0] & data[j, 1] & data[j, 2] & data[j, 3];
                    if (r == 1 || r == 2)
                    {
                        result = (r == 1) ? "O won" : "X won";
                        isWon = true;
                        break;
                    }
                }

                if (!isWon)
                {
                    for (int j = 0; j < 4; j++)
                    {
                        int r = data[0, j] & data[1, j] & data[2, j] & data[3, j];
                        if (r == 1 || r == 2)
                        {
                            result = (r == 1) ? "O won" : "X won";
                            isWon = true;
                            break;
                        }
                    }
                }

                if (!isWon)
                {
                    int r = data[0, 0] & data[1, 1] & data[2, 2] & data[3, 3];
                    if (r == 1 || r == 2)
                    {
                        result = (r == 1) ? "O won" : "X won";
                        isWon = true;
                    }
                }

                if (!isWon)
                {
                    int r = data[0, 3] & data[1, 2] & data[2, 1] & data[3, 0];
                    if (r == 1 || r == 2)
                    {
                        result = (r == 1) ? "O won" : "X won";
                        isWon = true;
                    }
                }

                if (isWon)
                    writer.WriteLine("Case #" + i + ": " + result);
                else if (notOver)
                    writer.WriteLine("Case #" + i + ": Game has not completed");
                else
                    writer.WriteLine("Case #" + i + ": Draw");

                reader.ReadLine();
            }

            reader.Dispose();
            writer.Dispose();
        }

    }
}
