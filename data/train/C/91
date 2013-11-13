#include<stdio.h>
#include<string.h>

char str[50][50];

int main()
{
  int tn;
  int i,j,z;
  int draw, xwin, owin;
  int a,b,c;
  scanf("%d",&tn);
  for(z=1;z<=tn;z++){
    for(i=0;i<4;i++)
      scanf("%s",str[i]);

    draw = 1;
    xwin = owin = 0;
    for(i=0;i<4;i++){
      a = 0, b = 0 , c = 0;
      for(j=0;j<4;j++){
        a += (str[i][j]=='X');
        b += (str[i][j]=='O');
        c += (str[i][j]=='T');
        if(str[i][j]=='.') draw = 0;
      }
      if(a+c==4) xwin = 1;
      if(b+c==4) owin = 1;
      a = 0, b = 0 , c = 0;
      for(j=0;j<4;j++){
        a += (str[j][i]=='X');
        b += (str[j][i]=='O');
        c += (str[j][i]=='T');
      }
      if(a+c==4) xwin = 1;
      if(b+c==4) owin = 1;
    }
    a = b = c = 0;
    for(i=0;i<4;i++){
      a += (str[i][i]=='X');
      b += (str[i][i]=='O');
      c += (str[i][i]=='T');
    }
    if(a+c==4) xwin = 1;
    if(b+c==4) owin = 1;
    a = b = c = 0;
    for(i=0;i<4;i++){
      a += (str[3-i][i]=='X');
      b += (str[3-i][i]=='O');
      c += (str[3-i][i]=='T');
    }
    if(a+c==4) xwin = 1;
    if(b+c==4) owin = 1;

    if(xwin)printf("Case #%d: X won\n",z);
    else if(owin)printf("Case #%d: O won\n",z);
    else if(draw)printf("Case #%d: Draw\n",z);
    else printf("Case #%d: Game has not completed\n",z);
  }
  return 0;
}
