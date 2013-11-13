
#include<cstdio>
#include<iostream>
#include<vector>
#include<map>
#include<set>
#include<stack>
#include<queue>
#include<algorithm>
#include<cmath>
#include<string>
#include<cstdlib>
#include<climits>
#include<cstring>
using namespace std;

#define CLR(a,x) memset(a,x,sizeof(a))
#define PB push_back
#define INF 1000000000
#define MOD 1000000007
#define MP make_pair
#define tr(container , it) for(typeof(container.begin()) it=container.begin() ; it!=container.end() ; it++)
#define FOR(i,a,b) for(i=a;i<b;i++)
#define REP(i,a) FOR(i,0,a)
#define LL long long
#define VI vector < int >
#define PII pair < int , int >


void precompute(void)
{
}
char row[128][128];

bool empty()
{
	for(int i=0;i<4;i++)	
		for(int j=0;j<4;j++)
			if(row[i][j]=='.')
				return true;
	return false;
}
bool won(char x)
{
	int j,i;
	for(i=0;i<4;i++)
	{
		for(j=0;j<4;j++)
		{
			if(row[i][j]!=x&&row[i][j]!='T')
				break;
		}
		if(j==4)
			return true;
		for(j=0;j<4;j++)
		{
			if(row[j][i]!=x&&row[j][i]!='T')
				break;
		}
		if(j==4)
			return true;
	}
	for(i=0;i<4;i++)
		if(row[i][i]!=x&&row[i][i]!='T')
			break;
	if(i==4)
		return true;
	for(i=0;i<4;i++)
		if(row[i][3-i]!=x&&row[i][3-i]!='T')
			break;
	if(i==4)
		return true;
	return false;
}

int main()
{
	int t,kase=1;
	precompute();
	while(scanf("%d",&t)!=EOF)
	{
		while(t--)
		{
			for(int i=0;i<4;i++)
				scanf("%s",row[i]);
			printf("Case #%d: ",kase);
			if(won('X'))
				printf("X won\n");
			else if(won('O'))
				printf("O won\n");
			else if(empty())
				printf("Game has not completed\n");
			else
				printf("Draw\n");
			kase++;
		}
	}
	return 0;
}
