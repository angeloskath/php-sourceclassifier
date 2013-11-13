#include <stdio.h>

char map[10][10];

int check_win(int ch)
{
    int i;
    for(i=0; i<4; i++) {
        int j;
        for(j=0; j<4; j++) {
            if(map[i][j]!=ch && map[i][j]!='T') {
                break;
            }
        }
        if(j>=4) return 1;
        for(j=0; j<4; j++) {
            if(map[j][i]!=ch && map[j][i]!='T') {
                break;
            }
        }
        if(j>=4) return 1;
    }
    for(i=0; i<4; i++) {
        if(map[i][i]!=ch && map[i][i]!='T') {
            break;
        }
    }
    if(i>=4) return 1;
    for(i=0; i<4; i++) {
        if(map[i][3-i]!=ch && map[i][3-i]!='T') {
            break;
        }
    }
    if(i>=4) return 1;
    return 0;
}

int check_full(void)
{
    int i;
    for(i=0; i<4; i++) {
        int j;
        for(j=0; j<4; j++) {
            if(map[i][j]=='.') return 0;
        }
    }
    return 1;
}

int get_res(void)
{
    if(check_win('X')) return 0;
    if(check_win('O')) return 1;
    if(check_full()) return 2;
    return 3;
}

int main()
{
    int T, Tcnt=0;
    for(scanf("%d\n", &T); T; T--) {
        int i;
        int res;
        for(i=0; i<5; i++) {
            fgets(map[i], 10, stdin);
        }
        res=get_res();
        printf("Case #%d: ", ++Tcnt);
        switch(res) {
            case 0:
                puts("X won");
                break;
            case 1:
                puts("O won");
                break;
            case 2:
                puts("Draw");
                break;
            case 3:
                puts("Game has not completed");
                break;
            default:
                break;
        }
    }
    return 0;
}
