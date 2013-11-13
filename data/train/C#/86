using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.IO;

namespace GoogleCodeJam2012
{
    class Program
    {
        static void Main(string[] args)
        {
            string fileName = "input.in";
            using (var reader = new StreamReader(fileName))
            {
                int cases = int.Parse(reader.ReadLine().Trim());
                using (var writer = new StreamWriter("output.out"))
                {
                    for (int i = 0; i < cases; i++)
                    {
                        var single = new short[4][];
                        bool zeroPresent = false;
                        for (int l = 0; l < 4; l++)
                        {
                            var line = reader.ReadLine();
                            var lineValues = line.ToCharArray();
                            single[l] = new short[4];
                            for (var r = 0; r < 4; r++)
                            {
                                var c = lineValues[r];
                                switch (c)
                                {
                                    case 'X':
                                        single[l][r] = 1;
                                        break;
                                    case 'O':
                                        single[l][r] = 2;
                                        break;
                                    case 'T':
                                        single[l][r] = 3;
                                        break;
                                    default:
                                        single[l][r] = 0;
                                        zeroPresent = true;
                                        break;
                                }
                            }
                        }
                        var skip = reader.ReadLine(); //seperator

                        var results = new List<short>();
                        results.Add((short)(single[0][0] & single[0][1] & single[0][2] & single[0][3]));
                        results.Add((short)(single[1][0] & single[1][1] & single[1][2] & single[1][3]));
                        results.Add((short)(single[2][0] & single[2][1] & single[2][2] & single[2][3]));
                        results.Add((short)(single[3][0] & single[3][1] & single[3][2] & single[3][3]));
                        results.Add((short)(single[0][0] & single[1][0] & single[2][0] & single[3][0]));
                        results.Add((short)(single[0][1] & single[1][1] & single[2][1] & single[3][1]));
                        results.Add((short)(single[0][2] & single[1][2] & single[2][2] & single[3][2]));
                        results.Add((short)(single[0][3] & single[1][3] & single[2][3] & single[3][3]));
                        results.Add((short)(single[0][0] & single[1][1] & single[2][2] & single[3][3]));
                        results.Add((short)(single[3][0] & single[2][1] & single[1][2] & single[0][3]));

                        var x = results.Where(grass => grass.Equals(1)).Count();
                        var o = results.Where(grass => grass.Equals(2)).Count();

                        string output = "";

                        if (x > o)
                            output = "X won";
                        else if (o > x)
                            output = "O won";
                        else if (zeroPresent)
                            output = "Game has not completed";
                        else
                            output = "Draw";

                        writer.WriteLine(string.Format("Case #{0}: {1}", i + 1, output));
                    }
                }
            }
        }




    }
}
