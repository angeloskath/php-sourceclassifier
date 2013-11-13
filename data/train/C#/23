using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace tictactoetomek
{
  class Program
  {
    static void Main(string[] args)
    {
      var lines = File.ReadAllLines(args[0]);
      int T = int.Parse(lines[0]);
      for (int i = 1; i <= T; ++i)
      {
        char[,] board = new char[4, 4];
        for (int j = 0; j < 4; ++j)
          for (int k = 0; k < 4; ++k)
            board[j, k] = lines[(i - 1) * 5 + j + 1][k];

        Console.Write("Case #{0}: ", i);
        if (CheckBoard(board, 'X'))
          Console.WriteLine("X won");
        else if(CheckBoard(board, 'O'))
          Console.WriteLine("O won");
        else
        {
          bool finished = true;
          for (int j = 0; j < 4; ++j)
            for (int k = 0; k < 4; ++k)
              finished &= board[j,k] != '.';

          if (finished)
            Console.WriteLine("Draw");
          else
            Console.WriteLine("Game has not completed");
        }
      }
    }

    private static bool CheckBoard(char[,] board, char p)
    {
      bool filled = true;

      for (int j = 0; j < 4; ++j)
      {
        filled = true;

        for (int k = 0; k < 4; ++k)
          filled &= board[j, k] == p || board[j, k] == 'T';

        if (filled)
          return true;

        filled = true;
        for (int k = 0; k < 4; ++k)
          filled &= board[k, j] == p || board[k, j] == 'T';

        if (filled)
          return true;
      }

      filled = true;
      for (int k = 0; k < 4; ++k)
        filled &= board[k, k] == p || board[k, k] == 'T';

      if (filled)
        return true;

      filled = true;
      for (int k = 0; k < 4; ++k)
        filled &= board[3 - k, k] == p || board[3 - k, k] == 'T';

      return filled;
    }
  }
}
