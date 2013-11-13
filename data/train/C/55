#include<stdio.h>
char str[5][5];
int main()
{
  int t,i,j,k,result,numRowX[5],numRowO[5],numColX[5],numColO[5],numDiag1X,numDiag1O,numDiag2X,numDiag2O;
  scanf("%d",&t);
  for(i=1;i<=t;i++)
    {
      for(j=0;j<4;j++)
	scanf("%s",str[j]);
      result=-1;
      for(j=0;j<4;j++)
	{
	  numRowX[j]=numRowO[j]=numColX[j]=numColO[j]=0;
	  for(k=0;k<4;k++)
	    {
	      if(str[j][k]=='X')
		numRowX[j]++;
	      else if(str[j][k]=='O')
		numRowO[j]++;
	      if(str[k][j]=='X')
		numColX[j]++;
	      else if(str[k][j]=='O')
		numColO[j]++;
	      if(str[j][k]=='T')
		{
		  numRowX[j]++;
		  numRowO[j]++;
		}
	      if(str[k][j]=='T')
		{
		  numColX[j]++;
		  numColO[j]++;
		}
	      if(str[k][j]=='.')
 		result=2;
	    }
	}
      numDiag1X=numDiag1O=numDiag2X=numDiag2O=0;
      for(j=0;j<4;j++)
	{
	  if(str[j][j]=='X')
	    numDiag1X++;
	  else if(str[j][j]=='O')
	    numDiag1O++;
	  else if(str[j][j]=='T')
	    {
	      numDiag1X++;numDiag1O++;
	    }
	  if(str[j][3-j]=='X')
	    numDiag2X++;
	  else if(str[j][3-j]=='O')
	    numDiag2O++;
	  else if(str[j][3-j]=='T')
	    {
	      numDiag2X++;numDiag2O++;
	    }
	}
      for(j=0;j<4;j++)
	if(numRowX[j]==4 || numColX[j]==4)
	  result=0;
	else if(numRowO[j]==4 || numColO[j]==4)
	  result=1;
      if(numDiag1X==4 || numDiag2X==4)
	result=0;
      else if(numDiag1O==4 || numDiag2O==4)
	result=1;
      printf("Case #%d: ",i);
      if(result==-1)
	printf("Draw\n");
      else if(result==0)
	printf("X won\n");
      else if(result==1)
	printf("O won\n");
      else if(result==2)
	printf("Game has not completed\n");
    }
  return 0;
}
