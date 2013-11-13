#include <stdio.h>
#include <stdlib.h>
#include <string.h>

#define board_size 4
#define player1 'X'
#define player2 'O'
char matrix[board_size][board_size + 1];

typedef enum result_t{
	PLAYER1,
	PLAYER2,
	DRAW,
	NONE
}result_t;

result_t check_winner(){
	int i,j,diag1 = 0,diag2 = 0,diag_inv1 = 0,diag_inv2 = 0;
	result_t result = DRAW;
	for(i = 0;i < board_size;++i){
		int row1 = 0,col1 = 0,row2 = 0,col2 = 0;
		for(j = 0;j < board_size;++j){
			if(matrix[i][j] == '.')
				result = NONE;
			// ROW
			if(matrix[i][j] == player1 || matrix[i][j] == 'T'){
				row1++;
			}
			if(matrix[i][j] == player2 || matrix[i][j] == 'T'){
				row2++;
			}
			// COLUMN
			if(matrix[j][i] == player1 || matrix[j][i] == 'T'){
				col1++;
			}
			if(matrix[j][i] == player2 || matrix[j][i] == 'T'){
				col2++;
			}
			if(i == j){
				// DIAG 1
				if(matrix[i][i] == player1 || matrix[i][i] == 'T')
					diag1++;
				if(matrix[i][i] == player2 || matrix[i][i] == 'T')
					diag2++;
				// DIAG 2
				if(matrix[i][board_size - 1 - i] == player1 || matrix[i][board_size - 1 - i] == 'T')
					diag_inv1++;
				if(matrix[i][board_size - 1 - i] == player2 || matrix[i][board_size - 1 - i] == 'T')
					diag_inv2++;
			}
			if(diag_inv1 == board_size || diag1 == board_size || row1 == board_size || col1 == board_size || diag1== board_size)
				return PLAYER1;
			if(diag_inv2 == board_size || diag2 == board_size || row2 == board_size || col2 == board_size || diag2 == board_size)
				return PLAYER2;
		}
	}
	return result;
}

int main(){
	int T,i,j;
	scanf("%d\n",&T);
	for(i = 1;i <= T;++i){
		for(j = 0;j < board_size;++j){
			scanf("%s\n",matrix[j]);
		}
		scanf("\n");
		printf("Case #%d: ",i);
		switch(check_winner()){
			case PLAYER1:
				printf("%c won\n",player1);
				break;
			case PLAYER2:
				printf("%c won\n",player2);
				break;
			case DRAW:
				printf("Draw\n");
				break;
			default:
				printf("Game has not completed\n");
				break;
		}
	}
	return 0;
}

