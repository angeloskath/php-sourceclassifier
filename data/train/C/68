#include<stdio.h>
#include<stdlib.h>
#include<string.h>

int main(){
	char array[4][4];
	int cases;
	int i,j,k;
	char t;
	scanf("%d",&cases);
	for(i=1;i<=cases;i++){
		if(i>=2)scanf("%c",&t);
		for(j=0;j<4;j++){
			scanf("%c",&t);
			for(k=0;k<4;k++){
				scanf("%c",&array[j][k]);
				//printf("%c",array[j][k]);
			}
			//printf("\n");
		}
		//rows
		int x = 0,o = 0,dots=0;
		int x_pos,o_pos;
		for(j=0;j<4;j++){
			x_pos=1;o_pos=1;
			for(k=0;k<4;k++){
				if(array[j][k]=='.'){dots=1;x_pos=0;o_pos=0;break;}
				if(array[j][k]=='O')x_pos=0;
				if(array[j][k]=='X')o_pos=0;	
			}
			if(x_pos==1)x=1;
			if(o_pos==1)o=1;
			if(x==1 || o==1)break;
		}

		//cols
		for(k=0;k<4;k++){
                        x_pos=1;o_pos=1;
                        for(j=0;j<4;j++){
                                if(array[j][k]=='.'){dots=1;x_pos=0;o_pos=0;break;}
                                if(array[j][k]=='O')x_pos=0;
                                if(array[j][k]=='X')o_pos=0;
                        }
                        if(x_pos==1)x=1;
                        if(o_pos==1)o=1;
                        if(x==1 || o==1)break;
                }

		//diags
		x_pos=1;o_pos=1;
		for(j=0;j<4;j++){
                        if(array[j][j]=='.'){dots=1;x_pos=0;o_pos=0;break;}
                        if(array[j][j]=='O')x_pos=0;
                        if(array[j][j]=='X')o_pos=0;
		}		
		if(x_pos==1)x=1;
                if(o_pos==1)o=1;

		x_pos=1;o_pos=1;
                for(j=0;j<4;j++){
                        if(array[j][3-j]=='.'){dots=1;x_pos=0;o_pos=0;break;}
                        if(array[j][3-j]=='O')x_pos=0;
                        if(array[j][3-j]=='X')o_pos=0;
                }
                if(x_pos==1)x=1;
                if(o_pos==1)o=1;

		if(x==1){
			printf("Case #%d: X won\n",i);	
		}
		else if(o==1){
			printf("Case #%d: O won\n",i);
		}
		else if(dots==1){
			printf("Case #%d: Game has not completed\n",i);
		}
		else{
			printf("Case #%d: Draw\n",i);
		}
	}
return 0;	
}
