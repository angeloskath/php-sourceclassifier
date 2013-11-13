#include<stdio.h>

int smap[4][4];

int main() {
	int t, i, j, Ncase;
	int win, fin, cur;
	char ch;
	
	scanf("%d", &Ncase);
	for (t = 1; t <= Ncase; t ++) {
		win = 0;
		fin = 1;
		getchar();
		
		for (i = 0; i < 4; i ++) {
			for (j = 0; j < 4; j ++) {
				ch = getchar();
			
				if (ch == '.') {
					smap[i][j] = 4;
					fin = 0;
				} else if (ch == 'X') {
					smap[i][j] = 1;
				} else if (ch == 'O') {
					smap[i][j] = 2;
				} else {
					smap[i][j] = 0;
				}
			}
			getchar();
		}
		
		for (i = 0; i < 4; i ++) {
			cur = 0;
			for (j = 0; j < 4; j ++) {
				cur |= smap[i][j];
			}
			if (cur == 1 || cur == 2) {
				win = cur;
			}
			
			cur = 0;
			for (j = 0; j < 4; j ++) {
				cur |= smap[j][i];
			}
			if (cur == 1 || cur == 2) {
				win = cur;
			}
		}
		
		cur = 0;
		for (i = 0; i < 4; i ++) {
			cur |= smap[i][i];
		}
		if (cur == 1 || cur == 2) {
			win = cur;
		}
		cur = 0;
		for (i = 0; i < 4; i ++) {
			cur |= smap[i][3 - i];
		}
		if (cur == 1 || cur == 2) {
			win = cur;
		}
		
		printf("Case #%d: ", t);
		if (win == 1) {
			printf("X won");
		} else if (win == 2) {
			printf("O won");
		} else if (fin == 1) {
			printf("Draw");
		} else {
			printf("Game has not completed");
		}
		printf("\n");
	}
	return 0;
}
