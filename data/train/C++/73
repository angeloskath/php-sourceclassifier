#pragma comment(linker, "/STACK:60000000")
#define _CRT_SECURE_NO_WARNINGS

#include <cstdio>
#include <iostream>
#include <vector>
#include <cmath>
#include <algorithm>
#include <string>
#include <set>
#include <map>
#include <ctime>
#include <cstring>
#include <cassert>
#include <sstream>
#include <iomanip>
#include <complex>
#include <queue>
#include <functional>

using namespace std;

#define forn(i, n) for(int i = 0; i < (int)(n); i++)
#define ford(i, n) for(int i = (int)(n) - 1; i >= 0; i--)
#define pb push_back
#define mp make_pair
#define fs first
#define sc second
#define last(a) int(a.size() - 1)
#define all(a) a.begin(), a.end()
#define seta(a,x) memset (a, x, sizeof (a))
#define I (int)
#define next NEXTHUI
#define prev PREVHUI
#define y1 Y1HUI

typedef long long int64;
typedef pair <int, int> pii;
typedef long double ldb;

const long double eps = 1e-9;
const int inf = (1 << 30) - 1;
const int64 inf64 = ((int64)1 << 62) - 1;
const long double pi = 3.1415926535897932384626433832795;

template <class T> T sqr (T x) {return x * x;}

char a[5][5];

const int dx[8] = {1, -1, 0, 0, 1, 1, -1, -1};
const int dy[8] = {0, 0, 1, -1, 1, -1, 1, -1};

void solve() {
	forn(i, 4)
		forn(j, 4)
			cin >> a[i][j];
	int w1, w2;
	w1 = w2 = 0;
	forn(i, 4)
		forn(j, 4) 
			forn(l, 8) {
				int s1, s2;
				s1 = s2 = 0;
				forn(k, 4) {
					int x = i + dx[l] * k;
					int y = j + dy[l] * k;
					if (0 <= x && x < 4 && 0 <= y && y < 4) {
						if (a[x][y] == 'X' || a[x][y] == 'T')
							s1++;
						if (a[x][y] == 'O' || a[x][y] == 'T')
							s2++;
					}
				}
				if (s1 == 4)
						w1 = 1;
				if (s2 == 4)
					w2 = 1;
			}
	int end = 1;
	forn(i, 4)
		forn(j, 4)
			if (a[i][j] == '.')
				end = 0;
	if (w1 || w2) {
		if (!w2)
			cout << "X won" << endl;
		else if (!w1)
			cout << "O won" << endl;
		else
			cout << "Draw" << endl;
	} else {
		if (end)
			cout << "Draw" << endl;
		else
			cout << "Game has not completed" << endl;
	}									



}

int main ()
{
//	freopen ("input.txt", "r", stdin);
//	freopen ("output.txt", "w", stdout);
	int tt;
	cin >> tt;
	forn(ii, tt) {
		printf("Case #%d: ", ii + 1);
		solve();
	}	
	return 0;
}
