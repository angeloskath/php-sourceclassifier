#include<stdio.h>
#include<math.h>
       
int main()
{
   //freopen("1.txt","r",stdin);
   // freopen("out.txt","w",stdout);
    int t,i,j,k; 
    scanf("%d",&t);
    k=1;
    while(k<=t)
    { 
               char m[5][4]={0},f=1,ones[4][4]={0},zeros[4][4]={0};
              for(i=0;i<4;i++){scanf("%s",m[i]);//printf("%s\n",m[i]);
              for(j=0;j<4;j++){
              if(m[i][j]=='X')ones[i][j]=1;
              else if (m[i][j]=='O')zeros[i][j]=1;
              else if (m[i][j]=='T')zeros[i][j]=ones[i][j]=1;
               if(f&&m[i][j]=='.')f=0;}}
              for(i=0;i<4;i++){
                               if((ones[i][0]&&ones[i][1]&&ones[i][2]&&ones[i][3])||(ones[0][i]&&ones[1][i]&&ones[2][i]&&ones[3][i]))
                               {printf("Case #%d: X won\n",k);f=2;break;}
                               else if ((zeros[i][0]&&zeros[i][1]&&zeros[i][2]&&zeros[i][3])||(zeros[0][i]&&zeros[1][i]&&zeros[2][i]&&zeros[3][i]))
                               {printf("Case #%d: O won\n",k);f=2;break;}
                               else if((ones[0][0]&&ones[1][1]&&ones[2][2]&&ones[3][3])||(ones[0][3]&&ones[1][2]&&ones[2][1]&&ones[3][0]))
                               {printf("Case #%d: X won\n",k);f=2;break;}
                               else if ((zeros[0][0]&&zeros[1][1]&&zeros[2][2]&&zeros[3][3])||(zeros[0][3]&&zeros[1][2]&&zeros[2][1]&&zeros[3][0]))
                               {printf("Case #%d: O won\n",k);f=2;break;}
                               }
                              
                 if(f==1)printf("Case #%d: Draw\n",k);
                 else if(f==0) printf("Case #%d: Game has not completed\n",k);           
                  k++;  }
     return 0;
    }
