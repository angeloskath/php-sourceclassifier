#include <cstdio>
#include <iostream>
#include <fstream>
#include <algorithm>
#include <vector>
#include <map>
#include <cmath>
#include <string>

using namespace std;



int main()
{
	freopen("input.txt", "r", stdin);
	freopen("output.txt", "w", stdout);

	int T, i, j, k;
	cin >> T;
	for(int t = 1; t <= T; t++)
	{
		string board[4];
		for(i = 0; i < 4; i++)
			cin >> board[i];
		bool win[2] = {0};
		char ch[2] = {'X', 'O'};
		for(int x = 0; x < 2; x++)
		{
			char c = ch[x];
			for(i = 0; i < 4; i++)
			{
				for(j = 0; j < 4; j++)
					if (board[i][j] != c && board[i][j] != 'T')
						break;
				if (j == 4)
					win[x] = true;

				for(j = 0; j < 4; j++)
					if (board[j][i] != c && board[j][i] != 'T')
						break;
				if (j == 4)
					win[x] = true;

				for(j = 0; j < 4; j++)
					if (board[j][j] != c && board[j][j] != 'T')
						break;
				if (j == 4)
					win[x] = true;

				for(j = 0; j < 4; j++)
					if (board[j][3 - j] != c && board[j][3 - j] != 'T')
						break;
				if (j == 4)
					win[x] = true;
			}
		}
		printf("Case #%d: ", t);
		if (win[0])
			puts("X won");
		else
		if (win[1])
			puts("O won");
		else
		{
			bool over = true;
			for(i = 0; i < 4; i++)
				for(j = 0; j < 4; j++)
					if (board[i][j] == '.')
						over = false;
			puts(over ? "Draw" : "Game has not completed");
		}
	}

	return 0;
}