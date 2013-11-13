#include<stdio.h>

 
int main()
 
{
        int t,test,dots,nx,no,nt,j,i,flag;char mat[4][4],waste;
        scanf("%d",&test);
        for(t=1;t<=test;t++)
        {       flag=0; 
                dots=0; 
                for(i=0;i<4;i++)
                {
                        scanf("%s",mat[i]);
                }
 
                
                for(i=0;i<4;i++)
                {       nx=no=nt=0;
                        for(j=0;j<4;j++)
                        {
                                switch(mat[i][j])
                                {
                                        case 'X': nx++;break;
                                        case 'O': no++; break;
                                        case '.': dots++; break;
                                        case 'T' : nt++; break;
                                }
                        }
                        if(nx+nt==4) {printf("Case #%d: X won\n",t); flag=1; break;}
                        if(no+nt==4) {printf("Case #%d: O won\n",t); flag=1; break;}
                        
                }
              
                if(flag==0)
                {
                        for(i=0;i<4;i++)
                        {       nx=no=nt=0;
                                for(j=0;j<4;j++)
                                {
                                        switch(mat[j][i])
                                        {
                                                case 'X': nx++;break;
                                                case 'O': no++; break;
                                                case '.': dots++; break;
                                                case 'T' : nt++; break;
                                        }
                                }
                                if(nx+nt==4) {printf("Case #%d: X won\n",t); flag=1; break;}
                                if(no+nt==4) {printf("Case #%d: O won\n",t); flag=1; break;}
                        
                        }
 
                }
               
                if(flag==0)
                {
                        nx=no=nt=0;
                        for(i=0;i<4;i++)
                        {       
                                
                                switch(mat[i][i])
                                {
                                        case 'X': nx++;break;
                                        case 'O': no++; break;
                                        case '.': dots++; break; 
                                        case 'T' : nt++; break;
                                }
                        }       
                        if(nx+nt==4) {printf("Case #%d: X won\n",t); flag=1;}
                        else if(no+nt==4) {printf("Case #%d: O won\n",t); flag=1;}
                        
                }
            
                if(flag==0)
                {
                        nx=no=nt=0;
                        for(i=0;i<4;i++)
                        {       
                                
                                switch(mat[i][3-i])
                                {
                                        case 'X': nx++;break;
                                        case 'O': no++; break;
                                        case '.': dots++; break; 
                                        case 'T' : nt++; break;
                                }
                        }       
                        if(nx+nt==4) {printf("Case #%d: X won\n",t); flag=1;}
                        else if (no+nt==4) {printf("Case #%d: O won\n",t); flag=1;}
                        
                }
 
                if(flag==0)
                {
 
                        if(dots==0) printf("Case #%d: Draw\n",t);
                        else printf("Case #%d: Game has not completed\n",t);
                }       
 
                scanf("%c",&waste);
 
        }
 
        
return 0;
 
}
