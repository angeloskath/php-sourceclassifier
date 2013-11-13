using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace TicTacToe
{
    class Program
    {
        static void Main(string[] args)
        {
            IList<string> resultsOfCases = GetInputsFromFile("A-large.in");

            using (System.IO.StreamWriter file = new System.IO.StreamWriter("Output.txt"))
            {
                foreach (string line in resultsOfCases)
                {
                    file.WriteLine(line);
                }
            }
        }

        private static IList<string> GetInputsFromFile(string fileName)
        {
             IList<string> results = new List<string>();

             string[] lines = System.IO.File.ReadAllLines(fileName);
            //int cases = Int32.Parse(lines[0]);
            int caseCount = 1;
            for(int i = 1; i < lines.Count(); i=i+5)
            {
                char[,] aCase = new char [ 4, 4 ];
                GetRowValuesFromLine(new List<string> { lines[i], lines[i+1], lines[i+2], lines[i+3] }, aCase);
                string result = GetTheResultOfCase(aCase);
                results.Add("Case #" + caseCount +": " + result);
                caseCount++;
            }
            
            return results; ;
        }

        private static string GetTheResultOfCase(char[,] aCase)
        {
            if (CheckWinningPlayer(aCase, 'X'))
                return "X won";

            if (CheckWinningPlayer(aCase, 'O'))
                return "O won";

            for (int i = 0; i < 4; i++)
                for (int j = 0; j < 4; j++)
                    if (aCase[i, j] == '.')
                        return "Game has not completed";

            return "Draw";

        }

        private static bool CheckWinningPlayer(char[,] aCase, char player)
        {
            //rows
            for (int i = 0; i < 4; i++)
            {
                if (IsWinner(new List<char> { aCase[i, 0], aCase[i, 1], aCase[i, 2], aCase[i, 3] }, player))
                    return true;
            }

            //column
            for (int i = 0; i < 4; i++)
            {
                if (IsWinner(new List<char> { aCase[0, i], aCase[1, i], aCase[2, i], aCase[3, i] }, player))
                    return true;
            }

            //diagnol
            if (IsWinner(new List<char> { aCase[0, 0], aCase[1, 1], aCase[2, 2], aCase[3, 3] }, player))
                return true;

            if (IsWinner(new List<char> { aCase[0, 3], aCase[1, 2], aCase[2, 1], aCase[3, 0] }, player))
                return true;

            return false;


        }

        private static bool IsWinner(IEnumerable<char> inputs, char winningChar)
        {
            if (inputs.Count(c => c == winningChar) == 4)
                return true;

            if (inputs.Count(c => c == winningChar) == 3 
                && inputs.Any(ch => ch == 'T'))
                return true;

            return false;
        }
        private static void GetRowValuesFromLine(List<string> row, char[,] aCase)
        {
            for (int i = 0; i < 4; i++)
            {
                char[] chars = row[i].ToCharArray();
                for (int j = 0; j < 4; j++)
                    aCase[i, j] = chars[j];

            }
        }



    }
}
