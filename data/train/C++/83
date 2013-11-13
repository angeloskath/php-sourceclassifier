#include <vector>
#include <map>
#include <set>
#include <queue>
#include <stack>
#include <algorithm>
#include <utility>
#include <sstream>
#include <iostream>
#include <iomanip>
#include <cstdio>
#include <cstring>
#include <cmath>
#include <cstdlib>
#include <ctime>
using namespace std;

#ifdef DEBUG
	#define debug(...) printf(__VA_ARGS__)
	#define GetTime	printf("Running time: %.3lf second\n",((double)clock())/CLOCKS_PER_SEC);
#else
	#define debug(...) 
	#define GetTime 
#endif

//abbreviations
typedef long long LL;
typedef pair<int,int> PII;
#define fi first
#define se second
#define mp make_pair
#define pb push_back
#define LLD "%I64d"

//prefefined macros
#define REP(i,n) for (int i = 0; i < n; ++i)
#define REPD(i,n) for (int i = n-1; i >= 0; --i)
#define FOR(i,a,b) for (int i = a; i <= b; ++i)
#define FORD(i,a,b) for (int i = a; i >= b; --i)
#define ALL(a) (a).begin(),(a).end()
#define RESET(a,x) memset(a,x,sizeof(a))
#define EXIST(a,s) ((s).find(a) != (s).end())

/* -------------- end of azaky's template -------------- */

int ntc, a[4][4];
char line[4][4];

int main(){
	scanf("%d",&ntc);
	FOR(itc,1,ntc){
		REP(i,4) scanf("%s",line[i]);
		REP(i,4) REP(j,4) a[i][j] = line[i][j] == 'X' ? 1 : line[i][j] == 'O' ? 2 : line[i][j] == '.' ? 0 : -1;
		//REP(i,4){REP(j,4)printf("%2d ",a[i][j]); puts("");}
		/*
		 * 1 for X
		 * 2 for O
		 * 0 for none
		 * -1 for T
		 */
		int winner = 0;
		//row
		REP(i,4){
			int c = -1;
			REP(j,4){
				if (a[i][j] == 0){c=0; break;}
				if (a[i][j] == -1) continue;
				if (c == -1) c = a[i][j];
				if (a[i][j] != c){c=0; break;}
			}
			if (c > 0) winner = c;
		}
		//column
		REP(j,4){
			int c = -1;
			REP(i,4){
				if (a[i][j] == 0){c=0; break;}
				if (a[i][j] == -1) continue;
				if (c == -1) c = a[i][j];
				if (a[i][j] != c){c=0; break;}
			}
			if (c > 0) winner = c;
		}
		//diagonal
		{
			int c = -1;
			for(int i=0, j=0; i<4; i++, j++){
				if (a[i][j] == 0){c=0; break;}
				if (a[i][j] == -1) continue;
				if (c == -1) c = a[i][j];
				if (a[i][j] != c){c=0; break;}
			}
			if (c > 0) winner = c;
		}
		{
			int c = -1;
			for(int i=0, j=3; i<4; i++, j--){
				if (a[i][j] == 0){c=0; break;}
				if (a[i][j] == -1) continue;
				if (c == -1) c = a[i][j];
				if (a[i][j] != c){c=0; break;}
			}
			if (c > 0) winner = c;
		}
		printf("Case #%d: ",itc);
		if (winner == 1) printf("X won\n");
		else if (winner == 2) printf("O won\n");
		else{
			bool full = true;
			REP(i,4) REP(j,4) if (a[i][j] == 0) full = false;
			if (full) printf("Draw\n");
			else printf("Game has not completed\n");
		}
	}
	
	return 0;
}
