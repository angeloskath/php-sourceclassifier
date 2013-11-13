#include <cstdio>
#include <iostream>
#include <cstdlib>
#include <cmath>
#include <cassert>
#include <cstring>
#include <algorithm>
#include <string>
#include <vector>
#include <list>
#include <set>
#include <map>
#include <sstream>
using namespace std;
#pragma comment(linker, "/STACK:255000000")

typedef long long ll;

#define rep(i, a, b) for(i = (a); i < (b); ++i)
#define repb(i, a, b) for(i = (a) - 1; i >= (b); --i)
#define repd(i, a, b, d) for(i = (a); i < (b); i += (d))
#define repbd(i, a, b, d) for(i = (a) - 1; i >= (b); i -= (d))
#define reps(i, s) for(i = 0; (s)[i]; ++i)
#define repl(i, l) for(i = l.begin(); i != l.end(); ++i)

#define in(f, a) scanf("%"#f, &(a))

bool firstout = 1;

#define out(f, a) printf("%"#f, (a))
#define outf(f, a) printf((firstout) ? "%"#f : " %"#f, (a)), firstout = 0
#define nl printf("\n"), firstout = 1

#define all(x) (x).begin(),(x).end()
#define sqr(x) ((x) * (x))
#define mp make_pair

template<class T>
T &minn(T &a, T b)
{
	if(b < a) a = b;
	return a;
}

template<class T>
T &maxx(T &a, T b)
{
	if(a < b) a = b;
	return a;
}

#define inf 1012345678
#define eps 1e-9


#ifdef XDEBUG
#define mod 23
#else
#define mod 1000000007
#endif

int &madd(int &a, int b)
{
	a += b;
	if(a >= mod) a -= mod;
	return a;
}

int &msub(int &a, int b)
{
	a -= b;
	if(a < 0) a += mod;
	return a;
}

int &mmult(int &a, int b)
{
	return a = (ll)a * b % mod;
}

int mdiv(ll a, ll b, ll m)
{
	a = (a % m + m) % m;
	b = (b % m + m) % m;
	if(a % b == 0) return a / b;
	return (a + m * mdiv(-a, m, b)) / b;
}

#define N 1012
#define M 1012

int n, m, q;
char S[N][N];

int main()
{
#ifdef XDEBUG
	freopen("in.txt", "rt", stdin);
#else
	freopen("x.in", "rt", stdin);
	freopen("x.out", "wt", stdout);
#endif

	int i, j, k;
	char c;
	int a, d;
	
	int ts;	
#if 1
	int tss;
	in(d, tss);
	rep(ts, 1, tss + 1)
#else
	for(ts = 1; in(d, n) > 0; ++ts)
#endif
	{
		rep(i, 0, 4) in(s, S[i]);
		string res = "Game has not completed";
		rep(i, 0, 4)
		{
			rep(j, 0, 4) if(S[i][j] == '.') break;
			if(j < 4) break;
		}
		if(i == 4) res = "Draw";
		string r;
		c = 'X';
		r = "X won";
		rep(i, 0, 4)
		{
			rep(j, 0, 4) if(S[i][j] != 'T' && S[i][j] != c) break;
			if(j == 4) res = r;
		}
		rep(j, 0, 4)
		{
			rep(i, 0, 4) if(S[i][j] != 'T' && S[i][j] != c) break;
			if(i == 4) res = r;
		}
		rep(i, 0, 4) if(S[i][i] != 'T' && S[i][i] != c) break;
		if(i == 4) res = r;
		rep(i, 0, 4) if(S[i][3 - i] != 'T' && S[i][3 - i] != c) break;
		if(i == 4) res = r;
		c = 'O';
		r = "O won";
		rep(i, 0, 4)
		{
			rep(j, 0, 4) if(S[i][j] != 'T' && S[i][j] != c) break;
			if(j == 4) res = r;
		}
		rep(j, 0, 4)
		{
			rep(i, 0, 4) if(S[i][j] != 'T' && S[i][j] != c) break;
			if(i == 4) res = r;
		}
		rep(i, 0, 4) if(S[i][i] != 'T' && S[i][i] != c) break;
		if(i == 4) res = r;
		rep(i, 0, 4) if(S[i][3 - i] != 'T' && S[i][3 - i] != c) break;
		if(i == 4) res = r;
		printf("Case #%d: ", ts);
		cout << res << endl;
	}

	return 0;
}
