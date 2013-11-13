#include <stdio.h>
//#define DEBUG

main() {
	int T, i, j, k;
	char c1[17];
	char winner;
	char * c2 = c1 + 4;
	char * c3 = c2 + 4;
	char * c4 = c3 + 4;

	scanf(" %d", &T);
	
	for(i = 1; i <= T; i++) {
		scanf(" %[^\n]", c1);
		scanf(" %[^\n]", c2);
		scanf(" %[^\n]", c3);
		scanf(" %[^\n]", c4);
#ifdef DEBUG
		printf("%s\n", c1, c2, c3, c4);
#endif
		// check if anyone has won (h/v)

		for(j = 0; j < 4; j++) {
			winner = 'T';

			for(k = 0; k < 4; k++) {
				if(winner == 'T')
					winner = c1[4 * j + k];
				else if(winner != c1[4 * j + k] && c1[4 * j + k] != 'T') {
					winner = '.';
					break;
				}
			}

			if(winner != '.') {
#ifdef DEBUG
				printf("Horizontal %d\n", j);
#endif
				printf("Case #%d: %c won\n", i, winner);
				break;
			}

			winner = 'T';

			for(k = 0; k < 4; k++) {
				if(winner == 'T')
					winner = c1[4 * k + j];
				else if(winner != c1[4 * k + j] && c1[4 * k + j] != 'T') {
					winner = '.';
					break;
				}
			}

			if(winner != '.') {
#ifdef DEBUG
				printf("Vertical %d\n", j);
#endif
				printf("Case #%d: %c won\n", i, winner);
				break;
			}
		}

		if(winner != '.') continue;

		// negative gradient diag

		winner = 'T';

		for(k = 0; k < 4; k++) {
			if(winner == 'T')
				winner = c1[5 * k];
			else if(winner != c1[5 * k] && c1[5 * k] != 'T') {
				winner = '.';
				break;
			}
		}

		if(winner != '.') {
#ifdef DEBUG
			printf("Negative gradient diagonal\n");
#endif
			printf("Case #%d: %c won\n", i, winner);
			continue;
		}

		// positive gradient diag

		winner = 'T';

		for(k = 0; k < 4; k++) {
			if(winner == 'T')
				winner = c1[3 * k + 3];
			else if(winner != c1[3 * k + 3] && c1[3 * k + 3] != 'T') {
				winner = '.';
				break;
			}
		}

		if(winner != '.') {
#ifdef DEBUG
			printf("Positive gradient diagonal\n");
#endif
			printf("Case #%d: %c won\n", i, winner);
			continue;
		}

		// otherwise check if the game is over yet

		for(k = 0; k < 16; k++) {
			if(c1[k] == '.') {
				printf("Case #%d: Game has not completed\n", i);
				break;
			}
		}

		if(k == 16) {
			printf("Case #%d: Draw\n", i);
		}
	}
}
