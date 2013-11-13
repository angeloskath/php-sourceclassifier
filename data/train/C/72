#include <stdio.h>
#include <string.h>
#include <iostream>
using namespace std;

char m[4][4];

int iswin(char c)
{
	int i,j;
	for(i=0; i<4; i++)
	{
		for(j=0; j<4; j++)
			if (!(m[i][j] == c || m[i][j] == 'T'))
				break;
		if (j >= 4) return 1;
		for(j=0; j<4; j++)
			if (!(m[j][i] == c || m[j][i] == 'T'))
				break;
		if (j >= 4) return 1;
	}
	for(i=0; i<4; i++)
		if (!(m[i][i] == c || m[i][i] == 'T'))
			break;
	if (i >= 4) return 1;
	for(i=0; i<4; i++)
		if (!(m[i][3-i] == c || m[i][3-i] == 'T'))
			break;
	if (i >= 4) return 1;
	return 0;
}
int main()
{
	int i,j,k;
	int cc,ca;
	cin >> ca;
	for(cc=1; cc<=ca; cc++)
	{
		string s;
		for(i=0; i<4; i++)
		{
			cin >> s;
			for(j=0; j<4; j++)
				m[i][j] = s[j];
		}
		if (iswin('X'))
		{
			printf("Case #%d: X won\n", cc);
			continue;
		}
		if (iswin('O'))
		{
			printf("Case #%d: O won\n", cc);
			continue;
		}
		k=0;
		for(i=0; i<4; i++) for(j=0; j<4; j++) if (m[i][j] == '.') k=1;
		if (k == 0)
		{
			printf("Case #%d: Draw\n", cc);
			continue;
		}
		printf("Case #%d: Game has not completed\n", cc);
	}
}