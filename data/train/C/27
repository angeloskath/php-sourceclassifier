#include <stdio.h>
#include <stdlib.h>

#define TRUE         1
#define FALSE        0

#define XWON         0
#define OWON         1
#define NO_WON       2
#define BLANK        3

void handleCase();
int getResult (int x, int y, int t);


int grid[4][4];

int dx[] = {0, 1, 1, -1};
int dy[] = {1, 1, 0, 1};

int main() {
   freopen ("ain.txt", "r", stdin);
   freopen ("aout.txt", "w", stdout);
   int n;
   scanf ("%d ", &n);
   int i;
   for (i = 0; i < n; i++) {
      printf ("Case #%d: ", i + 1);
      handleCase();
   }
   return 0;
}



void handleCase() {
   int i, j, k;
   int full = TRUE;
   for (i = 0; i < 4; i++) {
      for (j = 0; j < 4; j++) {
         char c;
         int type;
         scanf ("%c ", &c);
         if (c == 'X') {
            type = XWON;
         } else if (c == 'O') {
            type = OWON;
         } else if (c == 'T') {
            type = NO_WON;
         } else {
            full = FALSE;
            type = BLANK;
         }
         grid[i][j] = type;
      }
   }
   for (i = 0; i < 4; i++) {
      for (j = 0; j < 4; j++) {
         for (k = 0; k < 4; k++) {
            int result = getResult (j, i, k);
            if (result == XWON) {
               printf ("X won\n");
               return;
            } else if (result == OWON) {
               printf ("O won\n");
               return;
            }
         }
      }
   }
   if (full) {
      printf ("Draw\n");
   } else {
      printf ("Game has not completed\n");
   }
}


int getResult (int x, int y, int t) {
   int i;
   int cur = NO_WON;
   for (i = 0; i < 4; i++) {
      if (x >= 4 || y >= 4 || x < 0 || y < 0) {
         return NO_WON;
      }
      if (grid[y][x] == BLANK) {
         return NO_WON;
      }
      if (grid[y][x] != NO_WON) {
         if (cur == NO_WON || cur == grid[y][x]) {
            cur = grid[y][x];
         } else {
            return NO_WON;
         }
      }
      x += dx[t];
      y += dy[t];
   }
   return cur;
}