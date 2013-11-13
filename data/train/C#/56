using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace round_0 {
  public class ProblemA {
    public static void Run(string infile, string outfile) {
      using (System.IO.StreamReader sr = System.IO.File.OpenText(infile)) {
        using (System.IO.StreamWriter sw = System.IO.File.CreateText(outfile)) {
          //
          //
          //
          string[] s = new string[4];
          string[] ss = new string[10];

          const string XWON = "X won";
          const string OWON = "O won";
          const string DRAW = "Draw";
          const string GAME = "Game has not completed";

          int T = int.Parse(sr.ReadLine());

          for (int t = 1; t <= T; t++) {
            string result = "";
            for (int i = 0; i < 4; i++) s[i] = sr.ReadLine();

            for (int i = 0; i < 4; i++) ss[i] = s[i];
            for (int i = 0; i < 4; i++) ss[4 + i] = s[0].Substring(i, 1) + s[1].Substring(i, 1) + s[2].Substring(i, 1) + s[3].Substring(i, 1);
            ss[8] = s[0].Substring(0, 1) + s[1].Substring(1, 1) + s[2].Substring(2, 1) + s[3].Substring(3, 1);
            ss[9] = s[0].Substring(3, 1) + s[1].Substring(2, 1) + s[2].Substring(1, 1) + s[3].Substring(0, 1);

            if (result == "")
              for (int i = 0; i < 10; i++) {
                if (!ss[i].Contains('O') && !ss[i].Contains('.')) {
                  result = XWON;
                  break;
                }
              }

            if (result == "")
              for (int i = 0; i < 10; i++) {
                if (!ss[i].Contains('X') && !ss[i].Contains('.')) {
                  result = OWON;
                  break;
                }
              }

            if (result == "")
              for (int i = 0; i < 10; i++) {
                if (ss[i].Contains('.')) {
                  result = GAME;
                  break;
                }
              }

            if (result == "") result = DRAW;

            sw.WriteLine(string.Format("Case #{0}: {1}", t, result));
            sr.ReadLine();
          }
          //
          //
          //
        }
      }
    }
  }
}

