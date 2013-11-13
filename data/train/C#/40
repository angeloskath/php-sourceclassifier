using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace TTTT
{
    internal class Program
    {
        public static List<List<string>> ParseInput(string[] lines, int parameterCount)
        {
            int caseCount = 0;

            List<List<string>> cases = new List<List<string>>();
            List<string> paramSet = new List<string>();
            for (int index = 0; index < lines.Length; index++)
            {
                string line = lines[index];

                if (index == 0)
                {
                    if (!Int32.TryParse(line, out caseCount))
                    {
                        Console.WriteLine("Invalid line {0}:{1}", index, line);
                        break;
                    }
                }
                else
                {
                    paramSet.Add(line);

                    int paramIndex = (index - 1) % parameterCount;
                    if (paramIndex == parameterCount - 1)
                    {
                        cases.Add(paramSet);
                        paramSet = new List<string>();
                    }
                }
            }

            if (cases.Count != caseCount)
            {
                Console.WriteLine("Invalid case count");
            }

            return cases;
        }

        public static bool WhoWon(string str, int caseIndex)
        {
            int x = 0;
            int o = 0;
            int t = 0;
            foreach (char c in str)
            {
                switch (c)
                {
                    case 'X': ++x; break;
                    case 'O': ++o; break;
                    case 'T': ++t; break;
                    default: break;
                }
            }

            if (x == 4 || (x == 3 && t == 1))
            {
                Console.WriteLine("Case #{0}: X won", caseIndex + 1);
                return true;
            }
            else if (o == 4 || (o == 3 && t == 1))
            {
                Console.WriteLine("Case #{0}: O won", caseIndex + 1);
                return true;
            }
            return false;
        }

        private static void Main(string[] args)
        {
            string[] lines = System.IO.File.ReadAllLines(args[0]);
            List<List<string>> input = ParseInput(lines, 5);

            for (int caseIndex = 0; caseIndex < input.Count; caseIndex++)
            {
                List<string> problem = input[caseIndex];
                bool foundWinner = false;
                bool foundDot = false;

                //check vertical
                for (int i = 0; i < 4; i++)
                {
                    string str = "";
                    foreach (string line in problem)
                    {
                        if (line.Length > i)
                            str += line[i];
                    }

                    foundWinner = WhoWon(str, caseIndex);
                    if (foundWinner)
                    {
                        break;
                    }
                    foundDot |= str.IndexOf('.') != -1 && str.Length != 0;
                }
                if (foundWinner) continue;

                //check horizontal
                foreach (string line in problem)
                {
                    foundWinner = WhoWon(line, caseIndex);
                    if (foundWinner)
                    {
                        break;
                    }
                    foundDot |= line.IndexOf('.') != -1 && line.Length != 0;
                }
                if (foundWinner) continue;

                //check diagonal
                {
                    string str = "" + problem[0][0] + problem[1][1] + problem[2][2] + problem[3][3];
                    foundWinner = WhoWon(str, caseIndex);
                    if (foundWinner) continue;
                    foundDot |= str.IndexOf('.') != -1 && str.Length != 0;
                }

                {
                    string str = "" + problem[3][0] + problem[2][1] + problem[1][2] + problem[0][3];
                    foundWinner = WhoWon(str, caseIndex);
                    if (foundWinner) continue;
                    foundDot |= str.IndexOf('.') != -1 && str.Length != 0;
                }

                if (foundDot)
                    Console.WriteLine("Case #{0}: Game has not completed", caseIndex + 1);
                else
                    Console.WriteLine("Case #{0}: Draw", caseIndex + 1);
            }
        }
    }
}