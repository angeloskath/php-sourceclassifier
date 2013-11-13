using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.IO;

namespace codeJam2013QRnd
{
    class Program
    {
        static void Main(string[] args)
        {
            for (int cx = 1; cx <= FileOPS.TotalNumofCases; cx++)
            {
                bool win = false;
                FileOPS.ReadNextCase();

                int xcnt = 0, Tcnt = 0, ocnt = 0, dcnt=0;
               
                // rows------------------------------------------------------------------------------------------------------------------
                for (int r = 0; r < 4; r++)
                {
                    for (int c = 0; c < 4; c++)
                    {
                        if (FileOPS.curCase[r, c] == 'X') xcnt++;
                        if (FileOPS.curCase[r, c] == 'T') Tcnt++;
                        if (FileOPS.curCase[r, c] == '.') dcnt++;
                        if (FileOPS.curCase[r, c] == 'O') ocnt++;                                      
                    }

                    if (xcnt == 4 || (xcnt == 3 && Tcnt == 1)) { FileOPS.WriteNextcase("X won"); win = true; break; }
                    if (ocnt == 4 || (ocnt == 3 && Tcnt == 1)) { FileOPS.WriteNextcase("O won"); win = true; break; }

                    xcnt = 0; ocnt = 0; Tcnt = 0;
                 }
                if (win) { continue; }

                // columns------------------------------------------------------------------------------------------------------------------
                for (int c = 0; c< 4; c++)
                {
                    for (int r = 0; r < 4; r++)
                    {
                        if (FileOPS.curCase[r, c] == 'X') xcnt++;
                        if (FileOPS.curCase[r, c] == 'T') Tcnt++;
                        if (FileOPS.curCase[r, c] == '.') dcnt++;
                        if (FileOPS.curCase[r, c] == 'O') ocnt++;
                    }

                    if (xcnt == 4 || (xcnt == 3 && Tcnt == 1)) { FileOPS.WriteNextcase("X won"); win = true; break; }
                    if (ocnt == 4 || (ocnt == 3 && Tcnt == 1)) { FileOPS.WriteNextcase("O won"); win = true; break; }

                    xcnt = 0; ocnt = 0; Tcnt = 0;
                }
                if (win) { continue; }
                
                // diagonal 1-------------------------------------------------------------------
                for (int c = 0; c < 3; )
                {
                    for (int r = 0; r < 4; r++)
                    {
                        if (FileOPS.curCase[r, c] == 'X') xcnt++;
                        if (FileOPS.curCase[r, c] == 'T') Tcnt++;
                        if (FileOPS.curCase[r, c] == '.') dcnt++;
                        if (FileOPS.curCase[r, c] == 'O') ocnt++;

                        c++;
                    }

                    if (xcnt == 4 || (xcnt == 3 && Tcnt == 1)) { FileOPS.WriteNextcase("X won"); win = true; break; }
                    if (ocnt == 4 || (ocnt == 3 && Tcnt == 1)) { FileOPS.WriteNextcase("O won"); win = true; break; }

                    xcnt = 0; ocnt = 0; Tcnt = 0;
                }
                if (win) { continue; }
                 
                //diagonal 2
                // diagonal 2-------------------------------------------------------------------
                for (int c = 3; c > 1; )
                {
                    for (int r = 0; r < 4; r++)
                    {
                        if (FileOPS.curCase[r, c] == 'X') xcnt++;
                        if (FileOPS.curCase[r, c] == 'T') Tcnt++;
                        if (FileOPS.curCase[r, c] == '.') dcnt++;
                        if (FileOPS.curCase[r, c] == 'O') ocnt++;

                        c--;
                    }

                    if (xcnt == 4 || (xcnt == 3 && Tcnt == 1)) { FileOPS.WriteNextcase("X won"); win = true; break; }
                    if (ocnt == 4 || (ocnt == 3 && Tcnt == 1)) { FileOPS.WriteNextcase("O won"); win = true; break; }

                    xcnt = 0; ocnt = 0; Tcnt = 0;
                }
                if (win) { continue; }

                if (dcnt > 0)
                {
                    FileOPS.WriteNextcase("Game has not completed");
                }
                else
                {
                    FileOPS.WriteNextcase("Draw"); 
                }

            }

            Console.Read();
        }
    }

   public static class FileOPS
    {
        public static int TotalNumofCases;
        static int CurrPTR = 0;
        static string fileInPath = @"C:\Users\dkulkarni1\Downloads\A-large.in";
        static string fileOutPath = @"C:\Users\dkulkarni1\Downloads\test.txt";
        static int outCunter = 1;        
        public static char[,] curCase;
        static string[] AllLines;

        static FileOPS()
        {
            AllLines = File.ReadAllLines(fileInPath);
            TotalNumofCases = Convert.ToInt32(ReadNextLine());
        }

        public static string ReadNextLine()
        {
            return AllLines[CurrPTR++];
        }

        public static void ReadNextCase()
        {
            curCase = new char[4, 4];
            string aline;

            for(int i =0 ;i<4 ;i++)
            {
                aline = ReadNextLine();
                for (int k = 0; k<4 ;k++)
                {
                    curCase[i, k] = aline[k];
                }                 
            }

            if ( !(CurrPTR == AllLines.Count()))
                ReadNextLine();
        }

        public static void WriteNextcase(string ans)
        {

            string[] ot = new string[] { "Case #" + outCunter.ToString() + ": " + ans };

            if (outCunter == 1)
                File.WriteAllLines(fileOutPath, ot);
            else if (!(outCunter == TotalNumofCases))
                File.AppendAllLines(fileOutPath, ot);
            else
                File.AppendAllText(fileOutPath, "Case #" + outCunter.ToString() + ": " + ans);

            outCunter++;

        }
    }

}
