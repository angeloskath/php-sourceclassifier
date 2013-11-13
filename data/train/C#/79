using System;
using System.Collections;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Text;

namespace A
{
    class TestCase
    {
        public TestCase(int id, ArrayList stringArray)
        {
            if (stringArray.Count != 4)
            {
                throw new ArgumentException("Invalid argument");
            }

            this.Id = id;
            _columns = stringArray;
        }

        private Result GetResult()
        {
            Result result = Result.NotSet;

            // Check columns
            for (int i = 0; i < TableSize; i++ )
            {
                if (result != Result.NotSet)
                {
                    continue;
                }

                string column = _columns[i] as string;
                if (IsAllSameOwner(column.ToCharArray()))
                {
                    char current = (column[0] == 'T') ? column[1] : column[0];
                    result = (current == 'X') ? Result.Xwon : Result.Owon;
                }
            }

            // Check rows
            if (result == Result.NotSet)
            {
                for (int i = 0; i < TableSize; i++)
                {
                    if (result != Result.NotSet)
                    {
                        continue;
                    }

                    char[] chars = new char[4];
                    for (int j = 0; j < TableSize; ++j)
                    {
                        string column = _columns[j] as string;
                        chars[j] = column[i];
                    }

                    if (IsAllSameOwner(chars))
                    {
                        char current = (chars[0] == 'T') ? chars[1] : chars[0];
                        result = (current == 'X') ? Result.Xwon : Result.Owon;
                    }
                }
            }

            // Check diagonal
            if (result == Result.NotSet)
            {
                char[] chars = new char[4];
                chars[0] = (_columns[0] as string)[0];
                chars[1] = (_columns[1] as string)[1];
                chars[2] = (_columns[2] as string)[2];
                chars[3] = (_columns[3] as string)[3];

                if (IsAllSameOwner(chars))
                {
                    char current = (chars[0] == 'T') ? chars[1] : chars[0];
                    result = (current == 'X') ? Result.Xwon : Result.Owon;
                }
                else
                {
                    char[] chars2 = new char[4];
                    chars2[0] = (_columns[0] as string)[3];
                    chars2[1] = (_columns[1] as string)[2];
                    chars2[2] = (_columns[2] as string)[1];
                    chars2[3] = (_columns[3] as string)[0];

                    if (IsAllSameOwner(chars2))
                    {
                        char current = (chars2[0] == 'T') ? chars2[1] : chars2[0];
                        result = (current == 'X') ? Result.Xwon : Result.Owon;
                    }
                }
            }

            if (result == Result.NotSet)
            {
                for (int i = 0; i < TableSize; i++)
                {
                    string column = _columns[i] as string;
                    if (column.Contains('.'))
                    {
                        result = Result.NotCompleted;
                    }
                }

                if (result != Result.NotCompleted)
                {
                    result = Result.Draw;
                }
            }

            return result;
        }

        public string GetResultString()
        {
            switch (GetResult())
            {
                case Result.Xwon:
                    return "X won";
                case Result.Owon:
                    return "O won";
                case Result.Draw:
                    return "Draw";
                case Result.NotCompleted:
                    return "Game has not completed";
                default:
                    throw new NotSupportedException("Unsupported result");
            }
        }

        private enum Result : int
        {
            NotSet,
            Xwon,
            Owon,
            Draw,
            NotCompleted
        }

        private bool IsAllSameOwner(char[] chars)
        {
            bool isAllSameOwner = true;
            if (chars.Contains('.'))
            {
                isAllSameOwner = false;
            }
            else
            {
                char current = (chars[0] == 'T') ? chars[1] : chars[0];
                for (int j = 1; j < TableSize; j++)
                {
                    if (chars[j] != current && chars[j] != 'T')
                    {
                        isAllSameOwner = false;
                        break;
                    }
                }
            }
            return isAllSameOwner;
        }

        public int Id { get; private set; }
        private ArrayList _columns;
        private const int TableSize = 4;
    }

    class Program
    {
        static void Main(string[] args)
        {
            ArrayList testCases = new ArrayList();

            string inputFile = @"C:\yoshiko\programming\gcj\2013\QualificationROUnd\A\files\A-large.in";
            int index = 0;
            int testId = 1;
            ArrayList columns = new ArrayList();

            foreach (string line in File.ReadLines(inputFile))
            {
                if (index != 0)
                {
                    if(string.IsNullOrEmpty(line))
                    {
                        TestCase testCase = new TestCase(testId, columns);
                        testCases.Add(testCase);
                        Console.WriteLine("Board created: {0}", testId);

                        testId++;
                        columns = new ArrayList();
                    }
                    else
                    {
                        columns.Add(line);
                    }
                }

                index++;
            }

            if (columns.Count == 4)
            {
                TestCase testCase = new TestCase(testId, columns);
                testCases.Add(testCase);
                Console.WriteLine("Board created: {0}", testId);
            }

            using (System.IO.StreamWriter file = new System.IO.StreamWriter(@"C:\yoshiko\programming\gcj\2013\QualificationROUnd\A\files\A-large.out", false))
            {
                foreach (TestCase testCase in testCases)
                {
                    file.WriteLine("Case #{0}: {1}", testCase.Id, testCase.GetResultString());
                }
            }
        }

    }
}
