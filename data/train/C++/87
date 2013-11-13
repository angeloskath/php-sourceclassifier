#include <stdio.h>
#include <string.h>
#include <algorithm>

using namespace std;

char board[10][10];

int main(void)
{
	freopen("A-large.in","rt",stdin);
	freopen("A-large.out","wt",stdout);
	int T = 0;
	scanf("%d",&T);
	int TK = 0;
	while(T--)
	{
		printf("Case #%d: ",++TK);
		for(int i = 0;i < 4;i++) scanf("%s",board[i]);
		
		int xcnt = 0;
		int ocnt = 0;
		int tot = 0;
		for(int i = 0;i < 4;i++)
		{
			int tx = 0;
			int ty = 0;
			for(int j = 0;j < 4;j++)
			{
				if(board[i][j] != '.') tot++;
				if(board[i][j] == 'X') tx++;
				if(board[i][j] == 'O') ty++;
				if(board[i][j] == 'T') { tx++; ty++; }
			}
			xcnt = max(xcnt,tx);
			ocnt = max(ocnt,ty);
		}
		for(int j = 0;j < 4;j++)
		{
			int tx = 0;
			int ty = 0;
			for(int i = 0;i < 4;i++)
			{
				if(board[i][j] == 'X') tx++;
				if(board[i][j] == 'O') ty++;
				if(board[i][j] == 'T') { tx++; ty++; }
			}
			xcnt = max(xcnt,tx);
			ocnt = max(ocnt,ty);
		}
		int tx = 0;
		int ty = 0;
		for(int i = 0;i < 4;i++)
		{
			if(board[i][i] == 'X') tx++;
			if(board[i][i] == 'O') ty++;
			if(board[i][i] == 'T') { tx++; ty++; }
		}
		xcnt = max(xcnt,tx);
		ocnt = max(ocnt,ty);
		tx = 0;
		ty = 0;
		for(int i = 0;i < 4;i++)
		{
			if(board[i][3-i] == 'X') tx++;
			if(board[i][3-i] == 'O') ty++;
			if(board[i][3-i] == 'T') { tx++; ty++; }
		}
		xcnt = max(xcnt,tx);
		ocnt = max(ocnt,ty);
		
		if(xcnt == 4) puts("X won");
		else if(ocnt == 4) puts("O won");
		else if(tot < 16) puts("Game has not completed");
		else puts("Draw");
	}
	return 0;
}
