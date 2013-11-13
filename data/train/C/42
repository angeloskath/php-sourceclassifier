#include "stdio.h"

char check[10][4][2]= {
						{{0,0},{0,1},{0,2},{0,3}},
						{{1,0},{1,1},{1,2},{1,3}},
						{{2,0},{2,1},{2,2},{2,3}},
						{{3,0},{3,1},{3,2},{3,3}},
						{{0,0},{1,0},{2,0},{3,0}},
						{{0,1},{1,1},{2,1},{3,1}},
						{{0,2},{1,2},{2,2},{3,2}},
						{{0,3},{1,3},{2,3},{3,3}},
						{{0,0},{1,1},{2,2},{3,3}},
						{{0,3},{1,2},{2,1},{3,0}}
					  };

int main ()
{
	int t;
	int i;
	char map[4][5] = {{0}};

	scanf("%d", &t);

	for (i=0; i<t; i++) {
		int j;
		char winner = 0;
		int not_complete = 0;
		for (j=0; j<4; j++) {
			scanf("%s", map[j]);
		}

		for (j=0; j<10; j++) {
			char m[3] = "XO";
			int k;
			for (k=0;k<2; k++){
				int sum = 0;
				int d;
				for(d=0; d<4; d++){
					if(map[check[j][d][0]][check[j][d][1]] == m[k] || map[check[j][d][0]][check[j][d][1]] == 'T') {
						sum++;
					}else if(map[check[j][d][0]][check[j][d][1]] == m[k] || map[check[j][d][0]][check[j][d][1]] == '.') {
						not_complete = 1;
					}
				}

				if (sum == 4) {
					winner = m[k];
				}

				if (winner != 0) {
					break;
				}
			}

			if (winner != 0) {
				break;
			}
		}

		
		if (winner != 0) {
			printf("Case #%d: %c won\n", i+1, winner);
		}else if(not_complete) {
			printf("Case #%d: Game has not completed\n", i+1);
		}else{
			printf("Case #%d: Draw\n", i+1);
		}
	}

	return 0;
}
