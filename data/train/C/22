
#include <stdio.h>


char won;
int dots;

void inc(int *rc,char p) {
    if (++(*rc)==4) won=p;
}

void tally(char *line,int r,char p, int *rowcol) {
    int c;
    for (c=0;c<4;c++) {
        if (line[c]=='.') dots++;
        if (line[c]==p || line[c]=='T') {
            inc(rowcol+r,p);
            inc(rowcol+c+4,p);
            if (r==c) inc(rowcol+8,p);
            if (r+c==3) inc(rowcol+9,p);
        }
    }
}

void tic(void) {
    int O[10];
    int X[10];
    int i;
    int r;
    char line[50];
    dots=0;
    won=0;
    for (i=0;i<10;i++) O[i]=X[i]=0;
    for (r=0;r<4;r++) {
        scanf("%s",line);
        tally(line,r,'X',X);
        tally(line,r,'O',O);
    }
    if (won) printf("%c won\n",won);
    else if (dots) printf("Game has not completed\n");
    else printf("Draw\n");
}

int main(int argc, char **argv) {
    int i,t;
    scanf("%d",&t);
    for (i=1;i<=t;i++) {
        printf("Case #%d: ",i);
        tic();
    }
    return 0;
}