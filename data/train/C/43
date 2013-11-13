#include <stdio.h>
#include <stdlib.h>
#include <string.h>
int main()
{
    int T,mapx[4][4],mapo[4][4],i,j,x[10],o[10],s,winx,wino,c;
    char str[5],ch;
    freopen("A-large.in","r",stdin);
    freopen("A-large.out","w",stdout);
    scanf("%d",&T);
    for(c=1;c<=T;c++)
    {
        memset(mapx,0,sizeof(mapx));
        memset(mapo,0,sizeof(mapo));
        memset(x,0,sizeof(x));
        memset(o,0,sizeof(o));
        s=winx=wino=0;
        for(i=0;i<4;i++)
        {
            scanf("%s",str);
            for(j=0;j<4;j++)
            {
                ch=str[j];
                if(ch=='X')
                {
                    mapx[i][j]=1;
                    x[i]|=1<<j;
                }
                if(ch=='O')
                {
                    mapo[i][j]=1;
                    o[i]|=1<<j;
                }
                if(ch=='T')
                {
                    mapx[i][j]=mapo[i][j]=1;
                    x[i]|=1<<j;
                    o[i]|=1<<j;
                }
                if(ch=='.') s=1;
            }
        }
        for(i=0;i<4;i++)
        {
            for(j=0;j<4;j++)
            {
                x[i+4]|=mapx[j][i]<<j;
                o[i+4]|=mapo[j][i]<<j;
            }
            x[8]|=mapx[i][i]<<i;
            x[9]|=mapx[i][3-i]<<i;
            o[8]|=mapo[i][i]<<i;
            o[9]|=mapo[i][3-i]<<i;
        }
        for(i=0;i<10;i++)
        {
            if(x[i]==15) winx=1;
            if(o[i]==15) wino=1;
        }
        printf("Case #%d: ",c);
        if(winx) printf("X won\n");
        else if(wino) printf("O won\n");
        else if(s) printf("Game has not completed\n");
        else printf("Draw\n");
    }
    return 0;
}
