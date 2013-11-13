// @AUTHOR ajay yadav//
#include<stdio.h>
int main()
{
    int o1,x1,t1,dot1,o,x,t,dot,n,wino,winx,k=1,i,j,flag=0;
    char str[5][5],str1[10],c,c1;
    scanf("%d",&n);
    while(k<=n)
    {
        printf("Case #%d: ",k);
        for(i=0; i<4; i++)
        {
            scanf("%s",&str[i][0]);
        }
        //scanf("%s",str1);
        winx=wino=0;
        dot=0;
        flag=0;
        for(i=0; i<4; i++)
        {
            t1=x1=o1=t=x=o=0;
            for(j=0; j<4; j++)
            {
                c=str[i][j];
                c1=str[j][i];
                if(c=='T')
                    t++;
                if(c=='X')
                    x++;
                if(c=='O')
                    o++;
                if(c=='.')
                    dot++;
                if(c1=='T')
                    t1++;
                if(c1=='X')
                    x1++;
                if(c1=='O')
                    o1++;
            }
            if(t==1&&x==3)
                winx++;
            if(x==4)
                winx++;
            if(t1==1&&x1==3)
                winx++;
            if(x1==4)
                winx++;
            if(winx==1)
            {
                flag=1;
                break;

            }
            if(t==1&&o==3)
                wino++;

            if(o==4)
                wino++;

            if(t1==1&&o1==3)
                wino++;

            if(o1==4)
                wino++;

            if(wino==1)
            {
                flag=1;
                break;

            }

        }
        t1=x1=o1=t=x=o=0;
        for(i=0,j=3; i<4&&flag==0; i++,j--)
        {

            c=str[i][i];
            c1=str[j][i];

            if(c=='T')
                t++;
            if(c=='X')
                x++;
            if(c=='O')
                o++;
            if(c1=='T')
                t1++;
            if(c1=='X')
                x1++;
            if(c1=='O')
                o1++;
            if(t==1&&x==3)
                winx++;
            if(x==4)
                winx++;
            if(t1==1&&x1==3)
                winx++;
            if(x1==4)
                winx++;
            if(winx>0)
                break;
            if(t==1&&o==3)
                wino++;

            if(o==4)
                wino++;

            if(t1==1&&o1==3)
                wino++;

            if(o1==4)
                wino++;
            if(wino>0)
                break;
            //printf(" %d ",o);
        }
        // printf("%d %d  %d ",winx,wino,dot);
        if(winx==wino)
            if(dot==0)
                printf("Draw\n");
            else
                printf("Game has not completed\n");
        else if(winx>0)
            printf("X won\n");
        else if(wino>0)
            printf("O won\n");
        k++;
    }
    return 0;
}
