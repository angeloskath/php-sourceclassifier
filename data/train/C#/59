using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.IO;

class ProblemA
{
    private static char[][] board = new char[4][];

    static void Main(string[] args)
    {
        StreamReader reader = new StreamReader(@"D:\codejam\A-large.in");
        StreamWriter writer = new StreamWriter(@"D:\codejam\A-large.out");
        int T = Int32.Parse(reader.ReadLine().Trim());
        for (int n = 1; n <= T; n++)
        {
            // read data
            for (int i = 0; i < 4; i++)
            {
                board[i] = reader.ReadLine().Trim().ToCharArray();
            }

            if ((board[0][0] == 'X' || board[0][0] == 'T')
                && (board[1][1] == 'X' || board[1][1] == 'T')
                && (board[2][2] == 'X' || board[2][2] == 'T')
                && (board[3][3] == 'X' || board[3][3] == 'T'))
            {
                writer.WriteLine(String.Format("Case #{0}: X won", n));
                reader.ReadLine();
                continue;
            }
            if ((board[0][3] == 'X' || board[0][3] == 'T')
                && (board[1][2] == 'X' || board[1][2] == 'T')
                && (board[2][1] == 'X' || board[2][1] == 'T')
                && (board[3][0] == 'X' || board[3][0] == 'T'))
            {
                writer.WriteLine(String.Format("Case #{0}: X won", n));
                reader.ReadLine();
                continue;
            }
            if ((board[0][0] == 'O' || board[0][0] == 'T')
                && (board[1][1] == 'O' || board[1][1] == 'T')
                && (board[2][2] == 'O' || board[2][2] == 'T')
                && (board[3][3] == 'O' || board[3][3] == 'T'))
            {
                writer.WriteLine(String.Format("Case #{0}: O won", n));
                reader.ReadLine();
                continue;
            }
            if ((board[0][3] == 'O' || board[0][3] == 'T')
                && (board[1][2] == 'O' || board[1][2] == 'T')
                && (board[2][1] == 'O' || board[2][1] == 'T')
                && (board[3][0] == 'O' || board[3][0] == 'T'))
            {
                writer.WriteLine(String.Format("Case #{0}: O won", n));
                reader.ReadLine();
                continue;
            }

            bool hasDot = false;
            bool hasResult = false;
            for (int i = 0; i < 4; i++)
            {
                bool allXH = true;
                bool allXV = true;
                bool allOH = true;
                bool allOV = true;
                for (int j = 0; j < 4; j++)
                {
                    // H
                    switch (board[i][j])
                    {
                        case '.':
                            hasDot = true;
                            allXH = false;
                            allOH = false;
                            break;
                        case 'X':
                            allOH = false;
                            break;
                        case 'O':
                            allXH = false;
                            break;
                        default:
                            break;
                    }
                    // V
                    switch (board[j][i])
                    {
                        case '.':
                            hasDot = true;
                            allXV = false;
                            allOV = false;
                            break;
                        case 'X':
                            allOV = false;
                            break;
                        case 'O':
                            allXV = false;
                            break;
                        default:
                            break;
                    }
                }
                if (allXV || allXH)
                {
                    writer.WriteLine(String.Format("Case #{0}: X won", n));
                    reader.ReadLine();
                    hasResult = true;
                    break;
                }
                if (allOV || allOH)
                {
                    writer.WriteLine(String.Format("Case #{0}: O won", n));
                    reader.ReadLine();
                    hasResult = true;
                    break;
                }
            }
            if (hasResult)
            {
                continue;
            }
            if (hasDot)
            {
                writer.WriteLine(String.Format("Case #{0}: Game has not completed", n));
                reader.ReadLine();
            }
            else
            {
                writer.WriteLine(String.Format("Case #{0}: Draw", n));
                reader.ReadLine();
            }
        }
        writer.Flush();
        writer.Close();
        reader.Close();
    }
}
