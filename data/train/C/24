#include<stdio.h>
#include<string.h>
int main ()
{
    FILE *fp1, *fp2;
	fp1=fopen("A.in", "r");
	fp2=fopen("ans1.txt", "w");
	int T;
	int fx, fo, d;
	fscanf (fp1, "%d", &T);
	int i, j, k;
	char l[4][4];
    for (i=1; i<(T+1); i++)
	{
        if (i>1) fprintf(fp2,"\n");
        fscanf(fp1, "%s\n", l[0]);
        fscanf(fp1, "%s\n", l[1]);
        fscanf(fp1, "%s\n", l[2]);
        fscanf(fp1, "%s\n\n", l[3]);
        d=0;
        for (j = 0; j<4; j++)
        {
            fx = 1; fo = 1;
            for (k = 0; k<4; k++)
            {
             if (l[j][k] != 'O' && l[j][k] != 'T') fo=0;
             if (l[j][k] != 'X' && l[j][k] != 'T') fx=0; 
            }
            if (fo==1) {fprintf(fp2, "Case #%d: O won", i); d=1; break;}
            if (fx==1) {fprintf(fp2, "Case #%d: X won", i); d=1; break;}
        }
        if(d==0)
        {
                for (k = 0; k<4; k++)
                {
                    fx = 1; fo = 1;
                    for (j = 0; j<4; j++)
                    {
                     if (l[j][k] != 'O' && l[j][k] != 'T') fo=0;
                     if (l[j][k] != 'X' && l[j][k] != 'T') fx=0; 
                    }
                    if (fo==1) {fprintf(fp2, "Case #%d: O won", i); d=1; break;}
                    if (fx==1) {fprintf(fp2, "Case #%d: X won", i); d=1; break;}
                }
        }
        if (d==0)
        {
                 fx = 1; fo = 1;
                 for (j=0; j<4; j++)
                 {
                     if (l[j][j] != 'O' && l[j][j] != 'T') fo=0;
                     if (l[j][j] != 'X' && l[j][j] != 'T') fx=0;
                 }
                 if (fo==1) {fprintf(fp2, "Case #%d: O won", i); d=1;}
                 if (fx==1) {fprintf(fp2, "Case #%d: X won", i); d=1;}
        }
        if (d==0)
        {
                 fx = 1; fo = 1;
                 for (j=0; j<4; j++)
                 {
                     if (l[j][3-j] != 'O' && l[j][3-j] != 'T') fo=0;
                     if (l[j][3-j] != 'X' && l[j][3-j] != 'T') fx=0;
                 }
                 if (fo==1) {fprintf(fp2, "Case #%d: O won", i); d=1;}
                 if (fx==1) {fprintf(fp2, "Case #%d: X won", i); d=1;}
        }
        if (d==0)
        {
            for (j = 0; j<4; j++)
            for (k = 0; k<4; k++)
            if (l[j][k]== '.' && d==0)
            {
                          fprintf(fp2, "Case #%d: Game has not completed", i);
                          d=1;
                          break;
            }
        }
        if (d==0) fprintf(fp2, "Case #%d: Draw", i);   
    }
	fclose(fp1);
	fclose(fp2);
}
