using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.IO;
using System.Threading.Tasks;

namespace TicTacToeTomek
{
    class Program
    {
        static void Main(string[] args)
        {
            string file = "A-large.in";
            if (!File.Exists(file))
                Console.WriteLine(String.Format("File {0} doesn't exist", file));
            StreamReader reader = new StreamReader(file);
            int datasets = int.Parse(reader.ReadLine());
            byte[] result = new byte[datasets]; //1-X, 2-O, 0-D, 3-NC
            bool zero;
            for (int i = 0; i < datasets; ++i)
            {
                zero = false;
                int[,] input = new int[4, 4];
                for (int j = 0; j < 4; ++j)
                {
                    string tmp = reader.ReadLine();
                    for (int k = 0; k < 4; ++k)
                        switch (tmp[k])
                        {
                            case 'T':
                                input[j, k] = 1;
                                break;
                            case '.':
                                input[j, k] = 0;
                                zero = true;
                                break;
                            case 'O':
                                input[j, k] = -2;
                                break;
                            case 'X':
                                input[j, k] = 2;
                                break;
                        }
                }
                reader.ReadLine();
                bool finish = false;
                for (int j = 0; j < 4; ++j)
                {
                    if (input[j, 0] + input[j, 1] + input[j, 2] + input[j, 3] == 8
                        || input[j, 0] + input[j, 1] + input[j, 2] + input[j, 3] == 7)
                    {
                        result[i] = 1;
                        finish = true;
                        break;
                    }
                    if (input[j, 0] + input[j, 1] + input[j, 2] + input[j, 3] == -5
                        || input[j, 0] + input[j, 1] + input[j, 2] + input[j, 3] == -8)
                    {
                        result[i] = 2;
                        finish = true;
                        break;
                    }

                    if (input[0, j] + input[1, j] + input[2, j] + input[3, j] == 8
                        || input[0, j] + input[1, j] + input[2, j] + input[3, j] == 7)
                    {
                        result[i] = 1;
                        finish = true;
                        break;
                    }
                    if (input[0, j] + input[1, j] + input[2, j] + input[3, j] == -5
                        || input[0, j] + input[1, j] + input[2, j] + input[3, j] == -8)
                    {
                        result[i] = 2;
                        finish = true;
                        break;
                    }
                }
                if (finish) continue;
                if (input[0, 0] + input[1, 1] + input[2, 2] + input[3, 3] == 8
                     || input[0, 0] + input[1, 1] + input[2, 2] + input[3, 3] == 7)
                {
                    result[i] = 1;
                    continue;
                }
                if (input[0, 0] + input[1, 1] + input[2, 2] + input[3, 3] == -5
                    || input[0, 0] + input[1, 1] + input[2, 2] + input[3, 3] == -8)
                {
                    result[i] = 2;
                    continue;
                }

                if (input[3, 0] + input[2, 1] + input[1, 2] + input[0, 3] == 8
                    || input[3, 0] + input[2, 1] + input[1, 2] + input[0, 3] == 7)
                {
                    result[i] = 1;
                    continue;
                }
                if (input[3, 0] + input[2, 1] + input[1, 2] + input[0, 3] == -5
                    || input[3, 0] + input[2, 1] + input[1, 2] + input[0, 3] == -8)
                {
                    result[i] = 2;
                    continue;
                }

                if (zero) result[i] = 3;
                else result[i] = 0;
            }
            StreamWriter writer = new StreamWriter(file + ".out");
            for (int i = 0; i < datasets; ++i)
                switch (result[i])
                {
                    case 0:
                        writer.WriteLine(String.Format("Case #{0}: Draw", i + 1));
                        break;
                    case 1:
                        writer.WriteLine(String.Format("Case #{0}: X won", i + 1));
                        break;
                    case 2:
                        writer.WriteLine(String.Format("Case #{0}: O won", i + 1));
                        break;
                    case 3:
                        writer.WriteLine(String.Format("Case #{0}: Game has not completed", i + 1));
                        break;
                }
            writer.Flush();
            writer.Close();
        }
    }
}
