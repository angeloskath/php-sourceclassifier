#define _CRT_SECURE_NO_WARNINGS
#include <algorithm>
#include <numeric>
#include <string>
#include <cstring>
#include <set>
#include <map>
#include <vector>
#include <queue>
#include <iostream>
#include <iterator>
#include <cmath>
#include <cstdio>
#include <cstdlib>
#include <sstream>

using namespace std;

#define REP(i,n) for (int i=0,_n=(n); i < _n; i++)
#define REPD(i,n) for (int i=(n)-1; i >= 0; i--)
#define FOR(i,a,b) for (int _b=(b), i=(a); i <= _b; i++)
#define FORD(i,a,b) for(int i=(a),_b=(b);i>=_b;i--)
#define ALL(c) (c).begin(), (c).end()
#define SORT(c) sort(ALL(c))

#define CLEAR(x) memset(x,0,sizeof x);
#define CLEARA(x) memset(&x,0,sizeof x);
#define FILL(x,v) memset(x,v,sizeof x);
#define FILLA(x,v) memset(&x,v,sizeof x);

#define VAR(a,b) __typeof(b) a=(b)
#define FOREACH(it,c) for(VAR(it,(c).begin());it!=(c).end();++it)

#define REVERSE(c) reverse(ALL(c))
#define UNIQUE(c) SORT(c),(c).resize(unique(ALL(c))-(c).begin())
#define INF 0x7fffffff
#define X first
#define Y second
#define pb push_back
#define SZ(c) (int)(c).size()
#define MP make_pair
#define eps 1.0e-11
const double pi = acos(-1.0);

typedef pair<int, int> PII;
typedef vector<PII> VPII;
typedef vector<int> VI;
typedef vector<VI> VVI;
typedef long long LL;

#define FN "A-large"
char a[4][4];

string go() {
	vector<string> b;
	REP(i,4) b.pb(string() + a[i][0] + a[i][1] + a[i][2] + a[i][3]);
	REP(i,4) b.pb(string() + a[0][i] + a[1][i] + a[2][i] + a[3][i]);
	b.pb(string() + a[0][0] + a[1][1] + a[2][2] + a[3][3]);
	b.pb(string() + a[0][3] + a[1][2] + a[2][1] + a[3][0]);
	REP(i,SZ(b))
	{
		string s = b[i];
		bool ok;
		ok = true;
		REP(j,SZ(s))
			if (s[j]!='T'&&s[j]!='X')
				ok = false;
		if (ok) return "X won";
		ok = true;
		REP(j,SZ(s))
			if (s[j]!='T'&&s[j]!='O')
				ok = false;
		if (ok) return "O won";
	}
	REP(i,4) REP(j,4)
		if (a[i][j] == '.')
			return "Game has not completed";
	return "Draw";
}

int main()
{
	freopen(FN ".in","r",stdin);
	freopen(FN ".out","w",stdout);

	int tests;
	scanf("%d",&tests);
	for (int test = 1; test<=tests; test++)
	{
		printf("Case #%d: ",test);
		REP(i,4) REP(j,4) do a[i][j] = getc(stdin); while (!isalpha(a[i][j]) && a[i][j]!='.');
		printf("%s\n", go().c_str());
	}
	return 0;
}