#include <stdio.h>

int main(int argc, char *argv[]){
    int T, cases;
    scanf("%d", &T);
    for (cases = 1; cases <= T; ++cases) {
        char board[5][5];
        int i, j;
        int cond = -1;
        for (i = 0; i < 4; ++i)
            scanf("%s", board[i]);
        int isLine;
        for (i = 0; i < 4; ++i) {
            isLine = 1;
            for (j = 0; j < 4; ++j)
                if (board[i][j] != 'O' && board[i][j] != 'T')
                    isLine = 0;
            if (isLine == 1)
                cond = 0;
            isLine = 1;
            for (j = 0; j < 4; ++j)
                if (board[j][i] != 'O' && board[j][i] != 'T')
                    isLine = 0;
            if (isLine == 1)
                cond = 0;
        }
        isLine = 1;
        for (i = 0; i < 4; ++i)
            if (board[i][i] != 'O' && board[i][i] != 'T')
                isLine = 0;
        if (isLine == 1)
            cond = 0;

        isLine = 1;
        for (i = 0; i < 4; ++i)
            if (board[i][3-i] != 'O' && board[i][3-i] != 'T')
                isLine = 0;
        if (isLine == 1)
            cond = 0;
        
        for (i = 0; i < 4; ++i) {
            isLine = 1;
            for (j = 0; j < 4; ++j)
                if (board[i][j] != 'X' && board[i][j] != 'T')
                    isLine = 0;
            if (isLine == 1)
                cond = 1;
            isLine = 1;
            for (j = 0; j < 4; ++j)
                if (board[j][i] != 'X' && board[j][i] != 'T')
                    isLine = 0;
            if (isLine == 1)
                cond = 1;
        }
        isLine = 1;
        for (i = 0; i < 4; ++i)
            if (board[i][i] != 'X' && board[i][i] != 'T')
                isLine = 0;
        if (isLine == 1)
            cond = 1;

        isLine = 1;
        for (i = 0; i < 4; ++i)
            if (board[i][3-i] != 'X' && board[i][3-i] != 'T')
                isLine = 0;
        if (isLine == 1)
            cond = 1;
        if (cond == -1) {
            int dot = 0;
            for (i = 0; i < 4; ++i)
                for (j = 0; j < 4; ++j)
                    if (board[i][j] == '.')
                        dot++;
            if (dot == 0)
                cond = 2;
            else
                cond = 3;
        }
        if (cond == 0)
            printf("Case #%d: O won\n", cases);
        else if (cond == 1)
            printf("Case #%d: X won\n", cases);
        else if (cond == 2)
            printf("Case #%d: Draw\n", cases);
        else if (cond == 3)
            printf("Case #%d: Game has not completed\n", cases);

    }
    return 0;
}
