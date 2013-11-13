#include<stdio.h>
int main()
{
	int t,i,j,flag_a,flag_b,count_x,count_o,count_dot,count_t,k,l=1;
	char s[11][11]={},ch;
	scanf("%d",&t);
	ch=getchar();
	while(t--)
	{
		flag_a=flag_b=0;
		count_dot=0;
		for(i=3;i<=6;i++,ch=getchar())
			for(j=3;j<=6;j++)
			{
				scanf("%c",&s[i][j]);
				if(s[i][j]=='.')
					count_dot++;
			}
		/*for(i=3;i<=6;i++,printf("\n"))
			for(j=3;j<=6;j++)
				printf("%c ",s[i][j]);
		*/
		for(i=3;i<=6;i++)
		{
			for(j=3;j<=6;j++)
			{
				count_x=count_o=count_t=0;
				for(k=j;k<=j+3;k++)
				{
					if(s[i][k]== 'X')
						count_x++;
					else if(s[i][k] == 'O')
						count_o++;
					else if(s[i][k] == 'T')
						count_t++;
				}
				if(count_x>=3)
				{
					if(count_x==3 && count_t==1)
						flag_a=1;
					else if(count_x==4)
						flag_a=1;
				}
				if(count_o>=3)
				{
					if(count_o==3 && count_t==1)
						flag_b=1;
					else if(count_o==4)
						flag_b=1;
				}

				count_x=count_o=count_t=0;
				for(k=i;k<=i+3;k++)
				{
					if(s[k][j]== 'X')
						count_x++;
					else if(s[k][j] == 'O')
						count_o++;
					else if(s[k][j] == 'T')
						count_t++;
				}
				if(count_x>=3)
				{
					if(count_x==3 && count_t==1)
						flag_a=1;
					else if(count_x==4)
						flag_a=1;
				}
				if(count_o>=3)
				{
					if(count_o==3 && count_t==1)
						flag_b=1;
					else if(count_o==4)
						flag_b=1;
				}
				count_x=count_o=count_t=0;
				for(k=0;k<=3;k++)
				{
					if(s[i+k][j+k]== 'X')
						count_x++;
					else if(s[i+k][j+k] == 'O')
						count_o++;
					else if(s[i+k][j+k] == 'T')
						count_t++;
				}
				if(count_x>=3)
				{
					if(count_x==3 && count_t==1)
						flag_a=1;
					else if(count_x==4)
						flag_a=1;
				}
				if(count_o>=3)
				{
					if(count_o==3 && count_t==1)
						flag_b=1;
					else if(count_o==4)
						flag_b=1;
				}
				count_x=count_o=count_t=0;
				for(k=0;k<=3;k++)
				{
					if(s[i+k][j-k]== 'X')
						count_x++;
					else if(s[i+k][j-k] == 'O')
						count_o++;
					else if(s[i+k][j-k] == 'T')
						count_t++;
				}
				if(count_x>=3)
				{
					if(count_x==3 && count_t==1)
						flag_a=1;
					else if(count_x==4)
						flag_a=1;
				}
				if(count_o>=3)
				{
					if(count_o==3 && count_t==1)
						flag_b=1;
					else if(count_o==4)
						flag_b=1;
				}
				if(flag_a || flag_b)
					break;
			}
			if(flag_a || flag_b)
					break;
		}
	printf("Case #%d: ",l++);
	if(flag_a==flag_b)
	{
		if(count_dot==0)
			printf("Draw\n");
		else
			printf("Game has not completed\n");
	}
	else if(flag_a)
		printf("X won\n");
	else
		printf("O won\n");
	getchar();
	}
	return 0;
}
