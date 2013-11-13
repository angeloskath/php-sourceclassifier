#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main()
{
  long num_test, test;
  scanf("%ld", &num_test);
  for (test = 1; test<=num_test; test++) {
    char ch, map[4][4];
    for(int i = 0; i < 4; i++)
      for (int j = 0; j < 4; j++) {
        scanf("%c", &ch);
        while(ch!='X' && ch!='T' && ch != 'O' && ch != '.') scanf("%c", &ch);
        map[i][j] = ch;
      }
    bool xwin = false, ywin = false;
    for (int i = 0; i < 4; i++) {
      bool xline = true, yline = true;
      for (int j = 0; j < 4; j++) {
        if (map[i][j]=='O' || map[i][j]=='.') xline = false;
        if (map[i][j]=='X' || map[i][j]=='.') yline = false;
      }
      if (xline) xwin = true;
      if (yline) ywin = true;
    }
    
    for (int i = 0; i < 4; i++) {
      bool xline = true, yline = true;
      for (int j = 0; j < 4; j++) {
        if (map[j][i]=='O' || map[j][i]=='.') xline = false;
        if (map[j][i]=='X' || map[j][i]=='.') yline = false;
      }
      if (xline) xwin = true;
      if (yline) ywin = true;
    }
    
    bool xline = true, yline = true;
    for (int i = 0; i < 4; i++) {
      if (map[i][i]=='O' || map[i][i]=='.') xline = false;
      if (map[i][i]=='X' || map[i][i]=='.') yline = false;
    }
    if (xline) xwin = true;
    if (yline) ywin = true;
    
    xline = true; yline = true;
    for (int i = 0; i < 4; i++) {
      if (map[i][3-i]=='O' || map[i][3-i]=='.') xline = false;
      if (map[i][3-i]=='X' || map[i][3-i]=='.') yline = false;
    }
    if (xline) xwin = true;
    if (yline) ywin = true;
    
    if (xwin) printf("Case #%ld: X won\n", test);
    else if (ywin) printf("Case #%ld: O won\n", test);
    else {
      bool finish = true;
      for (int i = 0; i < 4; i++)
        for(int j = 0; j < 4; j++) if(map[i][j] == '.') finish = false;
      if (finish) printf("Case #%ld: Draw\n", test);
      else printf("Case #%ld: Game has not completed\n", test);
    }
  }
}
