#include <stdio.h>
#include <stdlib.h>
#include <string.h>

#define NOT_COMPLETE 0
#define COMPLETE 1

#define DRAW 0
#define WON_X 1
#define WON_Y 2

int main(void)
{
	char b[4][6];
	int T;
	int i,j,k; // for loop
	int won,comp;

	scanf("%d", &T);

	for(i=0;i<T;i++){
		int diag1X,diag1O,diag2X,diag2O;
		diag1X = diag1O = diag2X = diag2O = 1;

		comp = COMPLETE;
		won = DRAW;

		for(j=0;j<4;j++){
			scanf("%s", b[j]);
		}
		for(j=0;j<4;j++){
			int rowX,rowO,colX,colO;
			rowX = rowO = colX = colO = 1;
			for(k=0;k<4;k++){
				// row
				switch(b[j][k]){
				case 'X': rowO = 0;	break;
				case 'O': rowX = 0;	break;
				case '.': rowO = rowX = 0; comp = NOT_COMPLETE; break;
				default: break;
				}

				// col
				switch(b[k][j]){
				case 'X': colO = 0;	break;
				case 'O': colX = 0;	break;
				case '.': colO = colX = 0; comp = NOT_COMPLETE; break;
				default: break;
				}
			}
			if(rowX > 0 || colX > 0){
				won = WON_X;
			} else if(rowO > 0 || colO > 0){
				won = WON_Y;
			}
			// diag1
			switch(b[j][j]){
			case 'X': diag1O = 0; break;
			case 'O': diag1X = 0; break;
			case '.': diag1O = diag1X = 0; comp = NOT_COMPLETE; break;
			default: break;
			}
			// diag2
			switch(b[j][3-j]){
			case 'X': diag2O = 0; break;
			case 'O': diag2X = 0; break;
			case '.': diag2O = diag2X = 0; comp = NOT_COMPLETE; break;
			default: break;
			}
		}
		if(diag1X > 0 || diag2X > 0){
			won = WON_X;
		} else if(diag1O > 0 || diag2O > 0){
			won = WON_Y;
		}

		printf("Case #%d: ", i+1);
		if(won == WON_X){
			printf("X won\n");
		} else if(won == WON_Y){
			printf("O won\n");
		} else if(comp == NOT_COMPLETE) {
			printf("Game has not completed\n");
		} else {
			printf("Draw\n");
		}
	}
}
