#include <stdio.h>

char a[4][10];

int won(char ch)
{
	int i;

	for (i = 0; i < 4; i++) {
		if ((a[i][0] == ch || a[i][0] == 'T') && (a[i][1] == ch || a[i][1] == 'T') && (a[i][2] == ch || a[i][2] == 'T') && (a[i][3] == ch || a[i][3] == 'T'))
			return 1;
		if ((a[0][i] == ch || a[0][i] == 'T') && (a[1][i] == ch || a[1][i] == 'T') && (a[2][i] == ch || a[2][i] == 'T') && (a[3][i] == ch || a[3][i] == 'T'))
			return 1;
	}
	if ((a[0][0] == ch || a[0][0] == 'T') && (a[1][1] == ch || a[1][1] == 'T') && (a[2][2] == ch || a[2][2] == 'T') && (a[3][3] == ch || a[3][3] == 'T'))
		return 1;
	if ((a[0][3] == ch || a[0][3] == 'T') && (a[1][2] == ch || a[1][2] == 'T') && (a[2][1] == ch || a[2][1] == 'T') && (a[3][0] == ch || a[3][0] == 'T'))
		return 1;
	return 0;
}

int draw(void)
{
	int i, j;

	for (i = 0; i < 4; i++)
		for (j = 0; j < 4; j++)
			if (a[i][j] == '.')
				return 0;
	return 1;
}

int main()
{
	int i, t, casen;

	freopen("input.txt", "r", stdin);
	freopen("output.txt", "w", stdout);
	scanf("%d", &t);
	for (casen = 1; casen <= t; casen++) {
		for (i = 0; i < 4; i++)
			scanf("%s", a[i]);
		printf("Case #%d: ", casen);
		if (won('X'))
			puts("X won");
		else if (won('O'))
			puts("O won");
		else if (draw())
			puts("Draw");
		else
			puts("Game has not completed");
	}
	return 0;
}