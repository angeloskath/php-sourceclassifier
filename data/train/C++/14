#include<stdio.h>

char A[5][5];

int check(char p) {
  int i,j;
  for(i=0;i<4;i++) {
    for(j=0;j<4;j++) if(A[i][j]!=p && A[i][j]!='T') break;
    if(j==4) return 1;
    for(j=0;j<4;j++) if(A[j][i]!=p && A[j][i]!='T') break;
    if(j==4) return 1;
  }
  for(j=0;j<4;j++) if(A[j][j]!=p && A[j][j]!='T') break;
  if(j==4) return 1;
  for(j=0;j<4;j++) if(A[3-j][j]!=p && A[3-j][j]!='T') break;
  if(j==4) return 1;
  for(i=0;i<4;i++) for(j=0;j<4;j++) if(A[i][j]=='.') return -1;
  return 0;
}

void go(int t) {
  scanf("%s",A[0]);
  scanf("%s",A[1]);
  scanf("%s",A[2]);
  scanf("%s",A[3]);
  int i,j;
  if(check('X')==1) printf("Case #%d: X won\n",t);
  else if(check('O')==1) printf("Case #%d: O won\n",t);
  else if(check('X')==-1) printf("Case #%d: Game has not completed\n",t);
  else printf("Case #%d: Draw\n",t);
}

int main() {
  int t,T;
  scanf("%d",&T);
  for(t=1;t<=T;t++) go(t);
  return 0;
}
