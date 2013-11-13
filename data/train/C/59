#include <stdlib.h>
#include <stdio.h>

int num[20][20];
int t, p, i, j;
int ret1, ret2;
int ifEmpty;
char symbol;

int ifRetMatch(int player, int sum1, int sum2) {
    if (player == 1 && ((sum1 == 4 && sum2 == 1) ||
                        (sum1 == 6 && sum2 == 3)))  {
        return 1;
    }
    if (player == 2 && ((sum1 == 8 && sum2 == 16) ||
                        (sum1 == 9 && sum2 == 24))) {
        return 1;
    }
    return 0;
}

int calIfWin(int num[20][20], int player)
{
    int r1, r2;
    int vSum, hSum, mvSum, mhSum;
    int dSum = 0, mdSum = 1;
    
    for (r1=0; r1<4; r1++) {
        vSum = 0;
        hSum = 0;
        mvSum = 1;
        mhSum = 1;
        for (r2=0; r2<4; r2++) {
            vSum += num[r1][r2];
            mvSum *= num[r1][r2];
            
            hSum += num[r2][r1];
            mhSum *= num[r2][r1];
        }
        if (ifRetMatch(player, vSum, mvSum) == 1) {
            return 1;
        }
        if (ifRetMatch(player, hSum, mhSum) == 1) {
            return 1;
        }
    }
    
    dSum = num[0][0] + num[1][1] + num[2][2] + num[3][3];
    mdSum = num[0][0] * num[1][1] * num[2][2] * num[3][3];
    if (ifRetMatch(player, dSum, mdSum) == 1)  {
        return 1;
    }
    
    dSum = num[0][3] + num[1][2] + num[2][1] + num[3][0];
    mdSum = num[0][3] * num[1][2] * num[2][1] * num[3][0];
    if (ifRetMatch(player, dSum, mdSum) == 1) {
        return 1;
    }
    
    return 0;
}



int main() {
    /* freopen("alarge.in", "r", stdin); */

    scanf("%d\n", &t);
    
    for (p=0; p<t; p++) {

        ifEmpty = 0;

        /* read */
        for (i=0; i<4; i++) {
            for (j=0; j<4; j++) {
                scanf("%c", &symbol);
                if (symbol == 'X') {
                    num[i][j] = 1;
                }
                if (symbol == 'O') {
                    num[i][j] = 2;
                }
                if (symbol == 'T') {
                    num[i][j] = 3;
                }
                if (symbol == '.') {
                    num[i][j] = 0;
                    ifEmpty = 1;
                }
            }
            getchar();
        }
        getchar();

        /* cal */
        ret1 = calIfWin(num, 1);
        ret2 = calIfWin(num, 2);

        /* output */
        printf("Case #%d: ", p+1);        
        if (ret1 == 1 && ret2 == 1) {
            printf("Draw\n");
        }
        if (ret1 == 0 && ret2 == 0 && ifEmpty == 0) {
            printf("Draw\n");
        }
        if (ret1 == 1 && ret2 == 0) {
            printf("X won\n");
        }
        if (ret1 == 0 && ret2 == 1) {
            printf("O won\n");
        }
        if (ret1 == 0 && ret2 == 0 && ifEmpty == 1) {
            printf("Game has not completed\n");
        }
    }
    
    return 0;
}
