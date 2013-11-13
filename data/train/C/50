#include <stdio.h>

int main()
{
	int k, i, j, t, l, point, sum[3][10], xwon, owon;
	scanf("%d\n", &t);
	char buf;
	for(k = 0; k < t; k++)
	{
		owon = 0;
		xwon = 0;
		point = 0;
		for(i = 0; i < 10; i++) sum[0][i] = 0, sum[1][i] = 0, sum[2][i] = 0;
		for(i = 0; i < 4; i++)
		{
			for(j = 0; j < 4; j++)
			{
				buf = getchar();
				if(buf != '.')
				{
					if(buf == 'O') l = 0;
					else if(buf == 'X') l = 1;
					else l = 2;
					sum[l][j] += 1;
					sum[l][4 + i] += 1;
					if(i == j) sum[l][8] += 1;
					if(i == 3 - j) sum[l][9] += 1;
				}
				else point = 1;
			}
			getchar();
		}
		for(i = 0; i < 10; i++)
		{
			if(sum[0][i] + sum[2][i] == 4 && sum[2][i] <= 1) owon = 1;
			if(sum[1][i] + sum[2][i] == 4 && sum[2][i] <= 1) xwon = 1;
		}
		printf("Case #%d: ", k + 1);
		if(owon ^ xwon)
		{
			printf("%s\n", (owon) ? "O won" : "X won");
		}
		else
		{
			printf("%s\n", (point == 0) ? "Draw" : "Game has not completed");
		}
		getchar();
	}
}
