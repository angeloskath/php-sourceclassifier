#include <stdio.h>
#include <stdlib.h>
#include <iostream>
#include <math.h>
#include <stack>
#include <queue>
#include <algorithm>
#include <vector>
#include <string.h>

using namespace std;

int main() {
    int T;
    char s[6][6];
    scanf("%d\n", &T);
    for (int t = 1; t <= T; t++) {
        for (int l = 0; l < 5; l++) gets(s[l]);

        int isFilled = 1, numX, numO, numT;
        int win = 0;
        
        // Check row    
        for (int i = 0; i < 4; i++) {
            numX = numO = numT = 0;
            for (int j = 0; j < 4; j++) {
                if (s[i][j] == 'X') numX++;
                if (s[i][j] == 'O') numO++;
                if (s[i][j] == 'T') numT++;
                if (s[i][j] == '.') isFilled = 0;
            }
            if (numX + numT == 4) win = 1;
            if (numO + numT == 4) win = 2;
        }

        // Check cols    
        for (int i = 0; i < 4; i++) {
            numX = numO = numT = 0;
            for (int j = 0; j < 4; j++) {
                if (s[j][i] == 'X') numX++;
                if (s[j][i] == 'O') numO++;
                if (s[j][i] == 'T') numT++;
            }
            if (numX + numT == 4) win = 1;
            if (numO + numT == 4) win = 2;
        }

        // Check dia
        numX = numO = numT = 0;
        for (int i = 0; i < 4; i++) {            
            if (s[i][i] == 'X') numX++;
            if (s[i][i] == 'O') numO++;
            if (s[i][i] == 'T') numT++;
        }
        if (numX + numT == 4) win = 1;
        if (numO + numT == 4) win = 2;

        numX = numO = numT = 0;
        for (int i = 0; i < 4; i++) {
            if (s[i][3-i] == 'X') numX++;
            if (s[i][3-i] == 'O') numO++;
            if (s[i][3-i] == 'T') numT++;
        }
        if (numX + numT == 4) win = 1;
        if (numO + numT == 4) win = 2;

        // Result
        if (win == 0) {
            if (isFilled == 0) {
                printf("Case #%d: Game has not completed\n", t);
            }
            else {
                printf("Case #%d: Draw\n", t);
            }
        }
        else if (win == 1) { // Win = X
            printf("Case #%d: X won\n", t);
        }
        else { // win = O
            printf("Case #%d: O won\n", t);
        }
    }   
}