#include <stdio.h>
#include <assert.h>

int mtr[4][4];

int Win(int id);

int main()
{
	int cn, cc;
	freopen("l.in", "r", stdin);
	freopen("l.out", "w", stdout);
	scanf("%d\n", &cn);

	for (cc=1; cc<=cn; cc++)
	{
		int full;
		int i,j;

		full = 1;
		for (i=0; i<4; i++){
			for (j=0; j<4; j++){
				switch(getchar())
				{
				case '.': mtr[i][j] = 0; full = 0; break;
				case 'X': mtr[i][j] = 1; break;
				case 'O': mtr[i][j] = 2; break;
				case 'T': mtr[i][j] = 3; break;
				default:  assert(0); break;
				}
			}
			getchar();
		}
		getchar();

		printf("Case #%d: ", cc);
		if (Win(0))
			puts("X won");
		else if (Win(1))
			puts("O won");
		else if (full)
			puts("Draw");
		else
			puts("Game has not completed");
	}

	return 0;
}

int Win(int id)
{
	int mask = 1<<id;
	int i,j;

	for (i=0; i<4; i++)
	{
		for (j=0; j<4; j++){
			if (!(mtr[i][j] & mask))
				break;
		}
		if (j == 4)
			return 1;

		for (j=0; j<4; j++){
			if (!(mtr[j][i] & mask))
				break;
		}
		if (j == 4)
			return 1;
	}

	for (i=0; i<4; i++){
		if (!(mtr[i][i] & mask))
			break;
	}
	if (i == 4)
		return 1;

	for (i=0; i<4; i++){
		if (!(mtr[i][3-i] & mask))
			break;
	}
	if (i == 4)
		return 1;

	return 0;
}