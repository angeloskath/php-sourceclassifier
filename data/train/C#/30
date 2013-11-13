using System;
using System.Collections.Generic;
using System.Text;
using System.IO;
using System.Data;

class GCJ
{
    protected StreamReader sr;
    protected StreamWriter sw;

    public virtual void Input()
    {
    }

    public virtual void Search()
    {
    }

    public void Run(string fileInput, string fileOutput)
    {
        sr = new StreamReader(fileInput);
        sw = new StreamWriter(fileOutput);
        int testcase = Int32.Parse(sr.ReadLine());
        for (int i = 1; i <= testcase; i++)
        {
            sw.Write("Case #" + i + ":");
            Input();
            Search();
        }
        sw.Flush();
    }
}

class PA : GCJ
{
    public PA(string fileInput, string fileOutput)
    {
        base.Run(fileInput, fileOutput);
    }

    string[] map = new string[4];

    int val(char c)
    {
        if (c == 'X')
            return 1;
        else if (c == 'O')
            return -1;
        else if (c == 'T')
            return 0;
        else
            return 1000;
    }

    public override void Input()
    {
        base.Input();
        for (int i = 0; i < 4; i++)
            map[i] = sr.ReadLine();
        sr.ReadLine();

        int cnt1, cnt2;
        for (int i = 0; i < 4; i++)
        {
            cnt1 = 0;
            cnt2 = 0;
            for (int j = 0; j < 4; j++)
            {
                cnt1 += val(map[i][j]);
                cnt2 += val(map[j][i]);
            }
            if (cnt1 == 3 || cnt1 == 4 || cnt2 == 3 || cnt2 == 4)
            {
                sw.WriteLine(" X won");
                return;
            }
            if (cnt1 == -3 || cnt1 == -4 || cnt2 == -3 || cnt2 == -4)
            {
                sw.WriteLine(" O won");
                return;
            }
        }
        cnt1 = val(map[0][0]) + val(map[1][1]) + val(map[2][2]) + val(map[3][3]);
        cnt2 = val(map[0][3]) + val(map[1][2]) + val(map[2][1]) + val(map[3][0]);
        if (cnt1 == 3 || cnt1 == 4 || cnt2 == 3 || cnt2 == 4)
        {
            sw.WriteLine(" X won");
            return;
        }
        if (cnt1 == -3 || cnt1 == -4 || cnt2 == -3 || cnt2 == -4)
        {
            sw.WriteLine(" O won");
            return;
        }
        for (int i = 0; i < 4; i++)
            for (int j = 0; j < 4; j++)
                if (map[i][j] == '.')
                {
                    sw.WriteLine(" Game has not completed");
                    return;
                }
        sw.WriteLine(" Draw");
    }
}
