using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace TicTacToeTonk
{
    class Program
    {
        static void Main(string[] args)
        {
            using (var reader = new StreamReader("in.txt"))
            using (var writer = new StreamWriter("out.txt"))
            {
                reader.ReadLine();

                int caseID = 1;
                while (!reader.EndOfStream)
                {
                    var grid = ReadGrid(reader);
                    reader.ReadLine();

                    var result = GetResult(grid);
                    writer.WriteLine("Case #{0}: {1}", caseID, result);
                    caseID++;
                }
            }
        }

        private static string GetResult(char[,] grid)
        {
            Result result = Result.Draw;

            // rows
            for (var i = 0; i < 4; i++)
            {
                var rowResult = GetResult(grid, i, 0, 0, 1);
                result = (Result)Math.Max((int)result, (int)rowResult);
            }

            // columns
            for (var i = 0; i < 4; i++)
            {
                var columnResult = GetResult(grid, 0, i, 1, 0);
                result = (Result)Math.Max((int)result, (int)columnResult);
            }

            // diagonals
            var diagonalResult = GetResult(grid, 0, 0, 1, 1);
            result = (Result)Math.Max((int)result, (int)diagonalResult);
            diagonalResult = GetResult(grid, 0, 3, 1, -1);
            result = (Result)Math.Max((int)result, (int)diagonalResult);

            switch (result)
            {
                case Result.O:
                    return "O won";

                case Result.X:
                    return "X won";

                case Result.Draw:
                    return "Draw";

                default:
                    return "Game has not completed";
            }
        }

        enum Result
        {
            Draw,
            Incomplete,
            O,
            X
        }

        private static Result GetResult(char[,] grid, int xstart, int ystart, int xinc, int yinc)
        {
            int xCount = 0;
            int oCount = 0;
            int tCount = 0;

            var x = xstart;
            var y = ystart;

            for (var i = 0; i < 4; i++)
            {
                switch (grid[x, y])
                {
                    case 'X':
                        xCount++;
                        break;
                    case 'O':
                        oCount++;
                        break;
                    case 'T':
                        tCount++;
                        break;
                    case '.':
                        return Result.Incomplete;
                }

                x += xinc;
                y += yinc;
            }

            if (xCount == 4 || (xCount == 3 && tCount == 1)) return Result.X;
            if (oCount == 4 || (oCount == 3 && tCount == 1)) return Result.O;
            return Result.Draw;
        }

        private static char[,] ReadGrid(StreamReader reader)
        {
            var grid = new char[4, 4];
            for (var i = 0; i < 4; i++)
            {
                var line = reader.ReadLine();
                for (var j = 0; j < 4; j++)
                {
                    grid[i, j] = line[j];
                }
            }
            return grid;
        }
    }
}
