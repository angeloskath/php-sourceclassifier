#include<stdio.h>

char compare(char a[5][5])
{
	int j,l;
	int k;

	for(j=0;j<4;j++)
	{
		int k = 0;
		for(l=0;l<4;l++)
			k += a[j][l];

	if (k == 4*'O' || k == 3*'O'+'T')
		return 'O';
	if (k == 4*'X' || k == 3*'X'+'T')
		return 'X';
	}


	for(j=0;j<4;j++)
	{
		int k = 0;
		for(l=0;l<4;l++)
			k += a[l][j];

	if (k == 4*'O' || k == 3*'O'+'T')
		return 'O';
	if (k == 4*'X' || k == 3*'X'+'T')
		return 'X';
	}
	
	k=a[0][0]+a[1][1]+a[2][2]+a[3][3] ;
	if (k == 4*'O' || k == 3*'O'+'T')
		return 'O';
	if (k == 4*'X' || k == 3*'X'+'T')
		return 'X';
	
	k=a[0][3]+a[1][2]+a[2][1]+a[3][0];
	if (k == 4*'O' || k == 3*'O'+'T')
		return 'O';
	if (k == 4*'X' || k == 3*'X'+'T')
		return 'X';
	return 'D';
}


int main()
{
	int T;
	char ch;
	char a[5][5];
	int filled_flag;
	int i,j;

	scanf("%d",&T);
	gets(a[0]);
	for(i=0;i<T;i++)
	{
		filled_flag = 1;
		for(j=0;j<5;j++)
			gets(a[j]);
		ch = compare(a);	
		if ( ch == 'X' || ch == 'O') 
			printf("Case #%d: %c won\n",i+1,ch);
		else {
			int k,l,flag = 0;
			for(k=0;k<4;k++)
			{
				if (flag != 0) break;
				for(l=0;l<4;l++)
					if (a[k][l] == '.') 
					{
						flag = 1;
						break;
					}
			}
			if (flag == 1) 
				printf("Case #%d: Game has not completed\n",i+1);
			else 
				printf("Case #%d: Draw\n",i+1);
		}
	}
	return 0;
}




