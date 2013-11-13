#include <stdio.h>

const int DIM = 4;

static inline int getPlace(int row, int col)
{
	return row * DIM + col;
}

int checkRows(int *board)
{
	int player;
	int row;
	int col;
	int v;
	for (player=1;player<=2;++player)
	{
		for (row=0;row<DIM;++row)
		{
			for (col=0;col<DIM;++col)
			{
				v = board[getPlace(row, col)];
				if (v!=player && v!=3)
					break;
				else if (col == DIM-1)
				{
					return player;
				}
			}
		}
	}
	return 0;
}

int checkCols(int *board)
{
	int player;
	int row;
	int col;
	int v;
	for (player=1;player<=2;++player)
	{
		for (row=0;row<DIM;++row)
		{
			for (col=0;col<DIM;++col)
			{
				v = board[getPlace(col, row)];
				if (v!=player && v!=3)
					break;
				else if (col == DIM-1)
				{
					return player;
				}
			}
		}
	}
	return 0;
}

int checkDiags(int *board)
{
	int player;
	int row;
	int col;
	int v;
	for (player=1;player<=2;++player)
	{
		for (row=0;row<DIM;++row)
		{
			col = row;
			v = board[getPlace(row, col)];
			if (v!=player && v!=3)
				break;
			else if (col == DIM-1)
			{
				return player;
			}
		}
		for (row=0;row<DIM;++row)
		{
			col = DIM - row - 1;
			v = board[getPlace(row, col)];
			if (v!=player && v!=3)
				break;
			else if (col == 0)
			{
				return player;
			}
		}
	}
	return 0;
}

int checkComplete(int *board)
{
	int row;
	int col;
	for (row=0;row<DIM;++row)
	{
		for (col=0;col<DIM;++col)
		{
			if (!board[getPlace(row, col)])
				return 0;
		}
	}
	return 1;
}

char *printWinner(int winner)
{
	if (winner == 1)
		return "X won";
	else
		return "O won";
}

char *solveIt(int *board)
{
	int playerWon = checkRows(board);
	if (playerWon)
		return printWinner(playerWon);
	playerWon = checkCols(board);
	if (playerWon)
		return printWinner(playerWon);
	playerWon = checkDiags(board);
	if (playerWon)
		return printWinner(playerWon);
	if (checkComplete(board))
		return "Draw";
	else
		return "Game has not completed";
}

int main(int argc, char **argv)
{
	int cases;
	scanf("%d", &cases);
	int board[16];
	int place;
	int i;
	char c;
	for (i=1;i<=cases;++i)
	{
		for (place=0;place<16;++place)
		{
			scanf("%c", &c);
			switch (c)
			{
				case 'X':
					board[place]=1;
					break;
				case 'O':
					board[place]=2;
					break;
				case '.':
					board[place]=0;
					break;
				case 'T':
					board[place]=3;
					break;
				default:
					--place;
					break;
			}
		}
		printf("Case #%d: %s\n", i, solveIt(board));
	}
	return 0;
}
