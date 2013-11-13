/* 
 * File:   main.c
 * Author: paulo
 *
 * Created on 12 de Abril de 2013, 22:55
 */

#include <stdio.h>
#include <stdlib.h>
#include <memory.h>
#include <string.h>

#define EMPTY   0
#define X       1
#define O       2
#define T       3

int won(int field[4][4], int symbol);
int draw(int field[4][4]);

int won(int field[4][4], int symbol)
{
    int wonhor, wonvert, wond1, wond2;
    int line, column;
    wond1=-1;
    wond2=-1;
    for(line=0;line<4;line++)
    {
        if(field[line][line] != symbol && field[line][line] != T)
            wond1=0;
        if(field[3-line][line] != symbol && field[3-line][line] != T)
            wond2=0;            
        wonhor = -1;
        wonvert = -1;
        for(column=0;column<4;column++)
        {
            if(field[line][column] != symbol && field[line][column] != T)
                wonhor=0;
            if(field[column][line] != symbol && field[column][line] != T)
                wonvert=0;            
        }
        if(wonhor || wonvert)
            return -1;
    }
    if(wond1 || wond2)
        return -1;
    return 0;
}


int draw(int field[4][4])
{
    int full=-1;
    int line, column;
    for(line=0;line<4;line++)
    {
        for(column=0;column<4;column++)
        {
            if(field[line][column] == EMPTY)
                full=0;
        }
    }
    if(full)
        return -1;
    else
        return 0;
}


/*
 * 
 */
int main(int argc, char** argv) {
    int field[4][4];
    int cases;
    int count, line, column;
    char str[5];
    scanf("%d", &cases);
    for(count=0;count<cases;count++)
    {
        memset(field, EMPTY, sizeof(int)*16);
        for(line=0;line<4;line++)
        {
            scanf("%s", str);
            for(column=0;column<4;column++)
            {
                switch(str[column])
                {
                    case 'X':
                        field[line][column]=X;
                        break;
                    case 'O':
                        field[line][column]=O;
                        break;
                    case 'T':
                        field[line][column]=T;
                        break;
                }
            }
        }
        if(won(field, X))
            printf("Case #%d: X won\n", count+1);
        else if(won(field, O))
            printf("Case #%d: O won\n", count+1);
        else if(draw(field))
            printf("Case #%d: Draw\n", count+1);
        else
            printf("Case #%d: Game has not completed\n", count+1);
    }
    return (EXIT_SUCCESS);
}

