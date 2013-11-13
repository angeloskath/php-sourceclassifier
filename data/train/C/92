#include <stdio.h>

void scan(char[4][4]);
int solve(char[4][4]);

int main()
{
	int T,i;
	char a[4][4];
	scanf("%d",&T);
	for(i=0;i<T;i++)
	{
		scan(a);
		printf("Case #%d: ",i+1);
		switch(solve(a))
		{
			case 0 : printf("X won\n"); break;
			case 1 : printf("O won\n"); break;
			case 2 : printf("Draw\n"); break;
			case 3 : printf("Game has not completed\n");
		}
	}
	return 0;
}

void scan(char a[4][4])
{
	int i,j;
	scanf("\n");
	for(i=0;i<4;i++)
	{
		for(j=0;j<4;j++) scanf("%c",&a[i][j]);
		scanf("\n");
	}
	return;
}

int solve(char a[4][4])
{
	int i,j,X,O,N=0;
	for(i=0;i<4;i++)
	{
		X=O=1;
		for(j=0;j<4;j++)
		{
			if(a[i][j]!='X'&&a[i][j]!='T') X=0;
			if(a[i][j]!='O'&&a[i][j]!='T') O=0;
			if(a[i][j]=='.') N=1;
		}
		if(X) return 0;
		if(O) return 1;
	}
	for(i=0;i<4;i++)
	{
		X=O=1;
		for(j=0;j<4;j++)
		{
			if(a[j][i]!='X'&&a[j][i]!='T') X=0;
			if(a[j][i]!='O'&&a[j][i]!='T') O=0;
		}
		if(X) return 0;
		if(O) return 1;
	}
	X=O=1;
	for(i=0;i<4;i++)
	{
		if(a[i][i]!='X'&&a[i][i]!='T') X=0;
		if(a[i][i]!='O'&&a[i][i]!='T') O=0;
	}
	if(X) return 0;
	if(O) return 1;
	X=O=1;
	for(i=0;i<4;i++)
	{
		if(a[i][3-i]!='X'&&a[i][3-i]!='T') X=0;
		if(a[i][3-i]!='O'&&a[i][3-i]!='T') O=0;
	}
	if(X) return 0;
	if(O) return 1;
	if(N) return 3;
	return 2;
}
