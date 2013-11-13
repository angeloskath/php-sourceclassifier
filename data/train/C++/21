#include<cstdio>
#include<iostream>
#include<vector>
#include<algorithm>
#include<string>
#include<cstring>
using namespace std;

typedef long long LL;
int T;
char f[9][9];
bool game(int x, int y, int dx, int dy, char c) {
    for (int i=0; i<4; i++) {
	if (f[x][y]!='T' && f[x][y]!=c) return false;
	x+=dx;
	y+=dy;
    }
    return true;
}
bool dot() {
    for (int i=0; i<4; i++)
	for (int j=0; j<4; j++)
	    if (f[i][j]=='.') return true;
    return false;
}
int main() {
    scanf("%d", &T);
    for (int tc=1; tc<=T; tc++) {
	for (int i=0; i<4; i++) scanf("%s", f[i]);
	int ans=0;
	for (int i=0; i<4; i++) {
	    if (game(0, i, 1, 0, 'X') || game(i, 0, 0, 1, 'X')) ans=1;
	    if (game(0, i, 1, 0, 'O') || game(i, 0, 0, 1, 'O')) ans=2;
	}
	if (game(0, 0, 1, 1, 'X') || game(0, 3, 1, -1, 'X')) ans=1;
	if (game(0, 0, 1, 1, 'O') || game(0, 3, 1, -1, 'O')) ans=2;
	if (ans==0) {
	    if (dot()) ans=3;
	    else ans=4;
	}
	printf("Case #%d: ", tc);
	if (ans==1) puts("X won");
	if (ans==2) puts("O won");
	if (ans==3) puts("Game has not completed");
	if (ans==4) puts("Draw");
    }
    return 0;
}
