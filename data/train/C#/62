using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.IO;

namespace TTTT
{
    class Program
    {
        static int numberOfTestcases = 0;
        static string[] allInputLines, allOutputLines;

        static string XWON = "X won";
        static string OWON = "O won";
        static string DRAW = "Draw";
        static string NOTDONE = "Game has not completed";

        static void Main(string[] args)
        {
            allInputLines = File.ReadAllLines("Input.txt");
            numberOfTestcases = int.Parse(allInputLines[0].Trim());
            allOutputLines = new String[numberOfTestcases];
            for (int i = 1; i <= numberOfTestcases; i++)
            {
                string output = TTTT(i);
                allOutputLines[i - 1] = String.Format("Case #{0}: {1}", i, output);
            }
            File.WriteAllLines("Output.txt", allOutputLines);
        }

        static string TTTT(int testCase)
        {
            int firstLine = testCase * 5 - 4;
            int endLine = testCase * 5 - 1;
            //Check who finished the turn
            int xCount = 0;
            int oCount = 0;
            for (int i = firstLine; i <= endLine; i++)
            {
                for (int j = 0; j < 4; j++)
                    if (allInputLines[i][j] == 'X')
                        xCount++;
                    else if (allInputLines[i][j] == 'O')
                        oCount++;
            }
            if (xCount > oCount)
            {
                //Check if X WON horizontal
                for (int i = firstLine; i <= endLine; i++)
                {
                    if (allInputLines[i].Replace('T', 'X') == "XXXX")
                        return XWON;
                }
                //Check if X WON Vertical
                for (int j = 0; j < 4; j++)
                {
                    if ((allInputLines[firstLine][j] == 'X' || allInputLines[firstLine][j] == 'T') &&
                        (allInputLines[firstLine + 1][j] == 'X' || allInputLines[firstLine + 1][j] == 'T') &&
                        (allInputLines[firstLine + 2][j] == 'X' || allInputLines[firstLine + 2][j] == 'T') &&
                        (allInputLines[firstLine + 3][j] == 'X' || allInputLines[firstLine + 3][j] == 'T'))
                        return XWON;
                }
                //Check if X WON diagonal left to right
                if ((allInputLines[firstLine][0] == 'X' || allInputLines[firstLine][0] == 'T') &&
                    (allInputLines[firstLine + 1][1] == 'X' || allInputLines[firstLine + 1][1] == 'T') &&
                    (allInputLines[firstLine + 2][2] == 'X' || allInputLines[firstLine + 2][2] == 'T') &&
                    (allInputLines[firstLine + 3][3] == 'X' || allInputLines[firstLine + 3][3] == 'T'))
                    return XWON;
                //Check if X WON diagonal right to left
                if ((allInputLines[firstLine][3] == 'X' || allInputLines[firstLine][3] == 'T') &&
                    (allInputLines[firstLine + 1][2] == 'X' || allInputLines[firstLine + 1][2] == 'T') &&
                    (allInputLines[firstLine + 2][1] == 'X' || allInputLines[firstLine + 2][1] == 'T') &&
                    (allInputLines[firstLine + 3][0] == 'X' || allInputLines[firstLine + 3][0] == 'T'))
                    return XWON;
            }
            //Check if O WON horizontal
            for (int i = firstLine; i <= endLine; i++)
            {
                if (allInputLines[i].Replace('T', 'O') == "OOOO")
                    return OWON;
            }
            //Check if O WON Vertical
            for (int j = 0; j < 4; j++)
            {
                if ((allInputLines[firstLine][j] == 'O' || allInputLines[firstLine][j] == 'T') &&
                    (allInputLines[firstLine + 1][j] == 'O' || allInputLines[firstLine + 1][j] == 'T') &&
                    (allInputLines[firstLine + 2][j] == 'O' || allInputLines[firstLine + 2][j] == 'T') &&
                    (allInputLines[firstLine + 3][j] == 'O' || allInputLines[firstLine + 3][j] == 'T'))
                    return OWON;
            }
            //Check if O WON diagonal left to right
            if ((allInputLines[firstLine][0] == 'O' || allInputLines[firstLine][0] == 'T') &&
                (allInputLines[firstLine + 1][1] == 'O' || allInputLines[firstLine + 1][1] == 'T') &&
                (allInputLines[firstLine + 2][2] == 'O' || allInputLines[firstLine + 2][2] == 'T') &&
                (allInputLines[firstLine + 3][3] == 'O' || allInputLines[firstLine + 3][3] == 'T'))
                return OWON;
            //Check if O WON diagonal right to left
            if ((allInputLines[firstLine][3] == 'O' || allInputLines[firstLine][3] == 'T') &&
                (allInputLines[firstLine + 1][2] == 'O' || allInputLines[firstLine + 1][2] == 'T') &&
                (allInputLines[firstLine + 2][1] == 'O' || allInputLines[firstLine + 2][1] == 'T') &&
                (allInputLines[firstLine + 3][0] == 'O' || allInputLines[firstLine + 3][0] == 'T'))
                return OWON;
            //Check if there is still moves left
            for (int i = firstLine; i <= endLine; i++)
                if (allInputLines[i].Contains('.'))
                    return NOTDONE;
            //its a draw
            return DRAW;
        }
    }
}
