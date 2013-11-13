#include <cstdio>
#include <cstring>
#include <algorithm>
#define FOR(i,s,e) for (int i=(s); i<(e); i++)
#define FOE(i,s,e) for (int i=(s); i<=(e); i++)
#define FOD(i,s,e) for (int i=(s)-1; i>=(e); i--)
#define CLR(a,x) memset(a, x, sizeof(a))
#define EXP(i,l) for (int i=(l); i; i=qn[i])
#define LLD long long
using namespace std;

int winX, winO, spc;

void check(char c1, char c2, char c3, char c4){
	char C[4] = {c1, c2, c3, c4};
	int x = 0, y = 0;
	FOR(i,0,4){
		if (C[i] == '.') return;
		if (C[i] == 'X') ++x;
		if (C[i] == 'O') ++y;
	}
	if (x == 4 || (x == 3 && !y)) winX = 1;
	if (y == 4 || (y == 3 && !x)) winO = 1;
}

char s[5][5];

void solve(int tc){
	printf("Case #%d: ", tc);
	FOR(i,0,4) scanf("%s", s[i]);
	winX = winO = spc = 0;
	FOR(i,0,4){
		check(s[i][0], s[i][1], s[i][2], s[i][3]);
		check(s[0][i], s[1][i], s[2][i], s[3][i]);
		FOR(j,0,4) spc += s[i][j] == '.';
	}
	check(s[0][0], s[1][1], s[2][2], s[3][3]);
	check(s[0][3], s[1][2], s[2][1], s[3][0]);
	
	if (winX) puts("X won");
	else if (winO) puts("O won");
	else if (spc == 0) puts("Draw");
	else puts("Game has not completed");
}

int main(){
	int tc;
	scanf("%d", &tc);
	FOE(i,1,tc) solve(i);
	return 0;
}
