//nathanajah's template
//28-11-2012
#include <stdio.h>
#include <iostream>
#include <stdlib.h>
#include <math.h>
#include <string>
#include <string.h>
#include <vector>
#include <algorithm>
#include <stack>
#include <queue>
#include <set>
#include <deque>
#include <map>
#include <ctime>
#define ii pair<int,int>
#define vi vector<int>
#define vii vector<ii>
#define fi first
#define se second
#define pb push_back
#define mp make_pair
#define LL long long
#define ULL unsigned LL
#define INF 0x3FFFFFFF
#define INFLL 0x3FFFFFFFFFFFFFFF
#define SZ(a) (int)(a).size()
#define ALL(a) (a).begin(),(a).end()
#ifdef DEBUG
	#define debug(...) \
	fprintf(stderr,__VA_ARGS__)
#else
	#define debug(...) 
#endif
using namespace std;

inline string GetString()
{
	char GS[1000005];
	scanf("%s",GS);string ret=GS;
	return ret;
}

inline char getc()
{
	char c=' ';
	while (c==' ' || c=='\t' || c=='\r' || c=='\n')
		c=getchar();
	return c;
}
//ENDOFTEMPLATE

int t,i,j,k;
int aaaa;
char c[10][10];

bool win(char x)
{
	int i,j;
	bool menang=false;
	for (i=0;i<4;++i)
	{
		menang=true;
		for (j=0;j<4;++j)
		{
			if (c[i][j]!=x && c[i][j]!='T')
				menang=false;
		}
		if (menang)
			return true;
		menang=true;
		for (j=0;j<4;++j)
		{
			if (c[j][i]!=x && c[j][i]!='T')
				menang=false;
		}
		if (menang)
			return true;
	}
	menang=true;
	for (i=0;i<4;++i)
		if (c[i][i]!=x && c[i][i]!='T')
			menang=false;
	if (menang)
		return true;
	menang=true;
	for (i=0;i<4;++i)
		if (c[i][3-i]!=x && c[i][3-i]!='T')
			menang=false;
	if (menang)
		return true;
	return false;
}

int main()
{
	scanf("%d",&t);
	for (aaaa=0;aaaa<t;++aaaa)
	{
		bool penuh=true;
		for (i=0;i<4;++i)
			for (j=0;j<4;++j)
			{
				c[i][j]=getc();
				if (c[i][j]=='.')
					penuh=false;
			}
		printf("Case #%d: ",aaaa+1);
		if (win('X'))
			printf("X won\n");
		else if (win('O'))
			printf("O won\n");
		else if (penuh)
			printf("Draw\n");
		else
			printf("Game has not completed\n");
	}
}
