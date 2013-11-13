#include<stdio.h>

int T, TT;
char M[8][8];

int main() {
	scanf("%d\n", &TT);
	for(int T = 1; T <= TT; ++T) {
		bool xwin = false, owin = false, dot = false;
		for(int i = 0; i < 5; ++i)
			fgets(M[i], 8, stdin);
		for(int i = 0; i < 4; ++i)
			for(int j = 0; j < 4; ++j)
				if(M[i][j] == '.') dot = true;
		for(int i = 0; i < 4; ++i) {
			bool ex = false, eo = false, ed = false;
			for(int j = 0; j < 4; ++j)
				if(M[i][j] == 'X') ex = true;
				else if(M[i][j] == 'O') eo = true;
				else if(M[i][j] == '.') ed = true;
			if(!eo && !ed) xwin = true;
			if(!ex && !ed) owin = true;
		}
		for(int i = 0; i < 4; ++i) {
			bool ex = false, eo = false, ed = false;
			for(int j = 0; j < 4; ++j)
				if(M[j][i] == 'X') ex = true;
				else if(M[j][i] == 'O') eo = true;
				else if(M[j][i] == '.') ed = true;
			if(!eo && !ed) xwin = true;
			if(!ex && !ed) owin = true;
		}
		{
			bool ex = false, eo = false, ed = false;
			for(int j = 0; j < 4; ++j)
				if(M[j][j] == 'X') ex = true;
				else if(M[j][j] == 'O') eo = true;
				else if(M[j][j] == '.') ed = true;
			if(!eo && !ed) xwin = true;
			if(!ex && !ed) owin = true;
		}
		{
			bool ex = false, eo = false, ed = false;
			for(int j = 0; j < 4; ++j)
				if(M[j][3-j] == 'X') ex = true;
				else if(M[j][3-j] == 'O') eo = true;
				else if(M[j][3-j] == '.') ed = true;
			if(!eo && !ed) xwin = true;
			if(!ex && !ed) owin = true;
		}
		printf("Case #%d: ", T);
		if(xwin) puts("X won");
		else if(owin) puts("O won");
		else if(dot) puts("Game has not completed");
		else puts("Draw");
	}
}
