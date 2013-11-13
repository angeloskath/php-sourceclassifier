using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace TTTT
{
    class Program
    {

        static void test(string[] b, int t)
        {
            string c = "XO";
            for (int k = 0; k < 2; k++)
            {
                for (int i = 0; i < 4; i++)
                {
                    bool x = true;

                    for (int j = 0; j < 4; j++)
                        if (b[i][j] != c[k] && b[i][j] != 'T')
                            x = false;
                    if (x)
                    {
                        Console.WriteLine("Case #{0}: {1} won", t, c[k]);
                        return;
                    }

                    x = true;

                    for (int j = 0; j < 4; j++)
                        if (b[j][i] != c[k] && b[j][i] != 'T')
                            x = false;
                    if (x)
                    {
                        Console.WriteLine("Case #{0}: {1} won", t, c[k]);
                        return;
                    }

                }

                bool y = true;

                for (int i = 0; i < 4; i++)
                    if (b[i][i] != c[k] && b[i][i] != 'T')
                        y = false;
                if (y)
                {
                    Console.WriteLine("Case #{0}: {1} won", t, c[k]);
                    return;
                }
                y = true;
                for (int i = 0; i < 4; i++)
                    if (b[i][3 - i] != c[k] && b[i][3 - i] != 'T')
                        y = false;
                if (y)
                {
                    Console.WriteLine("Case #{0}: {1} won", t, c[k]);
                    return;
                }
            }

                for (int i = 0; i < 4; i++)
                    for (int j = 0; j < 4; j++)
                        if(b[i][j] == '.')
                    {
                        Console.WriteLine("Case #{0}: Game has not completed", t);
                        return;
                    }

                Console.WriteLine("Case #{0}: Draw", t);


        }

        static void Main(string[] args)
        {
            int T;
            T = int.Parse(Console.ReadLine());
            for (int t = 1; t <= T ; t++)
            {
                string[] b = new string[4];
                for (int i = 0; i < 4; i++)
                    b[i] = Console.ReadLine();
                if (t < T)
                    Console.ReadLine();
                test(b,t);
                
            }

        }
    }
}
