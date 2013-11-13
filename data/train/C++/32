#include <cstdio>
#include <cstdlib>
#include <cstring>
#include <cctype>
#include <cmath>
#include <cassert>
#include <sstream>
#include <functional>
#include <algorithm>
#include <map>
#include <string>
#include <vector>
#include <set>
#include <queue>

using namespace std;

int nt;

char s[4][5];

bool win(char ch, int x, int y, int dx, int dy)
{
	for(int i = 0; i < 4; i++)
	{
		int xx = x + dx * i;
		int yy = y + dy * i;
		if (s[xx][yy] == ch || s[xx][yy] == 'T') continue;
		return false;
	}
	return true;
}

int main()
{
	//freopen("in", "r", stdin);

	int nt;
	scanf("%d", &nt);
	for(int tt = 1; tt <= nt; tt++)
	{
		fprintf(stderr, "test = %d\n", tt);
		printf("Case #%d: ", tt);
		
		bool done = true;

		scanf("%s %s %s %s", s[0], s[1], s[2], s[3]);

		if (win('X', 0, 0, 1, 1)) { puts("X won"); goto qq; }
		if (win('X', 0, 3, 1, -1)) { puts("X won"); goto qq; }

		if (win('O', 0, 0, 1, 1)) { puts("O won"); goto qq; }
		if (win('O', 0, 3, 1, -1)) { puts("O won"); goto qq; }

		for(int i = 0; i < 4; i++)
		{
			if (win('X', i, 0, 0, 1)) { puts("X won"); goto qq; }
			if (win('X', 0, i, 1, 0)) { puts("X won"); goto qq; }
			if (win('O', i, 0, 0, 1)) { puts("O won"); goto qq; }
			if (win('O', 0, i, 1, 0)) { puts("O won"); goto qq; }
		}

		for(int i = 0; i < 4; i++)
			for(int j = 0; j < 4; j++) if (s[i][j] == '.') done = false;

		if (done) puts("Draw"); else puts("Game has not completed");

		qq:;
	}
	return 0;
}