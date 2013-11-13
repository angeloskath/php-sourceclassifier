#include <stdio.h>
#include <string.h>
#include <vector>
#include <queue>
#include <algorithm>
#include <iostream>
#include <map>
#include <string>
#include <math.h>
#include <stack>
#include <list>


#define pb push_back
using namespace std;

typedef long long Long;

char grid[107][107];


int checkcol(int c)
{
    int x,o,t;
    x = 0; o = 0; t = 0;
    for(int i=0;i<4;i++) {
        if(grid[i][c]=='X') x++;
        else if(grid[i][c]=='O') o++;
        else if(grid[i][c]=='T') t++;

    }

    if(x==4) return 1;
    else if(x==3&&t==1) return 1;
    else if(o==4) return 2;
    else if(o==3&&t==1) return 2;
    return -1;

}



int checkrow(int r)
{
    int x,o,t;
    x = 0; o = 0; t = 0;
    for(int i=0;i<4;i++) {
        if(grid[r][i]=='X') x++;
        else if(grid[r][i]=='O') o++;
        else if(grid[r][i]=='T') t++;

    }

    if(x==4) return 1;
    else if(x==3&&t==1) return 1;
    else if(o==4) return 2;
    else if(o==3&&t==1) return 2;
    return -1;

}

int checkdiag()
{
    int x,o,t;
    x = 0; o = 0; t = 0;
    for(int i=0;i<4;i++) {
        if(grid[i][i]=='X') x++;
        else if(grid[i][i]=='O') o++;
        else if(grid[i][i]=='T') t++;

    }

    if(x==4) return 1;
    else if(x==3&&t==1) return 1;
    else if(o==4) return 2;
    else if(o==3&&t==1) return 2;


    x = 0; o = 0; t = 0;
    for(int i=0;i<4;i++) {
        if(grid[i][3-i]=='X') x++;
        else if(grid[i][3-i]=='O') o++;
        else if(grid[i][3-i]=='T') t++;

    }

    if(x==4) return 1;
    else if(x==3&&t==1) return 1;
    else if(o==4) return 2;
    else if(o==3&&t==1) return 2;

    return -1;

}



int whowin()
{
    for(int i=0;i<4;i++) {
        int xx = checkrow(i);
        if(xx!=-1) return xx;
        xx = checkcol(i);
        if(xx!=-1) return xx;
    }
    int hv = checkdiag();
    return hv;

}



int main()
{
    int tst,cas;
    freopen("A.in","rt",stdin);
    freopen("A.out","wt",stdout);
    scanf("%d",&tst);

    for(cas=1;cas<=tst;cas++) {
        int tot = 0;
        for(int i=0;i<4;i++) {
            scanf("%s",&grid[i]);
            for(int j=0;j<4;j++) {
                if(grid[i][j]=='.') tot++;
            }
        }

        int xx = whowin();
        if(xx==1) printf("Case #%d: X won\n",cas);
        else if(xx==2) printf("Case #%d: O won\n",cas);
        else {
            if(tot==0) printf("Case #%d: Draw\n",cas);
            else printf("Case #%d: Game has not completed\n",cas);
        }



    }

    return 0;
}
