#include <stdio.h>

char dat[5][5];

int main()
{
	int T;
	scanf("%d",&T);
	for(int testcase = 0; testcase < T; testcase++) {
		for(int i = 0; i < 4;i ++) {
			scanf("%s", dat[i]);
		}
		int blank = 0;
		int xwin = 0, owin = 0;
		for(int i = 0; i < 4; i++) {
			{
				int xcheck = 1, ocheck = 1;
				for(int j = 0; j < 4; j++) {
					if (dat[i][j] == 'T') continue;
					if (dat[i][j] != 'O') ocheck = 0;
					if (dat[i][j] != 'X') xcheck = 0;
					if (dat[i][j] == '.') blank = 1;
				}
				if (xcheck) xwin = 1;
				if (ocheck) owin = 1;
			}
			{
				int xcheck = 1, ocheck = 1;
				for(int j = 0; j < 4; j++) {
					if (dat[j][i] == 'T') continue;
					if (dat[j][i] != 'O') ocheck = 0;
					if (dat[j][i] != 'X') xcheck = 0;
					if (dat[j][i] == '.') blank = 1;
				}
				if (xcheck) xwin = 1;
				if (ocheck) owin = 1;
			}
		}
		{
			int xcheck = 1, ocheck = 1;
			for(int j = 0; j < 4; j++) {
				if (dat[j][j] == 'T') continue;
				if (dat[j][j] != 'O') ocheck = 0;
				if (dat[j][j] != 'X') xcheck = 0;
				if (dat[j][j] == '.') blank = 1;
			}
			if (xcheck) xwin = 1;
			if (ocheck) owin = 1;
		}
		{
			int xcheck = 1, ocheck = 1;
			for(int j = 0; j < 4; j++) {
				if (dat[j][3-j] == 'T') continue;
				if (dat[j][3-j] != 'O') ocheck = 0;
				if (dat[j][3-j] != 'X') xcheck = 0;
				if (dat[j][3-j] == '.') blank = 1;
			}
			if (xcheck) xwin = 1;
			if (ocheck) owin = 1;
		}
		printf("Case #%d: ",testcase+1);
		if (xwin) printf("X won\n");
		else if (owin) printf("O won\n");
		else if (blank) printf("Game has not completed\n");
		else printf("Draw\n");
	}
	return 0;
}
