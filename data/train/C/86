#include<stdio.h>
int main()
{
	int t,i,j,flag,flag2,num=1,flag3;
	char arr[4][5],ch,p,q,r,s,k;
	scanf("%d\n",&t);
	while(t--)
	{
		for(i=0;i<4;i++)	
			scanf("%s",arr[i]);
		flag3=0;
		for(i=0;i<4;i++)
			for(j=0;j<4;j++)
			{
				if(arr[i][j] == '.')
					flag3=1;
			}
		flag2=0;
		for(i=0;i<4;i++)
		{
			flag=1;
			ch=arr[i][0];
			j=1;
			if(ch == '.')
				continue;
			if(ch == 'T')
			{
				j=2;
				ch = arr[i][1];
			}
			for(;j<4;j++)
			{
				if(arr[i][j] == '.')
				{
					flag=0;
					break;
				}
				if(ch != arr[i][j] && arr[i][j] != 'T')
				{
					flag=0;
					//printf("%c %d %c\n",ch,i,arr[i][j]);
				}
			}
			if(flag == 1)
			{
				//printf("hi %d\n",i);
				printf("Case #%d: %c won\n",num,ch);
				flag2=1;
					break;
			}
		}
		if(flag2 == 0)
		{
			for(j = 0;j<4;j++)
			{	
				flag=1;
				ch=arr[0][j];
				i=1;
				if(ch == '.')
					continue;
				if(ch == 'T')
				{
					i=2;
					ch=arr[1][j];
				}
				for(;i<4;i++)
				{
					if(arr[i][j] == '.')
					{
						flag=0;
						break;
					}
					if(ch != arr[i][j] && arr[i][j] != 'T')
						flag=0;
				}
				if(flag == 1)
				{
					printf("Case #%d: %c won\n",num,ch);
					flag2=1;
					break;
				}
			}
		}
		if(flag2 == 0)
		{
			flag=1;
			ch=arr[0][0];
			i=1;
			if(ch == 'T')
			{
				ch=arr[1][1];
				i=2;
			}
			for(;i<4;i++)
			{
				if(ch == '.')
				{
					flag=0;
					break;
				}
				if(ch != arr[i][i] && arr[i][i] !='T')
					flag=0;
			}
			if(flag == 1)
			{
				printf("Case #%d: %c won\n",num,ch);
				flag2=1;
			}
		}
		if(flag2 == 0)
		{
			p=arr[0][3];
			q=arr[1][2];
			r=arr[2][1];
			s=arr[3][0];
			if(p == 'T')
				p=q;
			else if(q == 'T')
				q=r;
			else if(r == 'T')
				r=s;
			else if(s == 'T')
				s=p;
			flag=0;
			if(p == '.' || q=='.' || r=='.' || s=='.')
				flag=0;
			else if(p == q && q == r && r == s )
			{
				ch=p;
				flag2=1;			
				flag=1;
			}
			if(flag == 1)
			{
				printf("Case #%d: %c won\n",num,ch);
				flag2=1;
			}
			
		}
		//printf("%d %d\n",flag3,flag2);
		if(flag3 == 1 && flag2 == 0)
			printf("Case #%d: Game has not completed\n",num);
		else if(flag3 == 0 && flag2 == 0)
			printf("Case #%d: Draw\n",num);
		num++;
		k=getchar();
	}
	return 0;
}
