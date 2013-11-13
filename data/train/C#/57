namespace TicTacToeTomek
{
    using System;
    using System.IO;

    class Program
    {
        static void Main(string[] args)
        {
            using (var reader = new StreamReader(args[0] + ".in"))
            using (var writer = new StreamWriter(args[0] + ".out"))
            {
                int T = Int32.Parse(reader.ReadLine());
                for (int x = 1; x <= T; ++x)
                {
                    var X = new string[4];
                    var O = new string[4];
                    bool isComplete = true;

                    for (int i = 0; i < 4; ++i)
                    {
                        string line = reader.ReadLine();
                        X[i] = line.Replace('T', 'X');
                        O[i] = line.Replace('T', 'O');
                        if (line.Contains("."))
                            isComplete = false;
                    }
                    reader.ReadLine();

                    if (X[0] == "XXXX" || X[1] == "XXXX" || X[2] == "XXXX" || X[3] == "XXXX" ||
                        (X[0][0] == 'X' && X[1][1] == 'X' && X[2][2] == 'X' && X[3][3] == 'X') ||
                        (X[0][3] == 'X' && X[1][2] == 'X' && X[2][1] == 'X' && X[3][0] == 'X') ||
                        (X[0][0] == 'X' && X[1][0] == 'X' && X[2][0] == 'X' && X[3][0] == 'X') ||
                        (X[0][1] == 'X' && X[1][1] == 'X' && X[2][1] == 'X' && X[3][1] == 'X') ||
                        (X[0][2] == 'X' && X[1][2] == 'X' && X[2][2] == 'X' && X[3][2] == 'X') ||
                        (X[0][3] == 'X' && X[1][3] == 'X' && X[2][3] == 'X' && X[3][3] == 'X'))
                    {
                        Console.WriteLine("Case #{0}: X won", x);
                        writer.WriteLine("Case #{0}: X won", x);
                    }
                    else if (O[0] == "OOOO" || O[1] == "OOOO" || O[2] == "OOOO" || O[3] == "OOOO" ||
                        (O[0][0] == 'O' && O[1][1] == 'O' && O[2][2] == 'O' && O[3][3] == 'O') ||
                        (O[0][3] == 'O' && O[1][2] == 'O' && O[2][1] == 'O' && O[3][0] == 'O') ||
                        (O[0][0] == 'O' && O[1][0] == 'O' && O[2][0] == 'O' && O[3][0] == 'O') ||
                        (O[0][1] == 'O' && O[1][1] == 'O' && O[2][1] == 'O' && O[3][1] == 'O') ||
                        (O[0][2] == 'O' && O[1][2] == 'O' && O[2][2] == 'O' && O[3][2] == 'O') ||
                        (O[0][3] == 'O' && O[1][3] == 'O' && O[2][3] == 'O' && O[3][3] == 'O'))
                    {
                        Console.WriteLine("Case #{0}: O won", x);
                        writer.WriteLine("Case #{0}: O won", x);
                    }
                    else if (isComplete)
                    {
                        Console.WriteLine("Case #{0}: Draw", x);
                        writer.WriteLine("Case #{0}: Draw", x);
                    }
                    else
                    {
                        Console.WriteLine("Case #{0}: Game has not completed", x);
                        writer.WriteLine("Case #{0}: Game has not completed", x);
                    }
                }

                writer.Close();
            }
        }
    }
}
