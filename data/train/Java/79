
import java.io.*;


public class TaskA
{
    public static void main(String[] args) throws Exception
    {
        BufferedReader in = new BufferedReader(new FileReader("A-large.in"));
        BufferedWriter out = new BufferedWriter(new FileWriter("A-large.out"));

        String _str;
        int T;
        int t, p, j, k;

        _str = in.readLine();
        T = Integer.parseInt(_str);

        for (t = 1; t <= T; t++)
        {
            if (t > 1)
                in.readLine();
            
            boolean _end = true;
            int[][] _hor = new int[2][4];
            int[][] _vert = new int[2][4];
            int[][] _diag = new int[2][2];

            for (j = 0; j < 4; j++)
            {
                _str = in.readLine();
                for (k = 0; k < 4; k++)
                {
                    if (_str.charAt(k) == '.')
                    {
                        _end = false;
                    } else if (_str.charAt(k) == 'X')
                    {
                        Calc(j, k, 0, _hor, _vert, _diag);
                    } else if (_str.charAt(k) == 'O')
                    {
                        Calc(j, k, 1, _hor, _vert, _diag);
                    } else if (_str.charAt(k) == 'T')
                    {
                        Calc(j, k, 0, _hor, _vert, _diag);
                        Calc(j, k, 1, _hor, _vert, _diag);
                    }
                }
            }

            String[] _pl = new String[] { "X", "O" };
            boolean _win = false;
            for (p = 0; p < 2; p++)
            {
                for (j = 0; j < 4; j++)
                {
                    if (_hor[p][j] == 4 || _vert[p][j] == 4 || (j < 2 && _diag[p][j] == 4))
                    {
                        out.write(String.format("Case #%d: %s won%n", t, _pl[p]));
                        _win = true;
                        break;
                    }
                }
                if (_win)
                    break;
            }

            if (!_win)
            {
                if (_end)
                    out.write(String.format("Case #%d: Draw%n", t));
                else
                    out.write(String.format("Case #%d: Game has not completed%n", t));
            }
        }

        out.close();
        in.close();
    }

    private static void Calc(int row, int col, int p, int[][] Hor, int[][] Vert, int[][] Diag)
    {
        Hor[p][row]++;
        Vert[p][col]++;
        if (row == col)
            Diag[p][0]++;
        if (3 - row == col)
            Diag[p][1]++;
    }
}
