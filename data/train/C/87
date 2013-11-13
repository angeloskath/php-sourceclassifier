#include <stdio.h>

#define N 4
const char *statues[4] = {
	"X won",
	"O won",
	"Draw",
	"Game has not completed"
};

char table[N][N];

int check( char c)
{
	int flag = 0, all;
	int i, j;
	for ( i = 0; i < N && !flag; i++)
	{
		all = 0;
		for ( j = 0; j < N; j++)
		{
			all += table[i][j] == c || table[i][j] == 'T';
		}
		flag += all == N;
	}

	for ( j = 0; j < N && !flag; j++)
	{
		all = 0;
		for ( i = 0; i < N; i++)
		{
			all += table[i][j] == c || table[i][j] == 'T';
		}
		flag += all == N;
	}

	all = 0;
	for ( i = 0; i < N; i++)
	{
		all += table[i][i] == c || table[i][i] == 'T';
	}
	flag += all == N;

	all = 0;
	for ( i = 0; i < N; i++)
	{
		all += table[i][N-i-1] == c || table[i][N-i-1] == 'T';
	}
	flag += all == N;


	return flag;
}

int filled()
{
	int i, j;
	int ret = 0;
	for ( i = 0; i < N; i++)
	{
		for ( j = 0; j < N; j++)
		{
			ret += table[i][j] == '.';
		}
	}

	return !ret;
}


int main()
{
	int Tcases;
	scanf("%d", &Tcases);
	int cases;
	for ( cases = 0; cases < Tcases; cases++)
	{
		int i, j;
		for ( i = 0; i < N; i++)
		{
			for ( j = 0; j < N; j++)
			{
				scanf(" %c ", &table[i][j]);
			}
		}

		int ans = 0;
		if ( check( 'X'))
		{
			ans = 1;
		}
		else
		{
			if ( check( 'O'))
			{
				ans = 2;
			}
			else
			{
				if ( filled())
				{
					ans = 3;
				}
				else
				{
					ans = 4;
				}
			}
		}
		printf("Case #%d: %s\n", cases + 1, statues[ans-1]);
	}

	return 0;
}
