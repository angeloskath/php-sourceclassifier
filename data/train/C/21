#include<stdio.h>
#include<stdlib.h>
#include<string.h>


// for qsort
/*
int compare(int *t, int *s) {
    return *t - *s;
}
*/

int check(int *data) {
    int i, j;
    int test;
    for(i = 0; i < 4; ++i) {
        test = 1;
        for(j = 0; j < 4; ++j) {
            if(!data[i*4+j]) {
                test = 0;
                break;
            }
        }
        if(test) return 1;
    }
    for(i = 0; i < 4; ++i) {
        test = 1;
        for(j = 0; j < 4; ++j) {
            if(!data[j*4+i]) {
                test = 0;
                break;
            }
        }
        if(test) return 1;
    }

    test = 1;
    for(i = 0; i < 4; ++i) {
        if(!data[i*4+i]) {
            test = 0;
            break;
        }
    }
    if(test) return 1;

    for(i = 0; i < 4; ++i) {
        test = 1;
        if(!data[i*4+(3-i)]) {
            test = 0;
            break;
        }
    }

    return test;
}


int main(void) {
    int num;
    int i, j, k;
    char buf[6];
    int X[4][4];
    int O[4][4];
    int emp;
    int result;

    scanf("%d", &num);
    for(i = 1; i <= num; ++i) {
        gets(buf);
        emp = 0; result = 0;
        for(j = 0; j < 4; ++j) {
            gets(buf);
            for(k = 0; k < 4; ++k) {
                if(buf[k] == 'X') {
                    X[j][k] = 1;
                    O[j][k] = 0;
                } else if(buf[k] == 'O') {
                    X[j][k] = 0;
                    O[j][k] = 1;
                } else if(buf[k] == 'T') {
                    X[j][k] = 1;
                    O[j][k] = 1;
                } else {
                    X[j][k] = 0;
                    O[j][k] = 0;
                    emp = 1;
                }
            }
        }

        printf("Case #%d: ", i);
        if(check((int*)X)) {
            printf("X won\n");
        } else if(check((int*)O)) {
            printf("O won\n");
        } else if(emp) {
            printf("Game has not completed\n");
        }
        else {
            printf("Draw\n");
        }
    }

    return 0;
}
