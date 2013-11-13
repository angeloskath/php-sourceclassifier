#include <stdio.h>

int main()
{
    int t, i;
    
    scanf("%d", &t);
    
    for (i = 0; i < t; i++) {
        int f = 0, j, k;
        char s[4][5];
        
        for (j = 0; j < 4; j++) scanf("%s", s[j]);
        
        for (j = 0; j < 4; j++) {
            for (k = 0; k < 4; k++) {
                if (s[j][k] == 'O' || s[j][k] == '.') break;
            }
            
            if (k == 4) f = 1;
            
            for (k = 0; k < 4; k++) {
                if (s[k][j] == 'O' || s[k][j] == '.') break;
            }
            
            if (k == 4) f = 1;
            
            for (k = 0; k < 4; k++) {
                if (s[j][k] == 'X' || s[j][k] == '.') break;
            }
            
            if (k == 4) f = 2;
            
            for (k = 0; k < 4; k++) {
                if (s[k][j] == 'X' || s[k][j] == '.') break;
            }
            
            if (k == 4) f = 2;
        }
        
        for (j = 0; j < 4; j++) {
            if (s[j][j] == 'O' || s[j][j] == '.') break;
        }
        
        if (j == 4) f = 1;
        
        for (j = 0; j < 4; j++) {
            if (s[j][3 - j] == 'O' || s[j][3 - j] == '.') break;
        }
        
        if (j == 4) f = 1;
        
        for (j = 0; j < 4; j++) {
            if (s[j][j] == 'X' || s[j][j] == '.') break;
        }
        
        if (j == 4) f = 2;
        
        for (j = 0; j < 4; j++) {
            if (s[j][3 - j] == 'X' || s[j][3 - j] == '.') break;
        }
        
        if (j == 4) f = 2;
        
        if (f == 1) {
            printf("Case #%d: X won\n", i + 1);
        } else if (f == 2) {
            printf("Case #%d: O won\n", i + 1);
        } else {
            for (j = 0; j < 4; j++) {
                for (k = 0; k < 4; k++) {
                    if (s[j][k] == '.') f = 1;
                }
            }
            
            if (f == 1) {
                printf("Case #%d: Game has not completed\n", i + 1);
            } else {
                printf("Case #%d: Draw\n", i + 1);
            }
        }
    }
    
    return 0;
}
