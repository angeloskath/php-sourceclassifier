#include <cstdio>

using namespace std;

char board[10][10];
bool check(char c) {
    for(int i = 0; i < 4; i++) {
        bool ok = true;

        for(int j = 0; j < 4; j++)
            if(board[i][j] != c && board[i][j] != 'T')
                ok = false;

        if(ok) return true;
    }

    for(int i = 0; i < 4; i++) {
        bool ok = true;

        for(int j = 0; j < 4; j++)
            if(board[j][i] != c && board[j][i] != 'T')
                ok = false;

        if(ok) return true;
    }

    {
        bool ok = true;

        for(int j = 0; j < 4; j++)
            if(board[j][j] != c && board[j][j] != 'T')
                ok = false;

        if(ok) return true;
    }

    {
        bool ok = true;

        for(int j = 0; j < 4; j++)
            if(board[j][3-j] != c && board[j][3-j] != 'T')
                ok = false;

        if(ok) return true;
    }

    return false;
}

int main() {
    int t;
    scanf("%d", &t);

    for(int z = 1; z <= t; z++) {
        bool dot = false;

        for(int i = 0; i < 4; i++) {
            scanf("%s", board[i]);
            for(int j = 0; j < 4; j++)
                if(board[i][j] == '.')
                    dot = true;
        }

        bool px = check('X'), po = check('O');
        printf("Case #%d: ", z);
        if(px)
            printf("X won\n");
        else if(po)
            printf("O won\n");
        else if(dot)
            printf("Game has not completed\n");
        else
            printf("Draw\n");
    }
}
