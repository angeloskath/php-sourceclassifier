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
#include <bitset>
#include <sstream>

using namespace std;
//-----------------------------------------------------------
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

typedef long long int64;
typedef pair <int, int> pii;
typedef long double ldb;

const long double eps = 1e-9;
const int inf = (1 << 30) - 1;
const int64 inf64 = ((int64)1 << 62) - 1;
const long double pi = 3.1415926535897932384626433832795;
//-----------------------------------------------------------

#define S 4
#define P 2
#define O 0
#define X 1
#define Add_And_Check(Player, Line, Win) \
	Line[Player]++; if(Line[Player] == S) Win[Player] = true;



int main()
{
	int cases;
	int casenum = 1;
	freopen("input", "r", stdin);
	freopen("output", "w", stdout);

	scanf("%d", &cases);
	while(cases--)
	{
		char tmp[S + 1];
		bool isFinish = true;
		bool isWin[P] = {false, false};

		int row[S][P] = {0};
		int col[S][P] = {0};
		int d[P] = {0};
		int a[P] = {0};

		forn(i, S){
			scanf("%s", tmp);
			forn(j, S){
				switch(tmp[j]){
				case '.':
					isFinish = false;
					break;
				case 'O':
					Add_And_Check(O, row[i], isWin);
					Add_And_Check(O, col[j], isWin);
					if( i == j ) 			Add_And_Check(O, d, isWin);
					if( i == S - 1 - j ) 	Add_And_Check(O, a, isWin);

					break;
				case 'X':
					Add_And_Check(X, row[i], isWin);
					Add_And_Check(X, col[j], isWin);
					if( i == j ) 			Add_And_Check(X, d, isWin);
					if( i == S - 1 - j ) 	Add_And_Check(X, a, isWin);
					break;
				case 'T':
					Add_And_Check(O, row[i], isWin);
					Add_And_Check(O, col[j], isWin);
					if( i == j ) 			Add_And_Check(O, d, isWin);
					if( i == S - 1 - j ) 	Add_And_Check(O, a, isWin);
					Add_And_Check(X, row[i], isWin);
					Add_And_Check(X, col[j], isWin);
					if( i == j ) 			Add_And_Check(X, d, isWin);
					if( i == S - 1 - j ) 	Add_And_Check(X, a, isWin);
					break;
				}
			}
		}



		printf("Case #%d: ", casenum++);
		if( isFinish && isWin[O] == isWin[X] ){
			printf("Draw\n");
		} else if( isWin[O] ){
			printf("O won\n");
		} else if( isWin[X] ){
			printf("X won\n");
		} else if( isFinish == false ){
			printf("Game has not completed\n");
		}

	}
	return 0;
}

