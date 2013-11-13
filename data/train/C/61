#include<stdio.h>

char board[5][5];
int check(int x1, int y1, int x2, int y2, int x3, int y3, int x4, int y4, char sym)
{
	if((board[x1][y1]==sym || board[x1][y1]=='T') &&
		(board[x2][y2]==sym || board[x2][y2]=='T') &&
		(board[x3][y3]==sym || board[x3][y3]=='T') &&
		(board[x4][y4]==sym || board[x4][y4]=='T'))
			return 1;
	return 0;						
}

int moves_left()
{
	int i,j;
	for(i=0;i<4;i++)
		for(j=0;j<4;j++)
		{
			if(board[i][j]=='.')
				return 1;
		}
	return 0;			
}

int main()
{
	int t,cases,i,res;
	scanf("%d",&t);
	for(cases=1;cases<=t;cases++)
	{
		for(i=0;i<4;i++)
			scanf("%s",board[i]);
		scanf("\n");	
		res=check(0,0,0,1,0,2,0,3,'X');
		res+=check(1,0,1,1,1,2,1,3,'X');
		res+=check(2,0,2,1,2,2,2,3,'X');
		res+=check(3,0,3,1,3,2,3,3,'X');
		res+=check(0,0,1,0,2,0,3,0,'X');
		res+=check(0,1,1,1,2,1,3,1,'X');
		res+=check(0,2,1,2,2,2,3,2,'X');
		res+=check(0,3,1,3,2,3,3,3,'X');
		res+=check(0,0,1,1,2,2,3,3,'X');
		res+=check(0,3,1,2,2,1,3,0,'X');						
		if(res>=1)
		{
			printf("Case #%d: X won\n",cases);
			continue;
		}
		res=check(0,0,0,1,0,2,0,3,'O');
		res+=check(1,0,1,1,1,2,1,3,'O');
		res+=check(2,0,2,1,2,2,2,3,'O');
		res+=check(3,0,3,1,3,2,3,3,'O');
		res+=check(0,0,1,0,2,0,3,0,'O');
		res+=check(0,1,1,1,2,1,3,1,'O');
		res+=check(0,2,1,2,2,2,3,2,'O');
		res+=check(0,3,1,3,2,3,3,3,'O');
		res+=check(0,0,1,1,2,2,3,3,'O');
		res+=check(0,3,1,2,2,1,3,0,'O');
		if(res>=1)
		{
			printf("Case #%d: O won\n",cases);
			continue;
		}
		if(moves_left())
		{
			printf("Case #%d: Game has not completed\n",cases);
		}
		else
		{
			printf("Case #%d: Draw\n",cases);
		}
	}
	return 0;
}
