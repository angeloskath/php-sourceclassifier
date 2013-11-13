using System;
using System.IO;
using System.Collections.Generic;
using System.Linq;

class Problem
{
    private static StreamReader reader;

    static void Solve(int cas)
    {
        List<string> s = Enumerable.Range(0, 4).Select(x => reader.ReadLine()).ToList();

        int[] dx = {0, 1, 1, 1};
        int[] dy = {1, 1, 0, -1};

        bool full = s.All(x => !x.Any(c => c == '.'));
        char[] player = {'X', 'O'};
        bool[] won = {false, false};
        for (int i = 0; i < 4; i++)
            for (int j = 0; j < 4; j++)
                for (int k = 0; k < 4; k++)
                    if (dx[k] * 3 + i < 4 && dy[k] * 3 + j < 4 && dy[k] * 3 + j >= 0)
            {
                string t = "";
                int u = i, v = j;
                for (int l = 0; l < 4; l++)
                {
                    t += s[u][v];
                    u += dx[k]; v += dy[k];
                }

                for (int l = 0; l < 2; l++)
                    won[l] |= t.All(c => c == player[l] || c == 'T');
            }

        Console.Write("Case #{0}: ", cas);
        for (int l = 0; l < 2; l++)
            if (won[l])
            {
                Console.WriteLine("{0} won", player[l]);
                return;
            }
        if (full) Console.WriteLine("Draw");
        else Console.WriteLine("Game has not completed");
    }

    public static void Main ()
    {
        var bs = new BufferedStream(Console.OpenStandardInput());
        reader = new StreamReader(bs);

        int t = int.Parse(reader.ReadLine());
        for (int i = 0; i < t; i++)
        {
            if (i > 0) reader.ReadLine();
            Solve(i + 1);
        }
    }
}
