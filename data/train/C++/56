#include <cassert>
#include <cstdio>
#include <map>
#include <set>
#include <cstring>
#include <cstdlib>
#include <algorithm>
#include <string>
#include <vector>
#include <iostream>

using namespace std;

char a[5][5];

int check (char c) {
  if (a[0][0] == c && a[1][1] == c && a[2][2] == c && a[3][3] == c)
    return 1;
  if (a[0][3] == c && a[1][2] == c && a[2][1] == c && a[3][0] == c)
    return 1;
  for (int i = 0; i < 4; i++) {
    if (a[0][i] == c && a[1][i] == c && a[2][i] == c && a[3][i] == c)
      return 1;
    if (a[i][0] == c && a[i][1] == c && a[i][2] == c && a[i][3] == c)
      return 1;
  }
  return 0;
}

int main(void) {
  int tn, nt;
  scanf("%d", &nt);
  for (tn=1; tn<=nt; tn++) {
    printf ("Case #%d: ", tn);
    fprintf (stderr, "Case #%d: \n", tn);
    
    for (int i = 0; i < 4; i++)
      scanf("%s", a[i]);

    char *res = NULL;
    int cnt = 0, cntx = 0, cnto = 0;

    for (int i = 0; i < 4; i++) {
      for (int j = 0; j < 4; j++) {
        if (a[i][j] == 'X') {
          cntx++;
        }
        if (a[i][j] == 'O') {
          cnto++;
        }
        if (a[i][j] == '.') {
          cnt++;
        }
      }
    }
    assert (cntx + cnto + cnt == 15 || cntx + cnto + cnt == 16);
    assert (cntx == cnto || cntx == cnto + 1);

    for (int i = 0; i < 4; i++) {
      for (int j = 0; j < 4; j++) {
        if (a[i][j] == 'T') {
          if (cntx == cnto + 1) {
            a[i][j] = 'X';
          } else {
            a[i][j] = 'O';
          }
        }
      }
    }
    if (check ('X')) {
      res = "X won";
    } else if (check ('O')) {
      res = "O won";
    } else if (cnt > 0) {
      res = "Game has not completed";
    } else {
      res = "Draw";
    }
    printf ("%s\n", res);
  }

  return 0;
}
