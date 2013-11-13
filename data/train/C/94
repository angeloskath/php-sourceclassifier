#include <stdio.h>
#include <stdlib.h>


int pos(char TT[4][4])
{
int i,j;
int ret = 0;
int fl =0;
for(i=0;i<4;i++)
{
    fl = 1;
    for(j=0;j<4;j++)
    {
        if(TT[i][j]!='X' && TT[i][j] != 'T' )
        fl = 0;
    }
    if(fl == 1)
    return 2;
}
for(i=0;i<4;i++)
{
    fl = 1;
    for(j=0;j<4;j++)
    {
        if(TT[j][i]!='X' && TT[j][i] != 'T' )
        fl = 0;
    }
    if(fl == 1)
    return 2;
}

if ( (TT[0][0] == 'X' || TT[0][0] == 'T')
        && (TT[1][1] == 'X' || TT[1][1] == 'T')
        && (TT[2][2] == 'X' || TT[2][2] == 'T')
        && (TT[3][3] == 'X' || TT[3][3] == 'T') )
        return 2;
if ( (TT[0][3] == 'X' || TT[0][3] == 'T')
        && (TT[1][2] == 'X' || TT[1][2] == 'T')
        && (TT[2][1] == 'X' || TT[2][1] == 'T')
        && (TT[3][0] == 'X' || TT[3][0] == 'T') )
        return 2;

for(i=0;i<4;i++)
{
    fl = 1;
    for(j=0;j<4;j++)
    {
        if(TT[i][j]!='O' && TT[i][j] != 'T' )
        fl = 0;
    }
    if(fl == 1)
    return 3;
}
for(i=0;i<4;i++)
{
    fl = 1;
    for(j=0;j<4;j++)
    {
        if(TT[j][i]!='O' && TT[j][i] != 'T' )
        fl = 0;
    }
    if(fl == 1)
    return 3;
}

if ( (TT[0][0] == 'O' || TT[0][0] == 'T')
        && (TT[1][1] == 'O' || TT[1][1] == 'T')
        && (TT[2][2] == 'O' || TT[2][2] == 'T')
        && (TT[3][3] == 'O' || TT[3][3] == 'T') )
        return 3;
if ( (TT[0][3] == 'O' || TT[0][3] == 'T')
        && (TT[1][2] == 'O' || TT[1][2] == 'T')
        && (TT[2][1] == 'O' || TT[2][1] == 'T')
        && (TT[3][0] == 'O' || TT[3][0] == 'T') )
        return 3;

for(i=0;i<4;i++)
{
    for(j=0;j<4;j++)
    {
        if(TT[i][j] == '.')
        return 0;
    }
}
return 1;
}

void solve(int T,FILE *fp1)
{
    int i,j,i1,j1;
    FILE *fp2;
    char TT[4][4],cc;
    fp2 = fopen("p.out","w");


//printf("$$ %c",cc);
    for(i=0;i<T;i++)
    {
       // if(i == 0)
       while( (cc = fgetc(fp1)) != '\n');
        printf("**%d\n",i);
        fprintf(fp2,"Case #%d: ",i+1);
        for(j=0;j<4;j++)
        {
        TT[j][0]=fgetc(fp1);
        TT[j][1]=fgetc(fp1);
        TT[j][2]=fgetc(fp1);
        TT[j][3]=fgetc(fp1);
        cc=fgetc(fp1);
       // for(i1=0;i1<4;i1++)
        //printf("%c - j %d",TT[j][i1],j);
        //printf("\n");
        }

        for(i1=0;i1<4;i1++)
        {
            printf("####");
            for(j1=0;j1<4;j1++)
            printf("%c",TT[i1][j1]);
            printf("\n");
        }
        switch(pos(TT))
        {
            case 0:
            fprintf(fp2,"Game has not completed\n");
            break;
            case 1:
            fprintf(fp2,"Draw\n");
            break;
            case 2:
            fprintf(fp2,"X won\n");
            break;
            case 3:
            fprintf(fp2,"O won\n");
            break;

        }
        //fscanf(fp1,"%s",TT[0]);
        //printf("%d\n",i);
        //printf("H = %d, W = %d\n",H,W);

    }
}




int main()
{
    FILE *fp1;
    int T = 0;
    fp1 = fopen("A-small-practice.in","r");
    fscanf(fp1,"%d",&T);
    solve(T,fp1);
    //printf("T = %d\n",T);
    return 0;
}

