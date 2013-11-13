#include <stdio.h>
#include <assert.h>
#include <string.h>

char s[4][5];
char check (int x1, int y1, int x2, int y2, int x3, int y3, int x4, int y4) {
  if ((s[x1][y1] == 'X' || s[x1][y1] == 'T') && (s[x2][y2] == 'X' || s[x2][y2] == 'T') &&
      (s[x3][y3] == 'X' || s[x3][y3] == 'T') && (s[x4][y4] == 'X' || s[x4][y4] == 'T')) { return 'X'; }
  if ((s[x1][y1] == 'O' || s[x1][y1] == 'T') && (s[x2][y2] == 'O' || s[x2][y2] == 'T') &&
      (s[x3][y3] == 'O' || s[x3][y3] == 'T') && (s[x4][y4] == 'O' || s[x4][y4] == 'T')) { return 'O'; }
  return 0;
}

void solve (void) {
  int cc = 0;
  while (cc < 4) {
    assert (scanf ("%s\n", s[cc]) >= 1);
    assert (strlen (s[cc]) == 4);
    cc ++;
  }
  //scanf ("%s\n", s[4]);
  int i, j;
  for (i = 0; i < 4; i++) {
    char c = check (i, 0, i, 1, i, 2, i, 3);
    if (c) {
      printf ("%c won\n", c);
      return;
    }
    c = check (0, i, 1, i, 2, i, 3, i);
    if (c) {
      printf ("%c won\n", c);
      return;
    }
  }
  char c = check (0, 0, 1, 1, 2, 2, 3, 3);
  if (c) {
    printf ("%c won\n", c);
    return;
  }
  c = check (0, 3, 1, 2, 2, 1, 3, 0);
  if (c) {
    printf ("%c won\n", c);
    return;
  }
  for (i = 0; i < 4; i++)
    for (j = 0; j < 4; j++)
      if (s[i][j] == '.') {
        printf ("Game has not completed\n");
        return;
      }
   printf ("Draw\n");
}

int main () {
  int _;
  assert (scanf ("%d\n", &_) > 0);
  int __;
  for (__ = 0; __ < _; __++) {
    printf ("Case #%d: ", __ + 1);
    solve ();
  }
  return 0;
}
