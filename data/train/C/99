#include <stdio.h>
#include <stdlib.h>

typedef enum {
    XWON,
    OWON,
    DRAW,
    INCOMPLETE
} winner_e;

winner_e findWinner(char *board){
    int row;
    int col;
    int xs;
    int os;
    int xWin = 0;
    int oWin = 0;
    char currentChar;
    int usedChars;
    int boardPos;

    // rows
    for(row = 0; row < 4; row++){
        xs = 0;
        os = 0;
        for(col = 0; col < 4; col++){
            currentChar = board[(row*4) + col];

            if(currentChar == 'X' || currentChar == 'T'){
                xs++;
            }
            if(currentChar == 'O' || currentChar == 'T'){
                os++;
            }
        }
        if(xs == 4){
            xWin = 1;
        }
        if(os == 4){
            oWin = 1;
        }
    }

    // cols
    for(col = 0; col < 4; col++){
        xs = 0;
        os = 0;
        for(row = 0; row < 4; row++){
            currentChar = board[(row*4) + col];

            if(currentChar == 'X' || currentChar == 'T'){
                xs++;
            }
            if(currentChar == 'O' || currentChar == 'T'){
                os++;
            }
        }
        if(xs == 4){
            xWin = 1;
        }
        if(os == 4){
            oWin = 1;
        }
    }

    // diagonal1
    xs = 0;
    os = 0;
    for(col = 0; col < 4; col++){
        row = col;
        currentChar = board[(row*4) + col];

        if(currentChar == 'X' || currentChar == 'T'){
            xs++;
        }
        if(currentChar == 'O' || currentChar == 'T'){
            os++;
        }
    }
    if(xs == 4){
        xWin = 1;
    }
    if(os == 4){
        oWin = 1;
    }

    // diagonal2
    xs = 0;
    os = 0;
    for(col = 3; col >= 0; col--){
        row = 3 - col;
        currentChar = board[(row*4) + col];

        if(currentChar == 'X' || currentChar == 'T'){
            xs++;
        }
        if(currentChar == 'O' || currentChar == 'T'){
            os++;
        }
    }
    if(xs == 4){
        xWin = 1;
    }
    if(os == 4){
        oWin = 1;
    }

    // check status
    if(xWin && oWin){
        return DRAW;
    } else if(xWin){
        return XWON;
    } else if(oWin){
        return OWON;
    } else {
        usedChars = 0;
        for(boardPos = 0; boardPos < 16; boardPos++){
            if(board[boardPos] != '.'){
                usedChars++;
            }
        }

        if(usedChars == 16){
            return DRAW;
        } else {
            return INCOMPLETE;
        }
    }
}

int main(void){
    int numInputs;
    int input;
    int charNum;
    char *board;
    char readVal;
    winner_e *winStatuses;

    scanf("%d", &numInputs);

    board = (char *) malloc(16 * sizeof(char));
    winStatuses = (winner_e *) malloc(numInputs * sizeof(winner_e));

    for(input = 0; input < numInputs; input++){
        charNum = 0;
        while(charNum < 16){
            scanf("%c", &readVal);

            if(readVal == 'X' || readVal == 'O' || readVal == '.' || readVal == 'T'){
                board[charNum] = readVal;
                charNum++;
            }
        }

        winStatuses[input] = findWinner(board);
    }

    // output statuses
    for(input = 0; input < numInputs; input++){
        printf("Case #%d: ", input + 1);

        if(winStatuses[input] == XWON){
            printf("X won\n");
        } else if(winStatuses[input] == OWON){
            printf("O won\n");
        } else if(winStatuses[input] == DRAW){
            printf("Draw\n");
        } else {
            printf("Game has not completed\n");
        }
    }

    return 1;
}
