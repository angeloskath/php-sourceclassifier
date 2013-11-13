#include<stdio.h>

int main()
{
	int test,i,j,k,flag1,flag2,flag,test1;
	char a[4][5],x,o,t;
	scanf("%d",&test);test1=1;
	while(test--)
	{
		for(i=0;i<4;i++)
		{
			scanf("%s",a[i]);
		}
		flag=0;
		for(i=0;i<4;i++)
		{
			for(j=0;j<4;j++)
			{
				if(a[i][j]=='.')flag=1;
			}
		}
		flag1=0;flag2=0;
		for(i=0;i<4;i++)
		{
			x=0;o=0;t=0;
			for(j=0;j<4;j++)
			{
				if(a[i][j]=='X')x++;
				else if(a[i][j]=='O')o++;
				else if(a[i][j]=='T')t++;
			}
			if(x+t==4)flag1=1;
			else if(o+t==4)flag2=2;
		}
		for(i=0;i<4;i++)
		{
			x=0;o=0;t=0;
			for(j=0;j<4;j++)
			{
				if(a[j][i]=='X')x++;
				else if(a[j][i]=='O')o++;
				else if(a[j][i]=='T')t++;
			}
			if(x+t==4)flag1=1;
			else if(o+t==4)flag2=2;
		}
		x=0;o=0;t=0;
		for(i=0;i<4;i++)
		{			
			if(a[i][i]=='X')x++;
			else if(a[i][i]=='O')o++;
			else if(a[i][i]=='T')t++;
		}
			
		if(x+t==4)flag1=1;
		else if(o+t==4)flag2=1;

		x=0;o=0;t=0;
		for(i=0;i<4;i++)
		{			
			if(a[i][3-i]=='X')x++;
			else if(a[i][3-i]=='O')o++;
			else if(a[i][3-i]=='T')t++;
		}
			
		if(x+t==4)flag1=1;
		else if(o+t==4)flag2=1;

		if((flag1)&&(!flag2))printf("Case #%d: X won\n",test1);
		else if((!flag1)&&(flag2))printf("Case #%d: O won\n",test1);
		else if((!flag1)&&(!flag2)&&(!flag))printf("Case #%d: Draw\n",test1);
		else printf("Case #%d: Game has not completed\n",test1);

		test1++;

	}
return 0;
}

		














