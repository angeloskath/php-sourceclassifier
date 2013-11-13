#include <stdio.h>

#define ROWS 4
#define COLS 4


int checkWon(char b[][COLS], char player){
	int r, c;
	
	for (r = 0; r < ROWS; r++){
		for (c = 0; c < COLS; c++)
			if ((b[r][c] != player) && (b[r][c] != 'T'))
				break;
		if (c == COLS)
			return 1;
	}
	
	for (c = 0; c < COLS; c++){
		for (r = 0; r < ROWS; r++)
			if ((b[r][c] != player) && (b[r][c] != 'T'))
				break;
		if (r == ROWS)
			return 1;
	}
	
	for (c = 0; c < COLS; c++){
		r = c;
		if ((b[r][c] != player) && (b[r][c] != 'T'))
			break;
	}
	if (c == COLS)
		return 1;
	
	for (c = 0; c < COLS; c++){
		r = ROWS-1-c;
		if ((b[r][c] != player) && (b[r][c] != 'T'))
			break;
	}
	if (c == COLS)
		return 1;
	
	return 0;
}


int isFullBoard(char b[][COLS]){
	int r, c;
	for (r = 0; r < ROWS; r++)
		for (c = 0; c < COLS; c++)
			if (b[r][c] == '.')
				return 0;
	return 1;
}



const char* calcStatus(char b[][COLS]){
	static const char* xWonStatus = "X won";
	static const char* oWonStatus = "O won";
	static const char* drawStatus = "Draw";
	static const char* gameNotFinishedStatus = "Game has not completed";
	
	if (checkWon(b, 'X'))
		return xWonStatus;
	else if (checkWon(b, 'O'))
		return oWonStatus;
	else if (isFullBoard(b))
		return drawStatus;
	else
		return gameNotFinishedStatus;
	
	return "0";
}

int main(void){
	int t, caseNumber;
	scanf("%d\n", &t);
	
	for (caseNumber = 1; caseNumber <= t; caseNumber++){
		char b[ROWS][COLS];
		int row, col;
		for (row = 0; row < ROWS; row++){
			for (col = 0; col < COLS; col++)
				b[row][col] = getchar();
			getchar(); // \n
		}
		getchar(); // Empty line between cases

		printf("Case #%d: %s\n", caseNumber, calcStatus(b));
	}
	
	return 0;
}