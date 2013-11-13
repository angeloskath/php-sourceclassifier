#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main() {
	char board[4][5];
	int i,j,t,T;
	int x,o,w;
	int X,O,E;

	scanf("%i", &T);

	for (t=0;t<T;t++) {
		X = O = E = 0;

		for (i=0;i<4;i++){
			scanf("%s",board[i]);
			//printf("%s\n",board[i]);
		}

		//Each row
		for (i=0;i<4;i++){
			x = o = w = 0;
			for (j=0;j<4;j++){
				switch (board[i][j]) {
					case 'O': o++; break;
					case 'T': w++; break;
					case 'X': x++; break;
					case '.': E++; break;
				}
			}

			if (x == 4 || (x == 3 && w == 1))
				X++;
			else if (o == 4 || (o == 3 && w == 1))
				O++;
		}

		//Each column
		for (i=0;i<4;i++){
			x = o = w = 0;
			for (j=0;j<4;j++){
				switch (board[j][i]) {
					case 'O': o++; break;
					case 'T': w++; break;
					case 'X': x++; break;
					case '.': E++; break;
				}
			}

			if (x == 4 || (x == 3 && w == 1))
				X++;
			else if (o == 4 || (o == 3 && w == 1))
				O++;
		}

		//Diagonals
		x = o = w = 0;
		for (i=0;i<4;i++){
			switch (board[i][i]) {
				case 'O': o++; break;
				case 'T': w++; break;
				case 'X': x++; break;
				case '.': E++; break;
			}
		}
		if (x == 4 || (x == 3 && w == 1))
			X++;
		else if (o == 4 || (o == 3 && w == 1))
			O++;
	
		x = o = w = 0;
		for (i=0;i<4;i++){
			switch (board[3-i][i]) {
				case 'O': o++; break;
				case 'T': w++; break;
				case 'X': x++; break;
				case '.': E++; break;
			}
		}
		if (x == 4 || (x == 3 && w == 1))
			X++;
		else if (o == 4 || (o == 3 && w == 1))
			O++;


		//Judge
		//printf("X=%d O=%d E=%d\n",X,O,E);
		if (X > 0 && O == 0)
			printf("Case #%d: X won\n",t+1);
		else if (X == 0 && O > 0)
			printf("Case #%d: O won\n",t+1);
		else if (X==0 && O==0 && E==0)
			printf("Case #%d: Draw\n",t+1);
		else
			printf("Case #%d: Game has not completed\n",t+1);
	}

}
