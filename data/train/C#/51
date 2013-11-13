using System;
using System.Collections.Generic;
using System.IO;
using System.Text.RegularExpressions;
using System.Linq;
using System.Windows.Forms;
using CodeJam.ExtentionMethods;

namespace CodeJam.Problems
{
    public class CodeJam2013_QualificationRound_A : BaseProblem
    {
        protected override object SolveCase(StreamReader reader)
        {
            List<string> board = new List<string>();

            bool emptySpace = false;

            for (int i = 0; i < 5; i++)
            {
                string row = reader.ReadLine();
                if (String.IsNullOrEmpty(row)) continue;
                if (row.Contains("."))
                    emptySpace = true;
                board.Add(row);
            }

            if (CheckWin("XT", board))
                return "X won";
            if (CheckWin("OT", board))
                return "O won";
            if (emptySpace)
                return "Game has not completed";
            else
                return "Draw";

        }

        private static bool CheckWin(string player, List<string> board)
        {
            return (player.Contains(board[0][0]) && player.Contains(board[0][1]) && player.Contains(board[0][2]) && player.Contains(board[0][3])) ||
                (player.Contains(board[1][0]) && player.Contains(board[1][1]) && player.Contains(board[1][2]) && player.Contains(board[1][3])) ||
                (player.Contains(board[2][0]) && player.Contains(board[2][1]) && player.Contains(board[2][2]) && player.Contains(board[2][3])) ||
                (player.Contains(board[3][0]) && player.Contains(board[3][1]) && player.Contains(board[3][2]) && player.Contains(board[3][3])) ||

                (player.Contains(board[0][0]) && player.Contains(board[1][0]) && player.Contains(board[2][0]) && player.Contains(board[3][0])) ||
                (player.Contains(board[0][1]) && player.Contains(board[1][1]) && player.Contains(board[2][1]) && player.Contains(board[3][1])) ||
                (player.Contains(board[0][2]) && player.Contains(board[1][2]) && player.Contains(board[2][2]) && player.Contains(board[3][2])) ||
                (player.Contains(board[0][3]) && player.Contains(board[1][3]) && player.Contains(board[2][3]) && player.Contains(board[3][3])) ||

                (player.Contains(board[0][0]) && player.Contains(board[1][1]) && player.Contains(board[2][2]) && player.Contains(board[3][3])) ||
                (player.Contains(board[0][3]) && player.Contains(board[1][2]) && player.Contains(board[2][1]) && player.Contains(board[3][0]));
        }
    }
}
