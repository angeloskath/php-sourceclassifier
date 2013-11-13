#include <stdio.h>
#include <string.h>
#include <stdbool.h>

#define clr(ar) memset(ar, 0, sizeof(ar))
#define read() freopen("lol.txt", "r", stdin)
#define write() freopen("output.txt", "w", stdout)
#define Valid(i, j) ((i) >= 0 && (j) >= 0 && (i) < n && (j) < n)

int t, n = 4;
char str[10][10];
int dx[] = {0, 0, 1, -1, 1, 1, -1, -1};
int dy[] = {1, -1, 0, 0, -1, 1, -1, 1};

bool F(char ch){
    int i, j, k, l;
    for (i = 0; i < n; i++){
        for (j = 0; j < n; j++){
            for (k = 0; k < 8; k++){

                int x = i, y = j, counter = 0;
                for (l = 0; l < n; l++){
                    if (!Valid(x, y)) break;
                    if (str[x][y] == ch || str[x][y] == 'T') counter++;
                    x += dx[k], y += dy[k];
                }

                if (counter == n) return true;
            }
        }
    }

    return false;
}

bool Draw(){
    int i, j;
    for (i = 0; i < n; i++){
        for (j = 0; j < n; j++){
            if (str[i][j] == '.') return false;
        }
    }
    return true;
}

int main(){
    int line, i, j;

    scanf("%d", &t);
    for (line = 1; line <= t; line++){
        for (i = 0; i < n; i++) scanf("%s", str[i]);

        printf("Case #%d: ", line);
        if (F('O')) puts("O won");
        else if (F('X')) puts("X won");
        else if (Draw()) puts("Draw");
        else puts("Game has not completed");
    }
    return 0;
}
