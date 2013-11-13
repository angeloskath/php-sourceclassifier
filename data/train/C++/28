
#include <list>
#include <map>
#include <set>
#include <stack>
#include <queue>
#include <algorithm>
#include <sstream>
#include <iostream>
#include <cstdio>
#include <cmath>
#include <cstdlib>
#include <cstring>
#include <climits>
#include <cfloat>
#include <numeric>

using namespace std;

typedef long long ll;
typedef unsigned long long ull;
typedef vector<int> vi;
typedef vector<string> vs;
typedef pair<int, int> pii;

const int oo = 0x3f3f3f3f;
const double eps = 1e-9;

#define sz(c) int((c).size())
#define all(c) (c).begin(), (c).end()
#define FOR(i,a,b) for (int i = (a); i < (b); i++)
#define FORD(i,a,b) for (int i = int(b)-1; i >= (a); i--)
#define FORIT(i,c) for (__typeof__((c).begin()) i = (c).begin(); i != (c).end(); i++)
#define mp(a,b) make_pair(a,b)
#define pb(a) push_back(a)

string feld[4];
bool won(char l){
	FOR(r,0,4){
		FOR(c,0,4){
			if(feld[r][c] != l && feld[r][c] != 'T')break;
			if(c == 3)return true;
		}
	}
	FOR(c,0,4){
		FOR(r,0,4){
			if(feld[r][c] != l && feld[r][c] != 'T')break;
			if(r == 3)return true;
		}
	}
		FOR(r,0,4){
			if(feld[r][r] != l && feld[r][r] != 'T')break;
			if(r == 3)return true;
		}
		FOR(r,0,4){
			if(feld[r][3-r] != l && feld[r][3-r] != 'T')break;
			if(r == 3)return true;
		}
		return false;
}

bool incomplete(){
	FOR(r,0,4)FOR(c,0,4)if(feld[r][c] == '.')return true;
	return false;
}

int main() {
	int tc;
	cin >> tc;
	FOR(tcc, 1, tc + 1){
		cout << "Case #" << tcc <<": ";
		FOR(i,0,4)cin >> feld[i];
		if(won('O'))cout << "O won\n";
		else if(won('X'))cout << "X won\n";
		else if(incomplete())cout << "Game has not completed\n";
		else cout << "Draw\n";
	}
	return 0;
}
