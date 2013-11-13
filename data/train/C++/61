#include <algorithm>
#include <iostream>
#include <sstream>
#include <string>
#include <vector>
#include <queue>
#include <set>
#include <map>
#include <cstdio>
#include <cstdlib>
#include <cctype>
#include <cmath>
#include <numeric>
#include <cstring>

typedef long long i64d;

using namespace std;

int check(int a[][4] , int p)
{
    int win;
    for (int i = 0; i < 4; i ++)
    {
        win = a[i][0];
        for (int j = 1; j < 4; j ++)
            if (a[i][j-1] != a[i][j]) {win = 0; break;}
        if (win > 0) return win == p;
        win = a[0][i];
        for (int j = 1; j < 4; j ++)
            if (a[j-1][i] != a[j][i]) {win = 0; break;}
        if (win > 0) return win == p;
    }
    win = a[0][0];
    for (int i = 1; i < 4; i ++)
        if (a[i-1][i-1] != a[i][i]) {win = 0; break;}
    if (win > 0) return win == p;
    win = a[0][3];
    for (int i = 1; i < 4; i ++)
        if (a[i-1][4-i] != a[i][3-i]) {win = 0; break;}
    return win == p;
}

int main()
{
	freopen("A-large.in" , "r" , stdin);
	//freopen("input.txt" , "r" , stdin);
	freopen("A-large.out" , "w" , stdout);
	int cas;
	scanf("%d" , &cas);
	for (int ca = 1; ca <= cas; ca ++)
	{
		printf("Case #%d: " , ca);
        int n = 4;
        int a[4][4] = {0};
        int empty = 0;
        int x = -1 , y;
        for (int i = 0; i < n; i ++)
        {
            char row[10];
            scanf("%s" , row);
            for (int j = 0; j < n; j ++)
                if (row[j] == 'T')
                {
                    x = i; y = j;
                }
                else if (row[j] == 'X')
                    a[i][j] = 1;
                else if (row[j] == 'O') 
                    a[i][j] = 2;
                else
                {
                    a[i][j] = 0;
                    empty = 1;
                }
        }
        if (x >= 0) a[x][y] = 1;
        if (check(a , 1)) {printf("X won\n"); continue;}
        if (x >= 0) a[x][y] = 2;
        if (check(a , 2)) {printf("O won\n"); continue;}
        if (empty) printf("Game has not completed\n");
        else printf("Draw\n");
    }
    return 0;
}