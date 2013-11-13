#include<stdio.h>

int main(){
    int t, u;
    scanf("%d", &t);
    for (u = 1 ; u <= t ; ++u){
        char c;
        int i, j;
        int rowx[4] = {}, colx[4] = {}, diax[2] = {};
        int rowo[4] = {}, colo[4] = {}, diao[2] = {};
        int rowt[4] = {}, colt[4] = {}, diat[2] = {};
        int fl = 0;
        printf("Case #%d: ", u);
        getchar();
        for (i = 0 ; i < 4 ; ++i){
            for (j = 0 ; j < 4 ; ++j){
                c = getchar();
                switch (c){
                case '.':
                    fl = 1;
                    break;
                case 'X':
                    ++rowx[i];
                    ++colx[j];
                    if (i == j)++diax[0];
                    if (i + j == 3)++diax[1];
                    break;
                case 'O':
                    ++rowo[i];
                    ++colo[j];
                    if (i == j)++diao[0];
                    if (i + j == 3)++diao[1];
                    break;
                case 'T':
                    ++rowt[i];
                    ++colt[j];
                    if (i == j)++diat[0];
                    if (i + j == 3)++diat[1];
                    break;
                }
            }
            getchar();
        }
        for (i = 0 ; i < 4 ; ++i){
            if (rowx[i] + rowt[i] == 4){
                puts("X won");
                break;
            }
            if (rowo[i] + rowt[i] == 4){
                puts("O won");
                break;
            }
            if (colx[i] + colt[i] == 4){
                puts("X won");
                break;
            }
            if (colo[i] + colt[i] == 4){
                puts("O won");
                break;
            }
            if (i < 2){
                if (diax[i] + diat[i] == 4){
                    puts("X won");
                    break;
                }
                if (diao[i] + diat[i] == 4){
                    puts("O won");
                    break;
                }
            }
        }
        if (i == 4){
            puts(fl ? "Game has not completed" : "Draw");
        }
    }
    return 0;
}
