#include <cstdio>
#include <cstring>
#include <cmath>
#include <algorithm>
#include <vector>
using namespace std;

#define FOR(it, c) for(__typeof((c).begin()) it = (c).begin(); it != (c).end(); it++)
#define SZ(c) ((int)(c).size())

const int XWON=1,OWON=2,DRAW=3,NOTEND=4;

int result = 0;
void check(char a, char b, char c, char d) {
	if(result) return;
	if(a=='.' || b=='.' || c=='.' || d=='.') return;
	if(a=='T' && b==c && c==d) {if(b=='X') result=XWON; else if(b=='O') result=OWON; return;}
	if(b=='T') b=a; if(c=='T') c=a; if(d=='T') d=a;
	if(a==b && b==c && c==d) {if(a=='X') result=XWON; else if(a=='O') result=OWON; }
}
char a[5][5];
void solve() {
	int X=0, O=0;
	for(int i=0;i<4;i++) scanf("%s", a[i]);
	for(int i=0;i<4;i++) for(int j=0;j<4;j++) if(a[i][j]=='X') ++X;
	else if(a[i][j]=='O') ++O;
	result = 0;
	check(a[0][0],a[1][1],a[2][2],a[3][3]);
	check(a[0][3],a[1][2],a[2][1],a[3][0]);
	for(int i=0;i<4;i++) {
		check(a[i][0],a[i][1],a[i][2],a[i][3]);
		check(a[0][i],a[1][i],a[2][i],a[3][i]);
	}
	if(!result) for(int i=0;i<4;i++) for(int j=0;j<4;j++) if(a[i][j]=='.') result=NOTEND;
	if(result == XWON) puts("X won");
	else if(result == OWON) puts("O won");
	else if(result == NOTEND) puts("Game has not completed");
	else puts("Draw");
}

int main(void) {
	int T;
	scanf("%d", &T);
	for(int cs=1;cs<=T;cs++) {
		printf("Case #%d: ", cs);
		solve();
	}
	return 0;
}
