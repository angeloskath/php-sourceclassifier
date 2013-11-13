#include <stdio.h>
char s[5][5];

int main(){
	int t,i,j,k,f,f1;
	scanf("%d",&t);
	for(k=1;k<=t;k++){
		for(i=0;i<4;i++)scanf("%s",s[i]);
		f1=1;
		for(i=0;i<4;i++){
			f=3;
			for(j=0;j<4;j++){
				if(s[i][j]=='T')f&=3;
				else if(s[i][j]=='O')f&=2;
				else if(s[i][j]=='X')f&=1;
				else if(s[i][j]=='.'){f=0;f1=0;}
			}
			if(f)goto END;
		}
		for(j=0;j<4;j++){
			f=3;
			for(i=0;i<4;i++){
				if(s[i][j]=='T')f&=3;
				else if(s[i][j]=='O')f&=2;
				else if(s[i][j]=='X')f&=1;
				else if(s[i][j]=='.'){f=0;f1=0;}
			}
			if(f)goto END;
		}
		f=3;
		for(i=0;i<4;i++){
			if(s[i][i]=='T')f&=3;
			else if(s[i][i]=='O')f&=2;
			else if(s[i][i]=='X')f&=1;
			else if(s[i][i]=='.'){f=0;f1=0;}
		}
		if(f)goto END;
		f=3;
		for(i=0;i<4;i++){
			if(s[i][3-i]=='T')f&=3;
			else if(s[i][3-i]=='O')f&=2;
			else if(s[i][3-i]=='X')f&=1;
			else if(s[i][3-i]=='.'){f=0;f1=0;}
		}
		END:
		printf("Case #%d: ",k);
		if(f==2)puts("O won");
		else if(f==1)puts("X won");
		else if(f1==1)puts("Draw");
		else puts("Game has not completed");
	}
	return 0;
}