using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace QualificationProblemA
{
    using System.IO;

    class Program
    {
        private static string inputFilePath = @"C:\Users\Kai\Downloads\A-large.in";

        static void Main(string[] args)
        {
            Console.SetOut(new StreamWriter("C:/temp/output.txt"));

            var input = ReadInput();
            var output = Compute(input);
            PrintOutput(output);

            Console.Out.Flush();
            //Console.ReadLine();
        }

        private static void PrintOutput(Output output)
        {
            for (int i = 0; i < output.Results.Count; i++)
            {
                Console.WriteLine("Case #{0}: {1}", i + 1, output.Results[i].Message);
            }
        }

        private static Output Compute(Input input)
        {
            var output = new Output();

            foreach (var c in input.Cases)
            {
                output.Results.Add(Compute(c));
            }

            return output;
        }

        private static Result Compute(TestCase input)
        {
            var winner = GetWinner(input.Board, input.Board.GetLength(0), GetRow);
            winner = winner ?? GetWinner(input.Board, input.Board.GetLength(1), GetCol);
            winner = winner ?? GetWinner(input.Board, 2, GetDiagonal);

            if (winner != null)
            {
                return new Result { Message = winner + " won" };
            }
            else if (IsGameComplete(input.Board))
            {
                return new Result { Message = "Draw" };
            }
            else
            {
                return new Result { Message = "Game has not completed" };
            }
        }

        private static bool IsGameComplete(char[,] board)
        {
            for (int i = 0; i < board.GetLength(0); i++)
            {
                var row = GetRow(board, i);
                if (row.Any(c => c == '.')) return false;
            }

            return true;
        }

        private static char? GetWinner(char[,] board, int numChecks, Func<char[,], int, IEnumerable<char>> rowGenerator)
        {
            for (int i = 0; i < numChecks; i++)
            {
                var row = rowGenerator(board, i);

                var enumerable = row as char[] ?? row.ToArray();
                if (IsWinner(enumerable, 'X')) return 'X';
                if (IsWinner(enumerable, 'O')) return 'O';
            }

            return null;
        }

        private static IEnumerable<char> GetRow(char[,] board, int row)
        {
            for (int i = 0; i < board.GetLength(0); i++)
            {
                yield return board[row, i];
            }
        } 

        private static IEnumerable<char> GetCol(char[,] board, int col)
        {
            for (int i = 0; i < board.GetLength(1); i++)
            {
                yield return board[i, col];
            }
        }

        private static IEnumerable<char> GetDiagonal(char[,] board, int index)
        {
            for (int i = 0, j = index == 0 ? 0 : board.GetLength(0) - 1;
                 i < board.GetLength(0);
                 i++, j = index == 0 ? j + 1 : j - 1)
            {
                yield return board[i, j];
            }
        } 

        private static bool IsWinner(IEnumerable<char> row, char player)
        {
            return row.All(c => c == player || c == 'T');
        }

        private static Input ReadInput()
        {
            var input = new Input();

            var inputFile = File.ReadLines(inputFilePath);
            input.Cases = new List<TestCase>();

            var testCase = new TestCase { Board = new char[4, 4] };
            int row = 0;
            foreach (var line in inputFile.Skip(1))
            {
                if (line.Length == 0)
                {
                    input.Cases.Add(testCase);
                    testCase = new TestCase { Board = new char[4,4] };
                    row = 0;
                }
                else
                {
                    for (int i = 0; i < line.Length; i++)
                    {
                        testCase.Board[row, i] = line[i];
                    }
                    row++;
                }
            }

            return input;
        }
    }

    internal class Output
    {
        public Output()
        {
            Results = new List<Result>();
        }

        public IList<Result> Results { get; set; }
    }

    internal class Input
    {
        public IList<TestCase> Cases { get; set; }
    }

    internal class TestCase
    {
        public char[,] Board { get; set; }
    }

    internal class Result
    {
        public string Message { get; set; }
    }
}
