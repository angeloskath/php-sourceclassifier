#include <stdio.h>
#include <string.h>

int check(char msk[]){
    if (msk['O']+msk['T'] == 4 && msk['O']>2) return 0; // O win
    if (msk['X']+msk['T'] == 4 && msk['X']>2) return 1; // X win
    return -1;
}

const char *res_str[] = {"O won", "X won", "Draw", "Game has not completed"};

int sol(){
    char s[4][5];
    char msk[128];
    int i,j,k;
    int all = 1;
    int O = 0, T = 0;
    for (i=0;i<4;i++) 
        scanf("%s", s[i]);
    memset(msk,0,sizeof(msk));
    // row
    for (i=0;i<4;i++){
        memset(msk,0,sizeof(msk));
        for (j=0;j<4;j++) msk[s[i][j]]++;
        if (msk['.']>0) all = 0;
        k = check(msk);
        if (k>=0) return k;
        memset(msk,0,sizeof(msk));
        for (j=0;j<4;j++) msk[s[j][i]]++;
        k = check(msk);
        if (k>=0) return k;
    }
    // tri
    memset(msk,0,sizeof(msk));
    for (i=0;i<4;i++) msk[s[i][i]]++;
    k = check(msk);
    if (k>=0) return k;
    memset(msk,0,sizeof(msk));
    for (i=0;i<4;i++) msk[s[i][3-i]]++;
    k = check(msk);
    if (k>=0) return k;
    if (all) return 2;
    else return 3;
    // fin
}

int main(){
    int T,cas,r;
    scanf("%d", &T);
    for (cas=1;cas<=T;cas++){
        r = sol();
        printf("Case #%d: %s\n",cas, res_str[r]);
    }
    return 0;
}

