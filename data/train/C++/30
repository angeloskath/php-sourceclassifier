#include <iostream>
#include <cstdio>
#include <cmath>
#include <algorithm>
#include <vector>
#include <map>
#include <set>
#include <bitset>
#include <queue>
#include <stack>
#include <sstream>
#include <cstring>
#include <numeric>
#include <ctime>

#define re return
#define fi first
#define se second
#define mp make_pair
#define pb push_back
#define all(x) (x).begin(), (x).end()
#define sz(x) ((int) (x).size())
#define rep(i, n) for (int i = 0; i < (n); i++)
#define rrep(i, n) for (int i = (n) - 1; i >= 0; i--)
#define y0 y32479
#define y1 y95874
#define fill(x, y) memset(x, y, sizeof(x))
#define sqr(x) ((x) * (x))
#define sqrt(x) sqrt(abs(x))
#define unq(x) (x.resize(unique(all(x)) - x.begin()))
#define spc(i,n) " \n"[i == n - 1]

using namespace std;

typedef vector<int> vi;
typedef vector<vi> vvi;
typedef pair<int, int> ii;
typedef vector<ii> vii;
typedef vector<string> vs;
typedef double D;
typedef long double LD;
typedef long long ll;
typedef pair<ll, ll> pll;
typedef vector<ll> vll;

template<class T> T abs(T x) { return x > 0 ? x : -x;}

int m;
int n;

string s[4];

int matr[4][4];

int dx[8] = {1, 0, -1, 0, 1, 1, -1, -1};
int dy[8] = {0, 1, 0, -1, 1, -1, 1, -1};

int check(int t) {
	rep(o, 8)
	rep(i, 4) rep(j, 4) {
		int g = 1;
		rep(k, 4) {
			int ci = i + dx[o] * k;
			int cj = j + dy[o] * k;
			if (ci < 0 || ci >= 4 || cj < 0 || cj >= 4 || (matr[ci][cj] & t) == 0) {
				g = 0;
				break;
			}
		}
		if (g)
			re 1;
	}
	re 0;
}

int main() {
	freopen("input.txt", "r", stdin);
	freopen("output.txt", "w", stdout);

	int tc;
	cin >> tc;
	rep(tt, tc) {
		cout << "Case #" << tt + 1 << ": ";

		rep(i, 4) {
			cin >> s[i];
		}

		fill(matr, 0);
		rep(i, 4)
		rep(j, 4) {
			if (s[i][j] == 'T')
				matr[i][j] = 3;
			if (s[i][j] == 'O')
				matr[i][j] = 2;
			if (s[i][j] == 'X')
				matr[i][j] = 1;
		}

		if (check(1)) {
			cout << "X won" << endl;
			continue;
		}
		if (check(2)) {
			cout << "O won" << endl;
			continue;
		}
		int f = 0;
		rep(i, 4) rep(j, 4)
				if (!matr[i][j])
					f = 1;
		if (!f) {
			cout << "Draw" << endl;
			continue;;
		}

		cout << "Game has not completed" << endl;

	}

	re 0;
}
