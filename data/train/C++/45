#include <cstdio>
#include <cstdlib>
#include <algorithm>
using namespace std;

char mat[6][6];

int empty()
{
	for(int i = 0; i < 4; i++)
		for(int j = 0; j < 4; j++)
			if (mat[i][j] == '.')
				return 1;
	return 0;
}

int win(char who)
{
	int cnt;
	for(int i = 0; i < 4; i++)
	{
		cnt = 0;
		for(int j = 0; j < 4; j++)
			cnt += (mat[i][j] == who || mat[i][j] == 'T');
		if (cnt == 4)
			return 1;
		cnt = 0;
		for(int j = 0; j < 4; j++)
			cnt += (mat[j][i] == who || mat[j][i] == 'T');
		if (cnt == 4)
			return 1;
	}
	cnt = 0;
	for(int i = 0; i < 4; i++)
		cnt += (mat[i][i] == who || mat[i][i] == 'T');
	if (cnt == 4)
		return 1;
	cnt = 0;
	for(int i = 0; i < 4; i++)
		cnt += (mat[i][4 - i - 1] == who || mat[i][4 - i - 1] == 'T');
	if (cnt == 4)
		return 1;
	return 0;
}

int main()
{
	freopen("input.txt", "r", stdin);
	freopen("output.txt", "w", stdout);
	int T;
	scanf("%d\n", &T);
	for(int t = 1; t <= T; t++)
	{
		printf("Case #%d: ", t);
		for(int i = 0; i < 4; i++)
			gets(mat[i]);
		if (win('X'))
		{
			printf("X won\n");
		} else
		if (win('O'))
		{
			printf("O won\n");
		} else
		if (empty())
		{
			printf("Game has not completed\n");
		} else
		{
			printf("Draw\n");
		}
		gets(mat[4]);
	}
	return 0;
} 
