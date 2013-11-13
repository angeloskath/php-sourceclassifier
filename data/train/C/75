#include <stdio.h>

int main() {
  int N;
  int i, j, k;
  char grid[4][10];
  scanf("%d", &N);
  for (i = 0; i < N; i++) {
    printf("Case #%d: ", i+1);
    for (j = 0; j < 4; j++) {
      scanf("%s", grid[j]);
    }
    getchar(); // \n
    //for (j = 0; j < 4; j++)
    //{
    //  for (k = 0; k < 4; k++)
    //    putchar(grid[j][k]);
    //  putchar('\n');
    //}
    int over = 1;
    for (j = 0; j < 4; j++) {
      int xwinsline = 1, owinsline = 1, xwinscol = 1, owinscol = 1;
      int xwinsdiag = 1, owinsdiag = 1;
      for (k = 0 ; k < 4; k++) {
        if (j < 2) {
          int y = j ? k : 3 - k;
          if (grid[k][y] == '.' || grid[k][y] == 'O') {
            xwinsdiag = 0;
          }
          if (grid[k][y] == '.' || grid[k][y] == 'X') {
            owinsdiag = 0;
          }
        } else {
          xwinsdiag = owinsdiag = 0;
        }
        if (grid[j][k] == '.') {
          over = 0;
        }
        if (grid[j][k] == '.' || grid[j][k] == 'O') {
          xwinsline = 0;
        }
        if (grid[j][k] == '.' || grid[j][k] == 'X') {
          owinsline = 0;
        }
        if (grid[k][j] == '.' || grid[k][j] == 'O') {
          xwinscol = 0;
        }
        if (grid[k][j] == '.' || grid[k][j] == 'X') {
          owinscol = 0;
        }
      }
      if (xwinsline || xwinscol || xwinsdiag) {
        printf("X won\n");
        over = -1;
        break;
      }
      if (owinsline || owinscol || owinsdiag) {
        printf("O won\n");
        over = -1;
        break;
      }
    }

    if (over == 1) {
      printf("Draw\n");
    } else if (over == 0) {
      printf("Game has not completed\n");
    }
  }
  return 0;
}

