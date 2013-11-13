#include <stdio.h>
int check(int idx,int x,int o){
    //printf("idx %d %d %d\n",idx,x,o);
    if(x==4){
        printf("Case #%d: X won\n",idx);
        return 1; 
    }
    else if(o==4){
        printf("Case #%d: O won\n",idx);
        return 1; 
    }    
    return 0;
}
int check_dia(char board[][10],int idx){
    int i,j,x=0,o=0;
    for(i=0;i<4;i++){
        if(board[i][i]=='X' || board[i][i]=='T' )
            x++;
        
        if(board[i][i]=='O' || board[i][i]=='T' )
            o++;
    }
    if( check(idx,x,o))
        return 1;
x=o=0;
    for(i=0,j=3;i<4;i++,j--){
        //printf("%c\n",board[i][j]);
        if(board[i][j]=='X' || board[i][j]=='T' )
            x++;
        
        if(board[i][j]=='O' || board[i][j]=='T' )
            o++;
    }
    
    if( check(idx,x,o))
        return 1;

}
int main(int argc,char **argv){
    int n=0,ii,i,j,dotcnt;
    int x,o,tx,ty;
    char board[10][10]={0};

    scanf("%d",&n);
    for(ii=1;ii<=n;ii++){
        x=o=dotcnt=0;
        
        tx=ty=-1;
        for(i=0;i<4;i++){
            scanf("%s",board[i]);
            //printf("%s\n",board[i]);
        }
        
        
        for(i=0;i<4;i++){    
            x=o=0;
            for(j=0;j<4;j++){
               if( board[i][j] == 'X') x++;
               else if( board[i][j] == 'O') o++;
               else if( board[i][j] == 'T') o++,x++;
               else if( board[i][j] == '.') dotcnt++;
            }
            if(x==4 || o==4) break;
        }

        if(check(ii,x,o)) continue;
        for(i=0;i<4;i++){    
            x=o=0;
            for(j=0;j<4;j++){
               if( board[j][i] == 'X') x++;
               else if( board[j][i] == 'O') o++;
               else if( board[j][i] == 'T') o++,x++;
               else if( board[j][i] == '.') dotcnt++;
            }
            if(x==4 || o==4) break;
        }

        if(check(ii,x,o)) continue;
        if(check_dia(board,ii)) continue; 
        if(dotcnt>0)
            printf("Case #%d: Game has not completed\n",ii);
        else
            printf("Case #%d: Draw\n",ii);
    }
}
