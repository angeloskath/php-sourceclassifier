using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace GCJQA
{
    class Program
    {
        enum State
        {
            None,
            Draw,
            X,
            O
        }

        static State subsetState(Func<int, Char> subsetFunction)
        {
            State result = State.None;
            for (int i = 0; i < 4; i++)
            {
                Char c = subsetFunction(i);
                switch (c)
                {
                    case '.':
                        return State.None;
                    case 'X':
                        if (result == State.O)
                            result = State.Draw;
                        else if (result == State.None)
                            result = State.X;
                        break;
                    case 'O':
                        if (result == State.X)
                            result = State.Draw;
                        else if (result == State.None)
                            result = State.O;
                        break;
                }
            }
            return result;
        }

        static IEnumerable<Func<int, Char>> allSubsets(Char[,] position)
        {
            for (int i = 0; i < 4; i++)
            {
                yield return x => position[i, x];
                yield return x => position[x, i];
            }
            yield return x => position[x, x];
            yield return x => position[3 - x, x];
        }

        static void Main(string[] args)
        {
            var testCount = int.Parse(Console.ReadLine());
            for (int testNumber = 1; testNumber <= testCount; testNumber++)
            {
                var position = new Char[4, 4];
                for (int i = 0; i < 4; i++)
                {
                    var line = Console.ReadLine();
                    for (int j = 0; j < 4; j++)
                        position[i, j] = line[j];
                }
                Console.ReadLine();

                State result = State.None;
                bool filled = true;
                foreach (var subset in allSubsets(position))
                {
                    State state = subsetState(subset);
                    if (state == State.None)
                        filled = false;
                    else if (state == State.X)
                    {
                        result = State.X;
                        break;
                    }
                    else if (state == State.O)
                    {
                        result = State.O;
                        break;
                    }
                }
                Console.WriteLine("Case #{0}: {1}", testNumber, result == State.X ? "X won" : result == State.O ? "O won" : filled ? "Draw" : "Game has not completed");
            }
        }
    }
}
