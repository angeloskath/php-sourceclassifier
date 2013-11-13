//Written by technolt~h
 
#pragma comment(linker, "/STACK:14777214")
#include <cstdio>
#include <iostream>
#include <algorithm>
#include <vector>
#include <queue>
#include <stack>
#include <set>
#include <map>
#include <cstring>
#include <cstdlib>
#include <cmath>
#include <string>
#include <memory.h>
#include <sstream>
#include <complex>
 
#define REP(i,n) for(ll i = 0, _n = (n); i < _n; i++)
#define REPD(i,n) for(ll i = (n) - 1; i >= 0; i--)
#define FOR(i,a,b) for (ll i = (a), _b = (b); i <= _b; i++)
#define FORD(i,a,b) for (ll i = (a), _b = (b); i >= _b; i--)
#define FORN(i,a,b) for(ll i=a;i<b;i++)
#define FOREACH(it,c) for (__typeof((c).begin()) it=(c).begin();it!=(c).end();it++)
#define RESET(c,x) memset (c, x, sizeof (c))
 
#define sqr(x) ((x) * (x))
#define PB push_back
#define MP make_pair
#define F first
#define S second
#define ALL(c) (c).begin(), (c).end()
#define SIZE(c) (c).size()
 
#define DEBUG(x) { cerr << #x << " = " << x << endl; }
#define PR(a,n) {cerr<<#a<<" = "; FOR(_,1,n) cerr << a[_] << ' '; cerr <<endl;}
#define PR0(a,n) {cerr<<#a<<" = ";REP(_,n) cerr << a[_] << ' '; cerr << endl;}
#define ll long long
using namespace std;
 
const double PI = 2.0 * acos (0.0);
 
typedef long long LL;
typedef pair <ll, ll> PII;
 
template <class T> inline T MAX (T a, T b) { if (a > b) return a; return b; }
template <class T> inline T MIN (T a, T b) { if (a < b) return a; return b; }

#define maxn 

string a[10];

string solve() {
	REP(i,4) {
		bool ok=true;
		REP(j,4) if(a[i][j]=='.' || a[i][j]=='O') ok=false;
		if(ok) return "X won";
		
		ok=true;
		REP(j,4) if(a[i][j]=='.' || a[i][j]=='X') ok=false;
		if(ok) return "O won";
	}
	
	REP(j,4) {
		bool ok=true;
		REP(i,4) if(a[i][j]=='.' || a[i][j]=='O') ok=false;
		if(ok) return "X won";
		
		ok=true;
		REP(i,4) if(a[i][j]=='.' || a[i][j]=='X') ok=false;
		if(ok) return "O won";
	}
	
	bool ok=true;
	REP(i,4) if(a[i][i]=='.' || a[i][i]=='O') ok=false;
	if(ok) return "X won";
	
	ok=true;
	REP(i,4) if(a[i][i]=='.' || a[i][i]=='X') ok=false;
	if(ok) return "O won";
	
	ok=true;
	REP(i,4) if(a[i][3-i]=='.' || a[i][3-i]=='O') ok=false;
	if(ok) return "X won";
	
	ok=true;
	REP(i,4) if(a[i][3-i]=='.' || a[i][3-i]=='X') ok=false;
	if(ok) return "O won";
	
	ok=true;
	REP(i,4) REP(j,4) if(a[i][j]=='.') ok=false;
	if(ok) return "Draw";
	return "Game has not completed";
}

int main() {
	freopen("a.inp","r",stdin);
	freopen("a.out","w",stdout);
	int ntest;
	cin >> ntest;
	FOR(test,1,ntest) {
		REP(i,4) cin >> a[i];
		cout << "Case #" << test << ": " << solve() << endl;
	}
}
