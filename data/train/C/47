#include <cstdio>
#include <cstdlib>
#include <cstring>
#include <algorithm>
#include <string>
using namespace std;

int main() {
  int tc, cn, x, y, xw, ow, c, valid;
  char g[4][5];
  scanf("%d", &tc);
  for(cn = 1; cn <= tc; cn++) {
    for(y = 0; y < 4; y++)
      scanf("%s", g[y]);
    xw = ow = 0;
    c = 1;
    for(y = 0; y < 4; y++) {
      for(x = 0, valid = 1; x < 4; x++) {
        if(g[y][x] != 'X' && g[y][x] != 'T')
          valid = 0;
        if(g[y][x] == '.')
          c = 0;
      }
      if(valid)
        xw = 1;
    }
    for(y = 0; y < 4; y++) {
      for(x = 0, valid = 1; x < 4; x++) {
        if(g[y][x] != 'O' && g[y][x] != 'T')
          valid = 0;
      }
      if(valid)
        ow = 1;
    }
    for(x = 0; x < 4; x++) {
      for(y = 0, valid = 1; y < 4; y++) {
        if(g[y][x] != 'X' && g[y][x] != 'T')
          valid = 0;
      }
      if(valid)
        xw = 1;
    }
    for(x = 0; x < 4; x++) {
      for(y = 0, valid = 1; y < 4; y++) {
        if(g[y][x] != 'O' && g[y][x] != 'T')
          valid = 0;
      }
      if(valid)
        ow = 1;
    }
    for(x = 0, valid = 1; x < 4; x++)
      if(g[x][x] != 'X' && g[x][x] != 'T')
        valid = 0;
    if(valid)
      xw = 1;
    for(x = 0, valid = 1; x < 4; x++)
      if(g[x][x] != 'O' && g[x][x] != 'T')
        valid = 0;
    if(valid)
      ow = 1;
    for(x = 0, valid = 1; x < 4; x++)
      if(g[x][3 - x] != 'X' && g[x][3 - x] != 'T')
        valid = 0;
    if(valid)
      xw = 1;
    for(x = 0, valid = 1; x < 4; x++)
      if(g[x][3 - x] != 'O' && g[x][3 - x] != 'T')
        valid = 0;
    if(valid)
      ow = 1;

    printf("Case #%d: ", cn);
    if(xw)
      puts("X won");
    else if(ow)
      puts("O won");
    else if(!c)
      puts("Game has not completed");
    else
      puts("Draw");
  }
  return 0;
}
