#include <cstdio>
#include <cstdlib>
#include <cmath>
#include <iostream>
#include <vector>
#include <string>
#include <algorithm>
#include <map>
#include <set>
#include <queue>

using namespace std;

char tab[4][4];

bool won(char x)
{
	int i, j;
	bool ok;
	// line i
	for(i = 0; i < 4; i++)
	{
		ok = true;
		for(j = 0; j < 4; j++)
		{
			if(tab[i][j] != 'T' && tab[i][j] != x) ok = false;
		}
		if(ok) return true;
	}
	
	// column j
	for(j = 0; j < 4; j++)
	{
		ok = true;
		for(i = 0; i < 4; i++)
		{
			if(tab[i][j] != 'T' && tab[i][j] != x) ok = false;
		}
		if(ok) return true;
	}
	
	// diag
	
	ok = true;
	
	for(i = 0; i < 4; i++)
	{
		if(tab[i][i] != 'T' && tab[i][i] != x) ok = false;
	}
	
	if(ok) return true;
	
	ok = true;
	
	for(i = 0; i < 4; i++)
	{
		if(tab[i][3-i] != 'T' && tab[i][3-i] != x) ok = false;
	}
	
	if(ok) return true;
	
	return false;
}


int main()
{
	int i, j, T, t;
	bool x, o;
	bool finish = true;
	
	scanf("%d\n", &T);
	
	for(t = 1; t <= T; t++)
	{
		printf("Case #%d: ", t);
		finish = true;
		for(i = 0; i < 4; i++)
		{
			for(j = 0; j < 4; j++)
			{
				scanf("%c", &tab[i][j]);
				if(tab[i][j] == '.') finish = false;
			}
			scanf("\n");
		}
		scanf("\n");
		
		x = won('X');
		o = won('O');
		
		if(x) printf("X won\n");
		else if(o) printf("O won\n");
		else if(finish) printf("Draw\n");
		else printf("Game has not completed\n");
	}

	return 0;
}
