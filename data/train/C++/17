#include <cstdio>

int main()
{
  int t;
  scanf("%d",&t);
  for(int C=1;C<=t;C++){
    char s[5][5];
    for(int i=0;i<4;i++){
      scanf("%s",s[i]);
    }
    int g[2][10]={0};
    for(int i=0;i<4;i++){
      for(int j=0;j<4;j++){
	if(s[j][i]!='X'&&s[j][i]!='T'){
	  g[0][j]=1;
	}
	if(s[j][i]!='O'&&s[j][i]!='T'){
	  g[1][j]=1;
	}
	if(s[i][j]!='X'&&s[i][j]!='T'){
	  g[0][j+4]=1;
	}
	if(s[i][j]!='O'&&s[i][j]!='T'){
	  g[1][j+4]=1;
	}
      }
      if(s[i][i]!='X'&&s[i][i]!='T'){
	g[0][8]=1;
      }
      if(s[i][i]!='O'&&s[i][i]!='T'){
	g[1][8]=1;
      }
      if(s[i][3-i]!='X'&&s[i][3-i]!='T'){
	g[0][9]=1;
      }
      if(s[i][3-i]!='O'&&s[i][3-i]!='T'){
	g[1][9]=1;
      }
    }
    bool X=0,O=0;
    for(int i=0;i<10;i++){
      if(g[0][i]==0){
	X=1;
      }
      if(g[1][i]==0){
	O=1;
      }
    }
    if(X){
      printf("Case #%d: X won\n",C);
    }
    else if(O){
      printf("Case #%d: O won\n",C);
    }
    else{
      int p=0;
      for(int i=0;i<4;i++){
	for(int j=0;j<4;j++){
	  if(s[i][j]=='.'){
	    p++;
	  }
	}
      }
      if(p){
	printf("Case #%d: Game has not completed\n",C);
      }
      else{
	printf("Case #%d: Draw\n",C);
      }
    }
  }
  return 0;
}
