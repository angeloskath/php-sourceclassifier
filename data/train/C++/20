

#include<algorithm>
#include<cassert>
#include<complex>
#include<map>
#include<iomanip>
#include<sstream>
#include<queue>
#include<set>
#include<string>
#include<cstdio>
#include<vector>
#include<iostream>
#include<cstring>
#define FOR(i, a, b) for(int i =(a); i <=(b); ++i)
#define FORD(i, a, b) for(int i = (a); i >= (b); --i)
#define fup FOR
#define fdo FORD
#define REP(i, n) for(int i = 0;i <(n); ++i)
#define VAR(v, i) __typeof(i) v=(i)
#define FORE(i, c) for(VAR(i, (c).begin()); i != (c).end(); ++i)
#define ALL(x) (x).begin(), (x).end()
#define SZ(x) ((int)(x).size())
#define siz SZ
#define CLR(x) memset((x), 0, sizeof(x))
#define PB push_back
#define MP make_pair
#define X first
#define Y second 
#define FI X
#define SE Y
#define SQR(a) ((a)*(a))
#define DEBUG 1
#define debug(x) {if (DEBUG)cerr <<#x <<" = " <<x <<endl; }
#define debugv(x) {if (DEBUG) {cerr <<#x <<" = "; FORE(it, (x)) cerr <<*it <<", "; cout <<endl; }}
using namespace std;
typedef long long LL;
typedef long double LD;
typedef pair<int, int>P;
typedef vector<int>VI;
const int INF=1E9+7;
template<class C> void mini(C&a4, C b4){a4=min(a4, b4); }
template<class C> void maxi(C&a4, C b4){a4=max(a4, b4); }
#define MAXN 1000007
vector<vector<P> > good;
void init() {
    REP(i, 4) {
        vector<P> c;
        REP(j, 4) c.PB(P(i,j));
        good.PB(c);
    }
    REP(j, 4) {
        vector<P> c;
        REP(i, 4) c.PB(P(i,j));
        good.PB(c);
    }
    {
        vector<P> c;
        REP(i, 4) c.PB(P(i,i));
        good.PB(c);
     }{
        vector<P> c;
        REP(i, 4) c.PB(P(i,3-i));
        good.PB(c);
    }
}

bool solve() {
    string s[4];
    REP(i, 4) cin >> s[i];
    FORE(it, good) {
        int st = 3;
        FORE(jt, *it) {
            char d = s[jt->X][jt->Y];
            if (d == '.') st = 0;
            else if (d == 'O') st &= 1;
            else if (d == 'X') st &= 2;
        }
        if (st == 1) {
            cout << "O won" << endl;
            return true;
        } else if (st == 2) {
            cout << "X won" << endl;
            return true;
        }
    }
    int cnt = 0;
    REP(i, 4) REP(j, 4) cnt += (s[i][j] == '.');
    if (cnt) cout << "Game has not completed" << endl;
    else cout << "Draw" << endl;
    return true;
}

int main(){
    int t;
	ios_base::sync_with_stdio(false);
    cin >> t;
    init();
    REP(i, t) {
        cout << "Case #" << (i+1) << ": ";
        solve();
    }
	return 0;
}

