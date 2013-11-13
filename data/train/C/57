#include <stdio.h>

#define XWON 1
#define OWON 2
#define DRAW 3
#define NOTC 4

int main(){
	int i,j,k;
	int T;
	char temp;
	int soma;
	int resultado;
	int matriz[4][4];

	scanf("%d",&T);
	for (k = 0; k < T; ++k){
		for (i = 0; i < 4; ++i){
			for (j = 0; j < 4; ++j){
				scanf("%c",&temp);
				switch(temp){
					case '.': matriz[i][j] = 0;
					break;
					case 'O': matriz[i][j] = 5;
					break;
					case 'X': matriz[i][j] = 7;
					break;
					case 'T': matriz[i][j] = 35;
					break;
					default: j--;
					break;
				}
			}
		}
		resultado = 0;
		for (i = 0; i < 4; ++i){
			soma = matriz[i][0] + matriz[i][1] + matriz[i][2] + matriz[i][3];
			if((soma == 20) || (soma == 50)){
				resultado = OWON;
				break;
			}
			if((soma == 28) || (soma == 56)){
				resultado = XWON;
				break;
			}
			soma = matriz[0][i] + matriz[1][i] + matriz[2][i] + matriz[3][i];
			if((soma == 20) || (soma == 50)){
				resultado = OWON;
				break;
			}
			if((soma == 28) || (soma == 56)){
				resultado = XWON;
				break;
			}
		}
		soma = matriz[0][0] + matriz[1][1] + matriz[2][2] + matriz[3][3];
		if((soma == 20) || (soma == 50)){
			resultado = OWON;
		}
		if((soma == 28) || (soma == 56)){
			resultado = XWON;
		}
		soma = matriz[0][3] + matriz[1][2] + matriz[2][1] + matriz[3][0];
		if((soma == 20) || (soma == 50)){
			resultado = OWON;
		}
		if((soma == 28) || (soma == 56)){
			resultado = XWON;
		}
		if(resultado == 0){
			for (i = 0; i < 4; ++i){
				for (j = 0; j < 4; ++j){
					if (matriz[i][j] == 0){
						resultado = NOTC;
					}
				}
			}
		}
		if(resultado == 0){
			resultado = DRAW;
		}
		switch(resultado){
			case OWON: printf("Case #%d: O won\n", k+1);
			break;
			case XWON: printf("Case #%d: X won\n", k+1);
			break;
			case DRAW: printf("Case #%d: Draw\n", k+1);
			break;
			case NOTC: printf("Case #%d: Game has not completed\n", k+1);
			break;
		}
	}
	return 0;
}
