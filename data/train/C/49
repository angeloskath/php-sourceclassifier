#include <stdio.h>

int main(void) {
	int T,nowCase;
	char input[4][8];
	scanf("%d",&T);
	for(nowCase=1;nowCase<=T;nowCase++) {
		int owin=0,xwin=0,brankExists=0;
		int i,j;
		int ok_o,ok_x;
		for(i=0;i<4;i++)scanf("%s",input[i]);
		for(i=0;i<4;i++) {
			for(j=0,ok_o=ok_x=1;j<4;j++) {
				if(input[i][j]=='.'){ok_o=ok_x=0;brankExists=1;}
				else if(input[i][j]=='X')ok_o=0;
				else if(input[i][j]=='O')ok_x=0;
			}
			if(ok_o)owin=1;
			if(ok_x)xwin=1;
		}
		for(i=0;i<4;i++) {
			for(j=0,ok_o=ok_x=1;j<4;j++) {
				if(input[j][i]=='.'){ok_o=ok_x=0;brankExists=1;}
				else if(input[j][i]=='X')ok_o=0;
				else if(input[j][i]=='O')ok_x=0;
			}
			if(ok_o)owin=1;
			if(ok_x)xwin=1;
		}
		for(i=0,ok_o=ok_x=1;i<4;i++) {
			if(input[i][i]=='.'){ok_o=ok_x=0;brankExists=1;}
			else if(input[i][i]=='X')ok_o=0;
			else if(input[i][i]=='O')ok_x=0;
		}
		if(ok_o)owin=1;
		if(ok_x)xwin=1;
		for(i=0,ok_o=ok_x=1;i<4;i++) {
			if(input[i][3-i]=='.'){ok_o=ok_x=0;brankExists=1;}
			else if(input[i][3-i]=='X')ok_o=0;
			else if(input[i][3-i]=='O')ok_x=0;
		}
		if(ok_o)owin=1;
		if(ok_x)xwin=1;
		printf("Case #%d: ",nowCase);
		if(owin && xwin) {
			fprintf(stderr,"Error: both won!\n");
			return 1;
		}
		if(owin)puts("O won");
		else if(xwin)puts("X won");
		else if(brankExists)puts("Game has not completed");
		else puts("Draw");
	}
	return 0;
}
