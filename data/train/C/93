#include <stdio.h>
#include <stdlib.h>
#include <string.h>

char game[4][4];


void printGame()
{
	int i,j;
	printf("\n");
	for(i=0;i<4;i++)
	{
		for(j=0;j<4;j++)
		printf("%c",game[i][j]);
		
		printf("\n");
	}
}

int freecells()
{
	int i,j;
	
	for(i=0;i<4;i++)
	for(j=0;j<4;j++)
	if( game [i][j] == '.' )
	return 1;
	
	return 0;
}

char row (int i)
{
	int nx=0,no=0,nt=0;
	int j;
	for(j=0;j<4;j++)
	{
		if( game [i][j] == 'X' )
		nx++;
		if( game [i][j] == 'O' )
		no++;
		if( game [i][j] == 'T' )
		nt++;
	}
	
	if ( nx == 4 || ( nx == 3 && nt == 1 ) )
	return 'X';
	
	if ( no == 4 || ( no == 3 && nt == 1 ) )
	return 'O';
	
	return '.';
}

char column (int i)
{
	int nx=0,no=0,nt=0;
	int j;
	for(j=0;j<4;j++)
	{
		if( game [j][i] == 'X' )
		nx++;
		if( game [j][i] == 'O' )
		no++;
		if( game [j][i] == 'T' )
		nt++;
	}
	
	if ( nx == 4 || ( nx == 3 && nt == 1 ) )
	return 'X';
	
	if ( no == 4 || ( no == 3 && nt == 1 ) )
	return 'O';
	
	return '.';
}

char diagonal ()
{
	int nx=0,no=0,nt=0;
	int j;
	
	for(j=0;j<4;j++)
	{
		if( game [j][j] == 'X' )
		nx++;
		if( game [j][j] == 'O' )
		no++;
		if( game [j][j] == 'T' )
		nt++;
	}
	
	if ( nx == 4 || ( nx == 3 && nt == 1 ) )
	return 'X';
	
	if ( no == 4 || ( no == 3 && nt == 1 ) )
	return 'O';
	
	nx=0;
	no=0;
	nt=0;
	
	for(j=0;j<4;j++)
	{
		if( game [j][3-j] == 'X' )
		nx++;
		if( game [j][3-j] == 'O' )
		no++;
		if( game [j][3-j] == 'T' )
		nt++;
	}
	
	
	if ( nx == 4 || ( nx == 3 && nt == 1 ) )
	return 'X';
	
	if ( no == 4 || ( no == 3 && nt == 1 ) )
	return 'O';
	
	return '.';
}

void printCase(int i)
{
	printf("Case #%d: ",i+1);
}

int main()
{
	int cases,i;
	char rows[5];
	scanf("%d",&cases);
	gets(rows);
	for(i=0;i<cases;i++)
	{
		int j;
		char ans='.';
		for(j=0;j<4;j++)
		{
			int k;
			gets(rows);
			for(k=0;k<4;k++)
			{
				game[j][k]=rows[k];
			}
			
		}
		gets(rows);
		for(j=0;(j<4) && (ans=='.');j++)
		{
			ans=row(j);
		}
		
		
		for(j=0;(j<4) && (ans=='.');j++)
		{
			ans=column(j);
		}
		
		if (ans== '.')
		{
			ans=diagonal();
		}
		
		printCase(i);
		/*printGame();*/
		if (ans == '.')
		{
			if(freecells())
			{
				printf("Game has not completed\n");
			}
			else
			{
				printf("Draw\n");
			}
		}
		else
		{
			printf("%c won\n",ans);
		}
	}
	return 0;
}
