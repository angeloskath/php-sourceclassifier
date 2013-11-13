
#include<algorithm>
#include<cassert>
#include<complex>
#include<map>
#include<iomanip>
#include<sstream>
#include<queue>
#include<set>
#include<string>
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
#include<cstdio>
using namespace std;

typedef long long LL;
typedef long double LD;
typedef pair<int, int>P;
typedef vector<int>VI;
const int INF=1E9+7;
template<class C> void mini(C&a4, C b4){a4=min(a4, b4); }
template<class C> void maxi(C&a4, C b4){a4=max(a4, b4); }


char t[5][5];
bool tt[5][5];

int dx[] = {0, 1, 1, 1, -1};
int dy[] = {1, 0, 1, -1, 1};
bool isin(int x, int y) { return x >= 0 && y >= 0 && x < 4 && y < 4; }

bool wyg() {
    fup(i, 0, 3) fup(j, 0, 3) {
        fup(k, 0, 3) {
            bool ok = 1;
            fup(l, 0, 3) if (isin(i + dx[k] * l, j + dy[k] * l) && tt[i + dx[k] * l][j + dy[k] * l]); else { ok = 0; break; }
            if (ok) {
                return 1;
            }
        }
    }
    return 0;
}

void solve(int cas) {
    printf("Case #%d: ", cas);
    fup(i, 0, 3) cin >> t[i];

    CLR(tt);
    fup(i, 0, 3) fup(j, 0, 3) if (t[i][j] == 'X' || t[i][j] == 'T') tt[i][j] = 1;
    if (wyg()) {
        cout << "X won" << endl;
        return;
    }

    CLR(tt);
    fup(i, 0, 3) fup(j, 0, 3) if (t[i][j] == 'O' || t[i][j] == 'T') tt[i][j] = 1;
    if (wyg()) {
        cout << "O won" << endl;
        return ;
    }
    fup(i, 0, 3) fup(j, 0, 3) if (t[i][j] == '.') { cout << "Game has not completed" << endl; return; }
    cout << "Draw" << endl;
}

int main(){
    int cas;
    cin >> cas;
    fup(c, 1, cas) solve(c);

	return 0;
}

