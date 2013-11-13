#include <stdio.h>
#include <stdlib.h>

int main () {
	int i, j, k, l, m, n, o, p, q, r, s, t, X, O;
	char mat[10][10];
	
	scanf(" %d ", &t);
	for (o = 1; o <= t; o++) {
		scanf(" %s ", &mat[0]);
		scanf(" %s ", &mat[1]);
		scanf(" %s ", &mat[2]);
		scanf(" %s ", &mat[3]);
		
		X = 0;
		O = 0;
		if ((mat[0][0] == 'X' || mat[0][0] == 'T')
			&& (mat[1][1] == 'X' || mat[1][1] == 'T')
			&& (mat[2][2] == 'X' || mat[2][2] == 'T')
			&& (mat[3][3] == 'X' || mat[3][3] == 'T')) {
			X = 1;
		} else if ((mat[0][0] == 'O' || mat[0][0] == 'T')
			&& (mat[1][1] == 'O' || mat[1][1] == 'T')
			&& (mat[2][2] == 'O' || mat[2][2] == 'T')
			&& (mat[3][3] == 'O' || mat[3][3] == 'T')) {
			O = 1;
		} else if ((mat[0][3] == 'X' || mat[0][3] == 'T')
			&& (mat[1][2] == 'X' || mat[1][2] == 'T')
			&& (mat[2][1] == 'X' || mat[2][1] == 'T')
			&& (mat[3][0] == 'X' || mat[3][0] == 'T')) {
			X = 1;
		} else if ((mat[0][3] == 'O' || mat[0][3] == 'T')
			&& (mat[1][2] == 'O' || mat[1][2] == 'T')
			&& (mat[2][1] == 'O' || mat[2][1] == 'T')
			&& (mat[3][0] == 'O' || mat[3][0] == 'T')) {
			O = 1;
		}
		for (i = 0; i < 4; i++) {
			k = 0;
			for (j = 0; j < 4; j++)	 {
				if (mat[i][j] == 'O' || mat[i][j] == '.') {
					k = 1;
					break;	
				}
			}
			if (!k) {
				X = 1;
				break;	
			}
		}
		for (i = 0; i < 4; i++) {
			k = 0;
			for (j = 0; j < 4; j++)	 {
				if (mat[i][j] == 'X' || mat[i][j] == '.') {
					k = 1;
					break;	
				}
			}
			if (!k) {
				O = 1;
				break;	
			}
		}
		for (j = 0; j < 4; j++) {
			k = 0;
		 	for (i = 0; i < 4; i++){
				if (mat[i][j] == 'O' || mat[i][j] == '.') {
					k = 1;
					break;	
				}
			}
			if (!k) {
				X = 1;
				break;	
			}
		}
		for (j = 0; j < 4; j++) {
			k = 0;
		 	for (i = 0; i < 4; i++){
				if (mat[i][j] == 'X' || mat[i][j] == '.') {
					k = 1;
					break;	
				}
			}
			if (!k) {
				O = 1;
				break;	
			}
		}
		if (X) {
			printf("Case #%d: X won\n", o);
		} else if (O) {
			printf("Case #%d: O won\n", o);
		} else {
			k = 0;
			for (j = 0; j < 4; j++) {
			 	for (i = 0; i < 4; i++){
					if (mat[i][j] == '.') {
						k = 1;
						break;	
					}
				}
				if (k) {
					break;	
				}
			}
			if (!k) {
				printf("Case #%d: Draw\n", o);
			} else {
				printf("Case #%d: Game has not completed\n", o);
			}
		}
	}
	
	return 0;	
}
