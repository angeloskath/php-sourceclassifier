#include <iostream>
#include <string>
#include <cstring>
#include <cstdio>
#include <vector>
#include <algorithm>
#include <set>
#include <map>
#include <bitset>
#include <queue>
#pragma comment (linker, "/STACK:256000000")

using namespace std;

void solve(int test) {
	vector < string > s(4);
	for (int i = 0; i < 4; ++i) {
		cin >> s[i];
	}

	bool X = false, O = false;
	for (int i = 0; i < 4; ++i) {
		int x = 0, o = 0, t = 0;
		for (int j = 0; j < 4; ++j) {
			if (s[i][j] == 'X') {
				++x;
			}
			if (s[i][j] == 'O') {
				++o;
			}
			if (s[i][j] == 'T') {
				++t;
			}
		}

		if (x == 4 || (x == 3 && t == 1)) {
			X = true;
		}
		if (o == 4 || (o == 3 && t == 1)) {
			O = true;
		}
	}

	for (int i = 0; i < 4; ++i) {
		int x = 0, o = 0, t = 0;
		for (int j = 0; j < 4; ++j) {
			if (s[j][i] == 'X') {
				++x;
			}
			if (s[j][i] == 'O') {
				++o;
			}
			if (s[j][i] == 'T') {
				++t;
			}
		}

		if (x == 4 || (x == 3 && t == 1)) {
			X = true;
		}
		if (o == 4 || (o == 3 && t == 1)) {
			O = true;
		}
	}

	{
		int x = 0, o = 0, t = 0;
		for (int i = 0; i < 4; ++i) {
			if (s[i][i] == 'X') {
				++x;
			}
			if (s[i][i] == 'O') {
				++o;
			}
			if (s[i][i] == 'T') {
				++t;
			}
		}

		if (x == 4 || (x == 3 && t == 1)) {
			X = true;
		}
		if (o == 4 || (o == 3 && t == 1)) {
			O = true;
		}
	}

	{
		int x = 0, o = 0, t = 0;
		for (int i = 0; i < 4; ++i) {
			if (s[i][3 - i] == 'X') {
				++x;
			}
			if (s[i][3 - i] == 'O') {
				++o;
			}
			if (s[i][3 - i] == 'T') {
				++t;
			}
		}

		if (x == 4 || (x == 3 && t == 1)) {
			X = true;
		}
		if (o == 4 || (o == 3 && t == 1)) {
			O = true;
		}
	}

	bool D = true;
	for (int i = 0; i < 4; ++i) {
		for (int j = 0; j < 4; ++j) {
			if (s[i][j] == '.') {
				D = false;
			}
		}
	}

	if (X) {
		printf("Case #%d: X won\n", test);
	} else if (O) {
		printf("Case #%d: O won\n", test);
	} else if (D) {
		printf("Case #%d: Draw\n", test);
	} else {
		printf("Case #%d: Game has not completed\n", test);
	}
}

int main() {
	freopen("input.txt", "r", stdin);
	freopen("output.txt", "w", stdout);

	int tests;
	scanf("%d\n", &tests);
	for (int i = 1; i <= tests; ++i) {
		solve(i);
	}
	return 0;
}