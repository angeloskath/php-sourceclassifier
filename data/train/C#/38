using System;
using System.Collections.Generic;
using System.Text;
using System.IO;
using System.Linq;

namespace CodeJam
{
    class TicTacToemek
    {
        static void Main(string[] args)
        {
            new TicTacToemek().Solve();
        }

        void Solve()
        {
            using (StreamReader sc = new StreamReader("A-large.in"))
            using (StreamWriter sout = new StreamWriter("A-large.out"))
            {
                int cas = sc.Next<int>();
                for (int zz = 1; zz <= cas; zz++)
                {
                    string ans = "";

                    string[] str = new string[4];
                    for (int i = 0; i < 4; i++ )
                        str[i] = sc.Next();

                    State st = new State(str);
                    if (st.IsWin('O')) ans = "O won";
                    else if (st.IsWin('X')) ans = "X won";
                    else if (st.IsIncomplete()) ans = "Game has not completed";
                    else ans = "Draw";


                    sout.WriteLine("Case #" + (zz) + ": " + ans);
                }
            }
        }

    }

    internal class State
    {
        private readonly string[] _games;
        private readonly string[] _game;
        public State(string[] game)
        {
            _games = game;
            _game = new string[4];
        }

        public bool IsWin(char c)
        {
           for(int i=0; i<4; i++)
               _game[i] = _games[i].Replace('T', c);

            var target = Enumerable.Repeat(c, 4).ToArray();
            if (_game.Any(st => st.SequenceEqual(target))) return true;
            for (int i = 0; i < 4; i++)
                if (_game.Select(st => st[i]).SequenceEqual(target)) return true;

            if (Enumerable.Range(0, 4).Select(i => _game[i][i]).SequenceEqual(target)) return true;
            if (Enumerable.Range(0, 4).Select(i => _game[i][3-i]).SequenceEqual(target)) return true;
            return false;
        }

        public bool IsIncomplete()
        {
            return _games.Any(st => st.Any(c=> c=='.'));
        }
    }

    public static class Extensions
    {
        public static string Next(this StreamReader sr)
        {
            if (sr.EndOfStream) return null;
            StringBuilder sb = new StringBuilder();
            char ch;
            while (!Char.IsWhiteSpace(ch = (char)sr.Read()))
            {
                sb.Append(ch);
            }
            if (sb.Length == 0) return sr.Next();
            return sb.ToString();
        }

        public static T Next<T>(this StreamReader sr) where T : IConvertible
        {
            string s = sr.Next();
            if (s == null) throw new EndOfStreamException();
            return (T)Convert.ChangeType(s, typeof(T));
        }
    }
}
