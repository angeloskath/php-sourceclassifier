using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace google_code_jam
{
    class Program
    {
        static void B(string[] s, int i, int j, ref int x, ref int o, ref int d)
        {
            string t = s[i].Substring(j, 1);
            if (t == "T")
            {
                x++;
                o++;
            }
            else if (t == "X")
            {
                x++;
            }
            else if (t == "O")
            {
                o++;
            }
            else
            {
                d = 1;
            }
        }

        static string C(int x, int o)
        {
            if (x == 4) return "X won";
            if (o == 4) return "O won";
            return null;
        }

        static string A(string[] s)
        {
            int m = s.Length;
            int d = 0;
            string r = "";

            int x, o;
            for (int i = 0; i < m; i++)
            {
                x = 0;
                o = 0;
                for (int j = 0; j < m; j++)
                {
                    B(s, i, j, ref x, ref o, ref  d);
                }
                r = C(x, o);
                if (r != null) return r;
            }

            for (int i = 0; i < m; i++)
            {
                x = 0;
                o = 0;
                for (int j = 0; j < m; j++)
                {
                    B(s, j, i, ref x, ref o, ref  d);
                }
                r = C(x, o);
                if (r != null) return r;
            }

            x = 0;
            o = 0;
            for (int i = 0; i < m; i++)
            {
                B(s, i, i, ref x, ref o, ref  d);
            }
            r = C(x, o);
            if (r != null) return r;

            x = 0;
            o = 0;
            for (int i = 0; i < m; i++)
            {
                B(s, m - i - 1, i, ref x, ref o, ref  d);
            }
            r = C(x, o);
            if (r != null) return r;

            if (d > 0) return "Game has not completed";
            return "Draw";
        }


        static void Main(string[] args)
        {
            StreamReader sr = new StreamReader(@"C:\tmp\test.in", Encoding.ASCII);
            string s = sr.ReadLine();
            string output = "";

            int n = int.Parse(s);
            int m = 4;
            for (int i = 0; i < n; i++)
            {

                string[] t = new string[m];
                for (int j = 0; j < m; j++)
                {
                    t[j] = sr.ReadLine();
                }
                string r = A(t);
                output += "Case #" + (i + 1).ToString() + ":" + " " + r + "\r\n";
                sr.ReadLine();
            }

            StreamWriter writer = new StreamWriter(@"C:\tmp\out.txt", false, Encoding.ASCII);
            writer.Write(output);
            writer.Close();
        }
    }
}
