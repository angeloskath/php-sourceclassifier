using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace A
{
    class A
    {
        static void Main(string[] args)
        {
            StreamReader sr = new StreamReader("c:\\codejam\\2013\\qual\\A-large.in");
            StreamWriter sw = new StreamWriter("c:\\codejam\\2013\\qual\\A-large.out");


            int N = Int32.Parse(sr.ReadLine());
            foreach (int caseN in Enumerable.Range(1, N))
            {
                char[][] board = new char[4][];
                board[0] = sr.ReadLine().ToArray();
                board[1] = sr.ReadLine().ToArray();
                board[2] = sr.ReadLine().ToArray();
                board[3] = sr.ReadLine().ToArray();

                bool xwon = false;
                bool owon = false;
                
                for (int i = 0; i < 4; i++)
                {
                    //horiz, vert, diagonal
                    xwon |= Enumerable.Range(0, 4).All(x => board[x][i] == 'X' || board[x][i] == 'T');
                    owon |= Enumerable.Range(0, 4).All(x => board[x][i] == 'O' || board[x][i] == 'T');
                    xwon |= Enumerable.Range(0, 4).All(y => board[i][y] == 'X' || board[i][y] == 'T');
                    owon |= Enumerable.Range(0, 4).All(y => board[i][y] == 'O' || board[i][y] == 'T');                    
                }

                xwon |= Enumerable.Range(0, 4).All(i => board[i][i] == 'X' || board[i][i] == 'T');
                xwon |= Enumerable.Range(0, 4).All(i => board[i][3 - i] == 'X' || board[i][3 - i] == 'T');
                owon |= Enumerable.Range(0, 4).All(i => board[i][i] == 'O' || board[i][i] == 'T');
                owon |= Enumerable.Range(0, 4).All(i => board[i][3 - i] == 'O' || board[i][3 - i] == 'T');

                bool finished = (board[0].All( c => c != '.') && board[1].All( c => c != '.') && board[2].All( c => c != '.') && board[3].All( c => c != '.'));

                if (xwon)
                {
                    sw.WriteLine("Case #{0}: {1}", caseN, "X won");
                }
                else if (owon)
                {
                    sw.WriteLine("Case #{0}: {1}", caseN, "O won");
                }
                else
                {
                    if (!finished)
                    {
                        sw.WriteLine("Case #{0}: {1}", caseN, "Game has not completed");
                    }
                    else
                    {
                        sw.WriteLine("Case #{0}: {1}", caseN, "Draw");
                    }
                }

                //get rid of blank line
                sr.ReadLine();
                sw.Flush();
            }

        }
    }
}
