#include <cstdio>
#include <assert.h>
#include <cstdlib>
#include <iostream>
#include <algorithm>
#include <vector>
#include <cmath>
#include <set>
#include <map>
#include <cstring>
#include <hashtable.h>

using namespace std;
typedef long long ll;
const int L = 26;
int i, j, k, m, n;

char s[4][10];
bool f[4][10];
char ss[10002];


int main()
{
    freopen("x.in", "r", stdin);
    freopen("x.txt", "w", stdout);

    int ti, tn;
    cin >> tn;
    for (ti = 1; ti <= tn; ti++)
    {
        gets(ss);
        string ans = "Draw";
        for (i = 0; i < 4; i++)
        {
            gets(s[i]);
            for(j = 0; j < 4; j++) if (s[i][j] == '.') ans = "Game has not completed";
        }

        map<int, int> M;
        for (i = 0; i < 4; i++)
            for (j = 0; j < 4; j++)
            {
                if (s[i][j] == 'X' || s[i][j] == 'T')
                {
                    M[i]++;
                    M[100+j]++;
                    M[i+j+10000]++;
                    M[i-j+1000000]++;
                }
            }
        for (map<int,int>::iterator it = M.begin(); it != M.end(); it++)
            if (it->second == 4) ans = "X won";
        M.clear();
        for (i = 0; i < 4; i++)
            for (j = 0; j < 4; j++)
            {
                if (s[i][j] == 'O' || s[i][j] == 'T')
                {
                    M[i]++;
                    M[100+j]++;
                    M[i+j+10000]++;
                    M[i-j+1000000]++;
                }
            }
        for (map<int,int>::iterator it = M.begin(); it != M.end(); it++)
            if (it->second == 4) ans = "O won";

        cout << "Case #" << ti << ": " << ans << endl;
    }

    return 0;
}
