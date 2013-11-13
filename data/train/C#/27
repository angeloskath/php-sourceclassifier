

namespace CodeJam
{
    using System;

    public class Program
    {
        static void Main(string[] args)
        {
            var problem = new ProblemA();

            problem.Solve(new InputHelper(Console.In), Console.Out);
        }
    }
}﻿

namespace CodeJam
{

    public class ProblemA : ProblemBase
    {
        private string xWon = "X won";
        private string oWon = "O won";
        private string draw = "Draw";
        private string notDone = "Game has not completed";

        protected override string SolveOneCase(InputHelper input)
        {
            string[] board = new string[4];
            for (int i = 0; i < 4; i++ )
            {
                board[i] = input.ReadLine();
            }
            input.ReadLine();

            if (checkWin('X', board))
                return xWon;

            if (checkWin('O', board))
                return oWon;

            for (int i = 0; i < 4; i++)
            {
                if (board[i].Contains("."))
                    return notDone;
            }

            return draw;
        }

        private bool checkWin(char c, string[] board)
        {
            for (int i = 0; i < 4; i++)
            {
                bool ok = true;
                for (int j = 0; j < 4; j++)
                {
                    if( board[i][j] == c || board[i][j] == 'T')
                        continue;

                    ok = false;
                }

                if (ok)
                    return true;
            }

            for (int i = 0; i < 4; i++)
            {
                bool ok = true;
                for (int j = 0; j < 4; j++)
                {
                    if (board[j][i] == c || board[j][i] == 'T')
                        continue;

                    ok = false;
                }

                if (ok)
                    return true;
            }

            bool ok2 = true;
            for (int i = 0; i < 4; i++ )
            {
                if( board[i][i] == c || board [i][i] == 'T')
                    continue;
                ok2 = false;
            }
            if (ok2)
                return true;

            ok2 = true;
            for (int i = 0; i < 4; i++)
            {
                if (board[i][3-i] == c || board[i][3-i] == 'T')
                    continue;
                ok2 = false;
            }
            if (ok2)
                return true;


            return false;
        }
    }
}
﻿

namespace CodeJam
{
    using System.IO;

    public abstract class ProblemBase
    {
        protected int NumberOfCases;

        protected abstract string SolveOneCase(InputHelper input);

        protected virtual void SetupAndGetNumberOfCases(InputHelper input)
        {
            NumberOfCases = input.GetInt();
        }

        public void Solve(InputHelper input, TextWriter output)
        {
            SetupAndGetNumberOfCases(input);

            for (int i = 0; i < NumberOfCases; i++)
            {
                output.WriteLine(string.Format("Case #{0}: {1}", i + 1, SolveOneCase(input)));
            }
        }
    }
}﻿
namespace CodeJam
{
    using System.Collections;
    using System;
    using System.IO;
    using System.Reflection;


    public class InputHelper
    {
        private readonly TextReader textReader;

        private IEnumerator enumerator;

        public InputHelper(TextReader textReader)
        {
            this.textReader = textReader;
            this.enumerator = (new string[0]).GetEnumerator();
        }

        public string ReadLine()
        {
            return textReader.ReadLine();
        }

        public string[] GetStringArray()
        {
            return ReadLine().Split(new string[0], StringSplitOptions.RemoveEmptyEntries);
        }

        public int[] GetIntArray()
        {
            string[] tokens = GetStringArray();
            int length = tokens.Length;

            var values = new int[length];

            for (int i = 0; i < length; i++)
            {
                values[i] = int.Parse(tokens[i]);
            }

            return values;
        }

        public long[] GetLongArray()
        {
            string[] tokens = GetStringArray();
            int length = tokens.Length;

            var values = new long[length];

            for (int i = 0; i < length; i++)
            {
                values[i] = long.Parse(tokens[i]);
            }

            return values;
        }

        public string GetString()
        {
            while (enumerator.MoveNext() == false)
            {
                enumerator = GetStringArray().GetEnumerator();
            }

            return (string)enumerator.Current;
        }

        public int GetInt()
        {
            return int.Parse(GetString());
        }

        public long GetLong()
        {
            return long.Parse(GetString());
        }

        // use this to get other types. Not tested yet.
        public T Get<T>()
        {
            MethodInfo method = typeof (T).GetMethod("Parse", new[] {typeof (string)});

            return (T) method.Invoke(null, new[] {GetString()});
        }
    }
}