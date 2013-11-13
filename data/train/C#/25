using System.IO;


class TicTacToeTomek
{
    static bool CheckPlayer(string[] gameState, char symbol)
    {
        bool fourInFirstDiagonal = true;
        bool fourInSecondDiagonal = true;
        for (int i = 0; i < gameState.Length; i++)
        {
            bool fourInARow = true;
            bool fourInAColumn = true;
            for (int j = 0; j < gameState[i].Length; j++)
            {
                if (gameState[i][j] != symbol && gameState[i][j] != 'T')
                    fourInARow = false;
                if (gameState[j][i] != symbol && gameState[j][i] != 'T')
                    fourInAColumn = false;
            }
            if (fourInARow || fourInAColumn)
                return true;
            if (gameState[i][i] != symbol && gameState[i][i] != 'T')
                fourInFirstDiagonal = false;
            if (gameState[i][gameState.Length - 1 - i] != symbol && gameState[i][gameState.Length - 1 - i] != 'T')
                fourInSecondDiagonal = false;
        }
        if (fourInFirstDiagonal || fourInSecondDiagonal)
            return true;
        return false;
    }
    public static void Solve()
    {
        StreamReader input = new StreamReader("A-large.in");
        StreamWriter output = new StreamWriter("A-large.out");
        int T = int.Parse(input.ReadLine());
        for (int t = 0; t < T; t++)
        {
            string[] gameState = new string[4];
            for (int i = 0; i < 4; i++)
                gameState[i] = input.ReadLine();
            input.ReadLine();
            output.Write("Case #{0}: ", t + 1);
            if (CheckPlayer(gameState, 'X'))
            {
                output.WriteLine("X won");
                continue;
            }
            if (CheckPlayer(gameState, 'O'))
            {
                output.WriteLine("O won");
                continue;
            }
            bool unfinished = false;
            for (int i = 0; i < 4; i++)
                unfinished |= (gameState[i].IndexOf('.') != -1);
            if (unfinished)
                output.WriteLine("Game has not completed");
            else
                output.WriteLine("Draw");
        }
        input.Close();
        output.Close();
    }
}

