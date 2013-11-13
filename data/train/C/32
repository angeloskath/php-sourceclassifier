#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <math.h>

int main(int argc, char *argv[]) {

	char board[4][4];

	FILE *f = fopen("1.in", "r");

	int i, j, k;

	int cases;
	fscanf(f, "%i", &cases);

	for (i = 1; i <= cases; ++i) {
		for (j = 0; j < 4; ++j) {
			for (k = 0; k < 4; ++k) {
				fscanf(f, "%c", &board[j][k]);

				if (board[j][k] == '\n' || board[j][k] == '\r') {
					--k;
					continue;
				}
			}
		}

		for (j = 0; j < 4; ++j) {
			int T = 0;
			int X = 0;
			int O = 0;


			for (k = 0; k < 4; ++k) {
				switch(board[j][k]) {
					case 'T':
						++T;
						break;
					case 'X':
						++X;
						break;
					case 'O':
						++O;
						break;
					default:
						break;
				}

			}

			if (X + T >= 4) {
				printf("Case #%i: X won\n", i);
				break;
			}
			else if (O + T >= 4) {
				printf("Case #%i: O won\n", i);
				break;
			}

			T = 0;
			X = 0;
			O = 0;

			for (k = 0; k < 4; ++k) {
				switch(board[k][j]) {
					case 'T':
						++T;
						break;
					case 'X':
						++X;
						break;
					case 'O':
						++O;
						break;
					default:
						break;
				}
			}


			if (X + T >= 4) {
				printf("Case #%i: X won\n", i);
				break;
			}
			else if (O + T >= 4) {
				printf("Case #%i: O won\n", i);
				break;
			}

			T = 0;
			X = 0;
			O = 0;

			for (k = 0; k < 4; ++k) {
				switch(board[k][k]) {
					case 'T':
						++T;
						break;
					case 'X':
						++X;
						break;
					case 'O':
						++O;
						break;
					default:
						break;
				}
			}

			if (X + T >= 4) {
				printf("Case #%i: X won\n", i);
				break;
			}
			else if (O + T >= 4) {
				printf("Case #%i: O won\n", i);
				break;
			}


			T = 0;
			X = 0;
			O = 0;

			for (k = 0; k < 4; ++k) {
				switch(board[3 - k][k]) {
					case 'T':
						++T;
						break;
					case 'X':
						++X;
						break;
					case 'O':
						++O;
						break;
					default:
						break;
				}
			}

			if (X + T >= 4) {
				printf("Case #%i: X won\n", i);
				break;
			}
			else if (O + T >= 4) {
				printf("Case #%i: O won\n", i);
				break;
			}

		}

		if (j == 4) {
			int a = 0;

			for (j = 0; j < 4; ++j) {
				for (k = 0; k < 4; ++k) {
					if (board[j][k] == '.') {
						a = 1;
						break;
					}
				}
				if (k != 4)
					break;
			}

			if (!a) {
				printf("Case #%i: Draw\n", i);
			}
			else {
				printf("Case #%i: Game has not completed\n", i);
			}
		}
	}


	fclose(f);

	return 0;
}
