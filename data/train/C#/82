using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.IO;

namespace QualificationA
{
    class Program
    {
        enum Cell { X = 1, O = 2, Both = X | O, Empty }
        enum GameState { Draw, X, O, Running }


        static GameState SolveField(Cell[,] field)
        {
            for (int t = 0; t < 4; t++)
            {
                if (Enumerable.Range(0, 4).All(y => (field[t, y] & Cell.X) == Cell.X)) return GameState.X;
                if (Enumerable.Range(0, 4).All(x => (field[x, t] & Cell.X) == Cell.X)) return GameState.X;

                if (Enumerable.Range(0, 4).All(y => (field[t, y] & Cell.O) == Cell.O)) return GameState.O;
                if (Enumerable.Range(0, 4).All(x => (field[x, t] & Cell.O) == Cell.O)) return GameState.O;
            }
            if (Enumerable.Range(0, 4).All(t => (field[t, t] & Cell.X) == Cell.X)) return GameState.X;
            if (Enumerable.Range(0, 4).All(t => (field[t, 3 - t] & Cell.X) == Cell.X)) return GameState.X;

            if (Enumerable.Range(0, 4).All(t => (field[t, t] & Cell.O) == Cell.O)) return GameState.O;
            if (Enumerable.Range(0, 4).All(t => (field[t, 3 - t] & Cell.O) == Cell.O)) return GameState.O;

            return Enumerable.Range(0, 4).Any(x => Enumerable.Range(0, 4).Any(y => field[x, y] == Cell.Empty)) ? GameState.Running : GameState.Draw;
        }

        static void Main(string[] args)
        {
            StreamReader sr = new StreamReader(@"..\..\input.txt");
            StreamWriter sw = new StreamWriter(@"..\..\output.txt");

            Dictionary<GameState, string> text = new Dictionary<GameState, string> 
            {
                {GameState.X, "X won"},
                {GameState.O, "O won"},
                {GameState.Draw, "Draw"},
                {GameState.Running, "Game has not completed"}
            };

            int cnt = int.Parse(sr.ReadLine());
            for (int t = 1; t <= cnt; t++)
            {
                Cell[,] field = new Cell[4, 4];
                for (int x = 0; x < 4; x++)
                {
                    string str = sr.ReadLine();
                    for (int y = 0; y < 4; y++)
                        switch (str[y])
                        {
                            case 'X': field[x, y] = Cell.X; break;
                            case 'O': field[x, y] = Cell.O; break;
                            case 'T': field[x, y] = Cell.Both; break;
                            case '.': field[x, y] = Cell.Empty; break;
                        }
                }
                sw.WriteLine("Case #{0}: {1}", t, text[SolveField(field)]);
                sr.ReadLine();
            }

            sr.Close();
            sw.Close();
        }
    }
}