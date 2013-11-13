#include<stdio.h>
int ch(char a[4][5])
	{
	int i,j;
	if(a[0][0]=='O')
		{
		for(i=1;i<4;i++)
				{
				if(a[i][i]!='O' && a[i][i]!='T')
				break;	
				}
		if(i==4)
		return 2;
		}
	else if(a[0][0]=='X')
		{
		for(i=1;i<4;i++)
				{
				if(a[i][i]!='X' && a[i][i]!='T')
				break;	
				}
		if(i==4)
		return 1;	
		}
	else if(a[0][0]=='T')
		{
		if(a[3][3]=='O')
			{
			for(i=2;i>=0;i--)
				{
				if(a[i][i]!='O' && a[i][i]!='T')
				break;	
				}
			if(i==-1)
			return 2;
			}
		else if(a[3][3]=='X')
			{
			for(i=2;i>=0;i--)
					{
					if(a[i][i]!='X' && a[i][i]!='T')
					break;	
					}
			if(i==-1)
			return 1;	
			}
		}
		
		

	if(a[0][3]=='O')
		{
		for(i=1;i<4;i++)
				{
				if(a[i][3-i]!='O' && a[i][3-i]!='T')
				break;	
				}
		if(i==4)
		return 2;
		}
	else if(a[0][3]=='X')
		{
		for(i=1;i<4;i++)
				{
				if(a[i][3-i]!='X' && a[i][3-i]!='T')
				break;	
				}
		if(i==4)
		return 1;	
		}
	else if(a[0][3]=='T')
		{
		if(a[3][0]=='O')
			{
			for(i=2;i>=0;i--)
				{
				if(a[i][3-i]!='O' && a[i][3-i]!='T')
				break;	
				}
			if(i==-1)
			return 2;
			}
		else if(a[3][0]=='X')
			{
			for(i=2;i>=0;i--)
					{
					if(a[i][3-i]!='X' && a[i][3-i]!='T')
					break;	
					}
			if(i==-1)
			return 1;	
			}
		}
	
	for(i=0;i<4;i++)
		{
		if(a[i][0]=='T')
				{
				for(j=2;j>=0;j--)
						{
						if(a[i][j]!=a[i][3] && a[i][j]!='T')
						break;
						}
				if(j==-1)
					{
					if(a[i][3]=='O')
					return 2;
					else if(a[i][3]=='X')
					return 1;	
					}
				}
		else if(a[i][0]!='.')
			{
				for(j=1;j<4;j++)
					{
					if(a[i][j]!=a[i][0] && a[i][j]!='T')
					break;	
					}
				if(j==4)
					{
					if(a[i][0]=='O')
					return 2;
					else if(a[i][0]=='X')
					return 1;
					}
			}
		}
	for(j=0;j<4;j++)
		{
		if(a[0][j]=='T')
				{
				for(i=2;i>=0;i--)
						{
						if(a[i][j]!=a[3][j] && a[i][j]!='T')
						break;
						}
				if(i==-1)
					{
					if(a[3][j]=='O')
					return 2;
					else if(a[3][j]=='X')
					return 1;	
					}
				}
		else if(a[0][j]!='.')
			{
				for(i=1;i<4;i++)
					{
					if(a[i][j]!=a[0][j] && a[i][j]!='T')
					break;	
					}
				if(i==4)
					{
					if(a[0][j]=='O')
					return 2;
					else if(a[0][j]=='X')
					return 1;
					}
			}
		}
	for(i=0;i<4;i++)
		{
		for(j=0;j<4;j++)
			{
			if(a[i][j]=='.')
			return 0;	
			}
		}
	return 3;
	}
int main()
{
int T;
int i,k,j;
char a[4][5];
scanf("%d",&T);
gets(a[0]);
for(i=1;i<=T;i++)
	{
	for(j=0;j<4;j++)
		{
		gets(a[j]);
		//puts(a[j]);
		}
	k=ch(a);
	if(k==0)
		{
		printf("Case #%d: Game has not completed\n",i);	
		}
	else if(k==1)
		{
		printf("Case #%d: X won\n",i);
		}
	else if(k==2)
		{
		printf("Case #%d: O won\n",i);		
		}
	else if(k==3)
		{
		printf("Case #%d: Draw\n",i);		
		}
	else 
		{
		printf("BOBO\n");
		}
	gets(a[0]);
//	puts(a[0]);
	}
return 0;
}
