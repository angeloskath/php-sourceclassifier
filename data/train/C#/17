using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace a_TicTacToeTomek
{
    class Program
    {
        static void Main(string[] args)
        {
            using (var inputStream = new StreamReader("..\\..\\input.txt"))
            using (var outputStream = new StreamWriter("..\\..\\output.txt.", false))
            {
                var totalCases = int.Parse(inputStream.ReadLine());

                for (var currentCase = 1; currentCase <= totalCases; currentCase++)
                {
                    var lines = new List<char[]>();
                    for (var i = 1; i <= 4; i++)
                        lines.Add(inputStream.ReadLine().ToCharArray());
                    inputStream.ReadLine(); //empty line

                    if (HasPlayerWon(lines, 'X'))
                        outputStream.WriteLine("Case #{0}: X won", currentCase);
                    else if (HasPlayerWon(lines, 'O'))
                        outputStream.WriteLine("Case #{0}: O won", currentCase);
                    else if (lines.Any(line => line.Any(field => field == '.')))
                        outputStream.WriteLine("Case #{0}: Game has not completed", currentCase);
                    else
                        outputStream.WriteLine("Case #{0}: Draw", currentCase);
                }
            }
        }

        static bool HasPlayerWon(List<char[]> board, char player)
        {
            return Enumerable.Range(0, 4).Any(row => Enumerable.Range(0, 4).All(column => board[row][column] == player || board[row][column] == 'T'))
                || Enumerable.Range(0, 4).Any(column => Enumerable.Range(0, 4).All(row => board[row][column] == player || board[row][column] == 'T'))
                || Enumerable.Range(0, 4).All(z => board[z][z] == player || board[z][z] == 'T')
                || Enumerable.Range(0, 4).All(z => board[3 - z][z] == player || board[3 - z][z] == 'T');
        }
    }
}
