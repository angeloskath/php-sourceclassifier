/**
 * Author: Sergey Kopeliovich (Burunduk30@gmail.com)
 * Date: 2013.04.13
 */

#include <cstdio>
#include <cassert>

#define forn(i, n) for (int i = 0; i < (int)(n); i++)

int dx[] = {1, 1, 0, -1};
int dy[] = {0, 1, 1, 1};

int tn;
char s[4][5];

int main()
{
  scanf("%d", &tn);
  forn(t, tn)
  {
    int ow = 0, xw = 0, dot = 0;
    forn(i, 4)
      scanf("%s", s[i]);
    forn(y, 4)
      forn(x, 4)
      {
        dot |= s[y][x] == '.';
        forn(k, 4)
        {
          int y1 = y + dy[k] * 3, x1 = x + dx[k] * 3;
          if (!(0 <= y1 && y1 < 4 && 0 <= x1 && x1 < 4))
            continue;
          int O = 0, X = 0, T = 0;
          forn(i, 4)
          {
            int y1 = y + dy[k] * i, x1 = x + dx[k] * i;
            O += (s[y1][x1] == 'O');
            X += (s[y1][x1] == 'X');
            T += (s[y1][x1] == 'T');
          }
          ow |= (T <= 1 && O + T == 4);
          xw |= (T <= 1 && X + T == 4);
        }
      }
    printf("Case #%d: ", t + 1);
    assert(!(xw && ow));
    if (xw)
      puts("X won");
    else if (ow)
      puts("O won");
    else if (!dot)
      puts("Draw");
    else
      puts("Game has not completed");
  }
  return 0;
}
