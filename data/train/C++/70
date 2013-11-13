#include <algorithm>
#include <iostream>
#include <vector>
#include <map>
#include <cassert>

using namespace std;

typedef long long ll;
typedef unsigned long long ull;
typedef unsigned long ul;
typedef unsigned short us;
typedef unsigned char uc;

char B[10][10];

char mp(char c)
{
if(c=='X') return 1; else if(c=='O') return -1; else if (c=='T') return 10; else if (c=='.') return 0; else assert(0);
}

int doit(int x0, int y0, int dx, int dy)
{
  int i=x0, j=y0, t=0;
  for(int k=0;k<4;k++) { t+=B[i][j]; i+=dx; j+=dy; }
  if (t == 4 || t==13) return 1;
  if (t == -4 || t==7) return -1;
  return 0;
}

int tiod()
{
  for(int k=0;k<4;k++) if (doit(0,k,1,0)) return doit(0,k,1,0);
  for(int k=0;k<4;k++) if (doit(k,0,0,1)) return doit(k,0,0,1);
  if (doit(0,0,1,1)) return doit(0,0,1,1);
  if (doit(0,3,1,-1)) return doit(0,3,1,-1);
  return 0;
}

int main()
{
  int cases;
  cin >> cases;
  for(int loop=1; loop<=cases; loop++)
  {
    int cnt=16;
    for(int i=0;i<4;i++) scanf("%s",B[i]);
    for(int i=0;i<4;i++) for(int j=0;j<4;j++) { B[i][j]=mp(B[i][j]); if (!B[i][j]) cnt--; }
    int win = tiod();

    printf("Case #%d: ",loop);
    if (win > 0) { puts("X won"); }
    else if (win < 0) { puts("O won"); }
    else if (cnt < 16) { puts("Game has not completed"); }
    else { puts("Draw"); }
  }
}
