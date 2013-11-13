#include<stdio.h>
char s[4][8];
bool end(){
    int i,j;
    for(i=0;i<4;i++)for(j=0;j<4;j++)if(s[i][j]=='.'){puts("Game has not completed");return 1;}
    return 0;
}
int main(){
    int T,cs=0,i,j;
    scanf("%d",&T);
    while(T--){
        for(i=0;i<4;i++)scanf("%s",s[i]);
        printf("Case #%d: ",++cs);
        for(i=0;i<4;i++){
            for(j=0;j<4;j++){
                if(s[i][j]!='X'&&s[i][j]!='T')break;
            }
            if(j==4){
                puts("X won");
                break;
            }
            for(j=0;j<4;j++){
                if(s[i][j]!='O'&&s[i][j]!='T')break;
            }
            if(j==4){
                puts("O won");
                break;
            }
        }
        if(i<4)continue;
        for(i=0;i<4;i++){
            for(j=0;j<4;j++){
                if(s[j][i]!='X'&&s[j][i]!='T')break;
            }
            if(j==4){
                puts("X won");
                break;
            }
            for(j=0;j<4;j++){
                if(s[j][i]!='O'&&s[j][i]!='T')break;
            }
            if(j==4){
                puts("O won");
                break;
            }
        }
        if(i<4)continue;
        for(i=0;i<4;i++){
            if(s[i][i]!='O'&&s[i][i]!='T')break;
        }
        if(i==4){
            puts("O won");
            continue;
        }
        for(i=0;i<4;i++){
            if(s[i][3-i]!='O'&&s[i][3-i]!='T')break;
        }
        if(i==4){
            puts("O won");
            continue;
        }
        for(i=0;i<4;i++){
            if(s[i][i]!='X'&&s[i][i]!='T')break;
        }
        if(i==4){
            puts("X won");
            continue;
        }
        for(i=0;i<4;i++){
            if(s[i][3-i]!='X'&&s[i][3-i]!='T')break;
        }
        if(i==4){
            puts("X won");
            continue;
        }
        if(end())continue;
        puts("Draw");
    }
}
