#include<iostream>
#include<cstdio>
#include<cstring>
#include<cstdlib>
#include<string>
#include<algorithm>
#include<fstream>
#include<sstream>
#include<vector>
#include<map>
#include<set>
#include<queue>
#include<deque>
#include<cassert>
#include<complex>
using namespace std;

char S[10][10];
const int N = 4;

bool Calc(char c)
{
	for(int i=0;i<N;++i)
		for(int j=0;j<N;++j)
			for(int di=-1;di<2;++di)
			for(int dj=-1;dj<2;++dj)
			if(di||dj) {
				bool ok=true;
				for(int k=0;k<4;++k)
				{
					int x = i + di * k, y = j + dj * k;
					if(x >= 0 && x < N && y >= 0 && y < N
						&& (S[x][y]==c || S[x][y] == 'T'))
						continue;
					else {
						ok = false;
						break;
					}
				}
				if(ok) return true;
			}
	return false;
}

int main()
{
	freopen("A.in","r",stdin);
	freopen("A.out","w",stdout);
	int test;
	scanf("%d", &test);
	
	for(int no=1;no<=test;++no)
	{
		bool avail=false;
		for(int i=0;i<N;++i) {
			scanf("%s",S[i]);
			for(int j=0;j<N;++j)
				if(S[i][j]=='.')avail=true;
		}
		bool winO = Calc('O');
		bool winX = Calc('X');
		printf("Case #%d: ", no);
		if(winO) puts("O won");
		else
		if(winX) puts("X won");
		else
		if(avail) puts("Game has not completed");
		else
			puts("Draw");
	}
}
