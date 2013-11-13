#include <iostream>
#include <cstdio>
#include <cstdlib>
#include <ctime>
#include <cmath>
#include <cstring>
#include <algorithm>
#include <vector>
#include <set>
#include <map>
#include <bitset>
#include <queue>
#include <deque>
#include <stack>
#include <complex>
#include <cassert>

using namespace std;

#define pb push_back
#define mp make_pair
#define fs first
#define sc second
#define sz(s) int((s).size())
#ifdef LOCAL
#define eprintf(...) fprintf(stderr, __VA_ARGS__)
#define LLD "%lld"
#else
#define eprintf(...) 42
#define LLD "%I64d"
#endif
#define next _next
#define prev _prev
#define rank _rank
#define link _link
#define hash _hash

typedef long long ll;
typedef long long llong;
typedef unsigned long long ull;
typedef unsigned int uint;
typedef pair <int, int> pii;
typedef vector <int> vi;
typedef complex <double> tc;

const int inf = int(1e9);
const double eps = 1e-9;
const double pi = 4 * atan(double(1));

char a[10][10];

inline bool check(char a, char b, char c, char d, char e){
	if(a == 'T'){
		if(b == c && b == d && b == e){
			return true;
		}
		return false;
	}
	if(b == 'T'){
		if(a == c && a == d && a == e){
			return true;
		}
		return false;
	}
	if(c == 'T'){
		if(a == b && a == d && a == e){
			return true;
		}
		return false;
	}
	if(d == 'T'){
		if(a == b && a == c && a == e){
			return true;
		}
		return false;
	}
	if(a == b && a == c && a == d && a == e){
		return true;
	}
	return false;
}

inline void write_x(int test){
	printf("Case #%d: X won\n", test);
}

inline void write_o(int test){
	printf("Case #%d: O won\n", test);
}

inline void solve(int test){
	for(int i = 0; i < 4; i++){
		for(int j = 0; j < 4; j++){
			scanf(" %c", &a[i][j]);
		}
	}
	for(int i = 0; i < 4; i++){
		if(check(a[i][0], a[i][1], a[i][2], a[i][3], 'X')){
			write_x(test);
			return;
		}
		if(check(a[0][i], a[1][i], a[2][i], a[3][i], 'X')){
			write_x(test);
			return;
		}
	}
	if(check(a[0][0], a[1][1], a[2][2], a[3][3], 'X')){
		write_x(test);
		return;
	}
	if(check(a[0][3], a[1][2], a[2][1], a[3][0], 'X')){
		write_x(test);
		return;
	}
	for(int i = 0; i < 4; i++){
		if(check(a[i][0], a[i][1], a[i][2], a[i][3], 'O')){
			write_o(test);
			return;
		}
		if(check(a[0][i], a[1][i], a[2][i], a[3][i], 'O')){
			write_o(test);
			return;
		}
	}
	if(check(a[0][0], a[1][1], a[2][2], a[3][3], 'O')){
		write_o(test);
		return;
	}
	if(check(a[0][3], a[1][2], a[2][1], a[3][0], 'O')){
		write_o(test);
		return;
	}
	for(int i = 0; i < 4; i++){
		for(int j = 0; j < 4; j++){
			if(a[i][j] == '.'){
				printf("Case #%d: Game has not completed\n", test);
				return;
			}
		}
	}
	printf("Case #%d: Draw\n", test);
}

int main(int argc, char **argv){
	if(argc > 1){
		freopen(argv[1], "r", stdin);
		freopen("ans.txt", "w", stdout);
	}
	else{
		freopen("input.txt", "r", stdin);
		freopen("output.txt", "w", stdout);
	}
	int t;
	scanf("%d", &t);
	for(int i = 0; i < t; i++){
		solve(i + 1);
		cerr << "test " << i << " of " << t << endl;
	}
	return 0;
}
