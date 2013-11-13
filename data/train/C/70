/*       Jason Lau  -  Tic-Tac-Toe-Tomek       */
#include <stdio.h>

#define MAXN	4

#define UNKNOWN	0
#define ISXS	1
#define ISOS	2

void printStatus(int tcase);

int main(void) {
	int n, i;
	scanf("%d", &n);
	for (i = 1; i <= n; i++)
		printStatus(i);
	return 0;
}

int filled(char map[MAXN][MAXN]);
int check(char map[MAXN][MAXN], int ln, int col, int delln, int delcol);

void printStatus(int tcase) {
	char map[MAXN][MAXN];
	int i, j, finish, result = 0;
	for (i = 0; i < MAXN; i++)
		for (j = 0; j < MAXN; j++)
			scanf(" %c", &map[i][j]);
	finish = filled(map);
	for (i = 0; i < MAXN; i++) {
		result = result ? result : check(map, i, 0, 0, 1);
		result = result ? result : check(map, 0, i, 1, 0);
	}
	result = result ? result : check(map, 0, 0, 1, 1);
	result = result ? result : check(map, 0, 3, 1, -1);
	printf("Case #%d: ", tcase);
	switch (result) {
		case UNKNOWN:
			if (finish) printf("Draw");
			else printf("Game has not completed");
			break;
		case ISXS:
			printf("X won");
			break;
		case ISOS:
			printf("O won");
	}
	putchar('\n');
}

int check(char map[MAXN][MAXN], int ln, int col, int dl, int dc) {
	int i, j, status = UNKNOWN;
	for (i = ln, j = col;
			i >= 0 && j >= 0 && i < MAXN && j < MAXN;
			i += dl, j += dc)
		if (map[i][j] == '.') return UNKNOWN;
		else if (map[i][j] == 'X') {
			if (status == UNKNOWN) status = ISXS;
			if (status == ISOS) return UNKNOWN;
		} else if (map[i][j] == 'O') {
			if (status == UNKNOWN) status = ISOS;
			if (status == ISXS) return UNKNOWN;
		}
	return status;
}

int filled(char map[MAXN][MAXN]) {
	int i, j;
	for (i = 0; i < MAXN; i++)
		for (j = 0; j < MAXN; j++)
			if (map[i][j] == '.')
				return 0;
	return 1;
}
