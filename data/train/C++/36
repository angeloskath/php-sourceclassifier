#include <vector>
#include <list>
#include <map>
#include <set>
#include <deque>
#include <stack>
#include <queue>
#include <algorithm>
#include <sstream>
#include <iostream>
#include <iomanip>
#include <cstdio>
#include <cmath>
#include <cstdlib>
#include <memory.h>
#include <ctime>
 
using namespace std;
 
#define ABS(a) ((a>0)?a:-(a))
#define MIN(a,b) ((a<b)?(a):(b))
#define MAX(a,b) ((a<b)?(b):(a))
#define FOR(i,a,n) for (int i=(a);i<(n);++i)
#define FI(i,n) for (int i=0; i<(n); ++i)
#define pnt pair <int, int>
#define mp make_pair
#define PI 3.14159265358979
#define MEMS(a,b) memset(a,b,sizeof(a))
#define LL long long
#define U unsigned

int check(string s)
{
	int iso=0,isx=0;
	FOR(i,0,s.size())
	{
		if (s[i]=='.')
			return 0;
		if (s[i]=='O')
			iso=1;
		if (s[i]=='X')
			isx=1;
	}
	if ((iso) && (!isx))
		return 2;
	if ((isx) && (!iso))
		return 1;
	return 0;
}
string s1[5];
int main()
{
#ifdef Fcdkbear
    freopen("in.txt","r",stdin);
    freopen("out.txt","w",stdout);
    double beg=clock();
#else
	freopen("in.txt","r",stdin);
    freopen("out.txt","w",stdout);
#endif

	int t;
	scanf("%d",&t);
	FOR(it,0,t)
	{
		printf("Case #%d: ",it+1);
		FOR(i,0,4)
			cin>>s1[i];
		bool isempty=false;
		FOR(i,0,4)
			FOR(j,0,4)
				if (s1[i][j]=='.')
					isempty=true;
		bool isx=0,iso=0;
		FOR(i,0,4)
		{
			int v=check(s1[i]);
			if (v==1)
				isx=1;
			if (v==2)
				iso=1;
		}
		FOR(j,0,4)
		{
			string s="";
			FOR(i,0,4)
				s+=s1[i][j];
			int v=check(s);
			if (v==1)
				isx=1;
			if (v==2)
				iso=1;
		}
		string s="";
		FOR(i,0,4)
		{
			s+=s1[i][i];
		}
		int v=check(s);
		if (v==1)
			isx=1;
		if (v==2)
			iso=1;
		s="";
		FOR(i,0,4)
		{
			s+=s1[i][3-i];
		}
		v=check(s);
		if (v==1)
			isx=1;
		if (v==2)
			iso=1;
		if (isx)
			printf("X won\n");
		else
			if (iso)
				printf("O won\n");
			else
				if (isempty)
					printf("Game has not completed\n");
				else
					printf("Draw\n");
	}
	
#ifdef Fcdkbear
    double end=clock();
    fprintf(stderr,"*** Total time = %.3lf ***\n",(end-beg)/CLOCKS_PER_SEC);
#endif
    return 0;
}