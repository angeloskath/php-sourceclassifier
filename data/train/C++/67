#include <iostream>
using namespace std;
char input[4][5];
int get(char a, char b, char c, char d) {
    //printf("%c%c%c%c\n",a,b,c,d);
    bool xwin = true, owin = true;
    if (a=='.' || a=='O') xwin=false;
    if (b=='.' || b=='O') xwin=false;
    if (c=='.' || c=='O') xwin=false;
    if (d=='.' || d=='O') xwin=false;
    if (a=='.' || a=='X') owin=false;
    if (b=='.' || b=='X') owin=false;
    if (c=='.' || c=='X') owin=false;
    if (d=='.' || d=='X') owin=false;    
    if (xwin) return 1;
    if (owin) return 2;
    return 0;
}
int main() {
    int T; scanf("%d",&T); for (int t=1; t<=T; t++) {
        bool isdot = false;
        for (int i=0; i<4; i++) {
            scanf("%s",input[i]);   
            for (int j=0; j<4; j++) {
                if (input[i][j]=='.') isdot=true;
            }
        }
        
        int winner = 0;
        
        for (int i=0; i<4; i++) {
            winner >?= get(input[i][0],input[i][1],input[i][2],input[i][3]);
            winner >?= get(input[0][i],input[1][i],input[2][i],input[3][i]);  
        }
        winner >?= get(input[0][0],input[1][1],input[2][2],input[3][3]);
        winner >?= get(input[0][3],input[1][2],input[2][1],input[3][0]);
        
        printf("Case #%d: ",t);
        if (winner==1) printf("X won\n");
        else if (winner==2) printf("O won\n");
        else if (isdot) printf("Game has not completed\n");
        else printf("Draw\n");
    }
}
