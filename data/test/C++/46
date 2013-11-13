#include <cstdio>
#include <iostream>
using namespace std;

char f[5][5];

int Check() {
	int qx = 0, qo = 0, qt = 0;
	for (int i = 0; i < 4; ++i) {
		qx = 0;
		qo = 0;
		qt = 0;
		for (int j = 0; j < 4; ++j) {
			if (f[i][j] == 'X') {
				++qx;
			} else if (f[i][j] == 'O') {
				++qo;
			} else if (f[i][j] == 'T') {
				++qt;
			}
		}
		if (qx + qt == 4) {
			return 1;
		} else if (qo + qt == 4) {
			return 2;
		}
	}

	for (int j = 0; j < 4; ++j) {
		qx = 0;
		qo = 0;
		qt = 0;
		for (int i = 0; i < 4; ++i) {
			if (f[i][j] == 'X') {
				++qx;
			} else if (f[i][j] == 'O') {
				++qo;
			} else if (f[i][j] == 'T') {
				++qt;
			}
		}
		if (qx + qt == 4) {
			return 1;
		} else if (qo + qt == 4) {
			return 2;
		}
	}

	qx = 0;
	qo = 0;
	qt = 0;
	for (int i = 0; i < 4; ++i) {
		if (f[i][i] == 'X') {
			++qx;
		} else if (f[i][i] == 'O') {
			++qo;
		} else if (f[i][i] == 'T') {
			++qt;
		}
	}
	if (qx + qt == 4) {
		return 1;
	} else if (qo + qt == 4) {
		return 2;
	}

	qx = 0;
	qo = 0;
	qt = 0;
	for (int i = 0; i < 4; ++i) {
		if (f[i][3 - i] == 'X') {
			++qx;
		} else if (f[i][3 - i] == 'O') {
			++qo;
		} else if (f[i][3 - i] == 'T') {
			++qt;
		}
	}
	if (qx + qt == 4) {
		return 1;
	} else if (qo + qt == 4) {
		return 2;
	}

	bool have_free = false;
	for (int i = 0; i < 4; ++i) {
		for (int j = 0; j < 4; ++j) {
			if (f[i][j] == '.') {
				have_free = true;
			}
		}
	}
	if (have_free) {
		return 0;
	} else {
		return 3;
	}
}

int main() {
	freopen("a.in", "r", stdin);
	freopen("a.out", "w", stdout);
	int T;
	scanf("%d", &T);
	for (int I = 0; I < T; ++I) {
		printf("Case #%d: ", I + 1);
		for (int i = 0; i < 4; ++i) {
			scanf("%s", f[i]);
		}
		int result = Check();
		if (result == 0) {
			puts("Game has not completed");
		} else if (result == 1) {
			puts("X won");
		} else if (result == 2) {
			puts("O won");
		} else {
			puts("Draw");
		}
	}
	return 0;
}