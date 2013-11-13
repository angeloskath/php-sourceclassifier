#include <cstdio>
using namespace std;

char map[5][5];

char check()
{
    bool yn;
    char now;
    for(int i=0; i<4; ++i)
    {
        now = (map[i][0]!='T'?map[i][0]:map[i][1]);
        if(now == '.') continue;
        yn = 1;
        for(int j=0; j<4; ++j)
            if(map[i][j]!=now&&map[i][j]!='T')
            {
                yn = 0;
                break;
            }
        if(yn) return now;
    }
    for(int j=0; j<4; ++j)
    {
        now = (map[0][j]!='T'?map[0][j]:map[1][j]);
        if(now == '.') continue;
        yn = 1;
        for(int i=0; i<4; ++i)
            if(map[i][j]!=now&&map[i][j]!='T')
            {
                yn = 0;
                break;
            }
        if(yn) return now;
    }
    now = (map[0][0]!='T'?map[0][0]:map[1][1]);
    if(now!='.')
    {
        yn = 1;
        for(int i=0; i<4; ++i)
                if(map[i][i]!=now&&map[i][i]!='T')
                {
                    yn = 0;
                    break;
                }
        if(yn) return now;
    }
    now = (map[0][3]!='T'?map[0][3]:map[1][2]);
    if(now!='.')
    {
        yn = 1;
        for(int i=0; i<4; ++i)
                if(map[i][3-i]!=now&&map[i][3-i]!='T')
                {
                    yn = 0;
                    break;
                }
        if(yn) return now;
    }
    for(int i=0; i<4; ++i)
        for(int j=0; j<4; ++j)
            if(map[i][j]=='.') return 'U';
    return 'D';
}

int main()
{
    int T;
    scanf("%d", &T);
    for(int cnt = 1; cnt<=T; ++cnt)
    {
        for(int i=0; i<4; ++i) scanf("%s", map[i]);
        char ans = check();
        printf("Case #%d: ", cnt);
        if(ans=='D') puts("Draw");
        else if(ans=='U') puts("Game has not completed");
        else printf("%c won\n", ans);
    }
    return 0;
}
