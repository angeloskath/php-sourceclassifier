#include<stdio.h>
char grid[4][5];
char colcheck(int a)
{
	char tar=grid[0][a];
	if(tar=='T')
		tar=grid[1][a];
    if(tar=='.')
        return 0;
	if((grid[0][a]==tar || grid[0][a]=='T') &&( grid[1][a]==tar || grid[1][a]=='T')  && (grid[2][a] == tar || grid[2][a]=='T') && (grid[3][a] == tar || grid[3][a]=='T'))
		return tar;
	return 0;
}
char rowcheck(int a)
{
	char tar=grid[a][0];
	if(tar=='T')
		tar=grid[a][1];
    if(tar=='.')
        return 0;
	if((grid[a][0]== tar || grid[a][0]=='T') && (grid[a][1]==tar || grid[a][1]=='T') && (grid[a][2]==tar || grid[a][2]=='T') && (grid[a][3]==tar || grid[a][3]=='T'))
		return tar;
	return 0;
}
char diagcheck1()
{
	char tar=grid[0][0];
	if(tar=='T')
		tar=grid[1][1];
    if(tar=='.')
        return 0;
	if((grid[0][0]==tar  || grid[0][0]=='T') && (grid[1][1]==tar || grid[1][1]=='T') && (grid[2][2]==tar || grid[2][2]=='T') && (grid[3][3]==tar || grid[3][3]=='T'))
		return tar;
	return 0;

}
char diagcheck2()
{
	char tar=grid[0][3];
	if(tar=='T')
		tar=grid[1][2];
    if(tar=='.')
        return 0;
	if((grid[0][3]==tar || grid[0][3]=='T') && (grid[1][2]==tar || grid[1][2]=='T') && (grid[2][1]==tar || grid[2][1]=='T') && (grid[3][0]==tar || grid[3][0]=='T'))
		return tar;
	return 0;
}
int main()
{
	int t=1,T,i,j,k,q,w;
	scanf(" %d",&T);
	while(t<=T)
	{
		printf("Case #%d: ",t);

		j=0;
		while(j<4)
		{
			scanf("%s",grid[j]);
			//grid[j][4]='\0';
			//printf("%s",grid[j-1]);
			j++;
		}
        /*printf(" received :\n");
        j=0;
        while(j<4)
        {
            printf("%s\n",grid[j]);
            j++;
        }*/

			j=0;
			char res=0;
			while(j<4)
			{
				res=rowcheck(j);
				//printf("row%d done%c\n",j,res);
				if(res!=0)
					break;
				res=colcheck(j);
				//printf("col%d done%c\n",j,res);
				if(res!=0)
					break;
				j++;
			}
			if(res==0)
                res=diagcheck1();
            if(res==0)
                res=diagcheck2();
			if(res==0)
			{
			    for(q=0;q<4;q++)
                {
                    for(w=0;w<4;w++)
                    {
                        if(grid[q][w]=='.')
                        {
                            goto out;
                        }
                    }
                }
                out:
                if(q==4)
				printf("Draw\n");
				else
				printf("Game has not completed\n");

			}
			else if(res=='X')
			{
				printf("X won\n");
			}
			else
			{
				printf("%c won\n",res);
			}
		t++;
	}
	return 0;
}
