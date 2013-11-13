#include <stdio.h>
#include <stdlib.h>

int main (int argc, char *argv[]) 
{

  FILE *fin, *fout;
  int i, nsets;

  fout = fopen(argv[2], "w");
  fin = fopen(argv[1], "r");
  fscanf(fin, "%d", &nsets); 
  for (i = 0; i < nsets; i++) {

    int j, k;
    int Owon = 0;
    int Xwon = 0;
    int a[4][4] = {0};
    for (j=0; j<4;j++) {
      char line[5];
      fscanf(fin, "%s", line);
      for (k = 0; k < 4; k++) {
        if (line[k] == 'X')
          a[j][k] = 1;
        else if (line[k] == 'O') 
          a[j][k] = 2;
        else if (line[k] == 'T')
          a[j][k] = 3;
      }
    }
    for (j=0; j<4;j++) {
      for (k = 0; k < 4; k++) {
        if ((a[j][k] & 1) == 0)
          break;
      }
      if (k == 4)
        Xwon = 1;
      for (k = 0; k < 4; k++) {
        if ((a[k][j] & 1) == 0)
          break;
      }
      if (k == 4)
        Xwon = 1;
    }
    for (j=0; j<4;j++) {
      if ((a[j][j] & 1) == 0)
        break;
    }
    if (j == 4)
      Xwon = 1;
    for (j=0; j<4;j++) {
      if ((a[j][3-j] & 1) == 0)
        break;
    }
    if (j == 4)
      Xwon = 1;

    for (j=0; j<4;j++) {
      for (k = 0; k < 4; k++) {
        if ((a[j][k] & 2) == 0)
          break;
      }
      if (k == 4)
        Owon = 1;
      for (k = 0; k < 4; k++) {
        if ((a[k][j] & 2) == 0)
          break;
      }
      if (k == 4)
        Owon = 1;
    }
    for (j=0; j<4;j++) {
      if ((a[j][j] & 2) == 0)
        break;
    }
    if (j == 4)
      Owon = 1;
    for (j=0; j<4;j++) {
      if ((a[j][3-j] & 2) == 0)
        break;
    }
    if (j == 4)
      Owon = 1;

    if (Owon == 1) {
      fprintf(fout, "Case #%d: O won\n", i+1);
    } else if (Xwon == 1) {
      fprintf(fout, "Case #%d: X won\n", i+1);
    } else {
      int incomplete = 0;
      for (j=0; j<4;j++) {
        for (k = 0; k < 4; k++) {
          if (a[j][k] == 0) {
            incomplete = 1;
            break;
          }
        }
        if (incomplete == 1)
          break;
      }
      if (incomplete == 1)
        fprintf(fout, "Case #%d: Game has not completed\n", i+1);
      else
        fprintf(fout, "Case #%d: Draw\n", i+1);
    }
  }
  fclose(fin);
  fclose(fout);
  return 0;
}
