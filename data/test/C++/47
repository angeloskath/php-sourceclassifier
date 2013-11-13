#include<iostream>
#include<cassert>
#include<cstdlib>
#include<cstring>
#include<utility>
#include<sstream>
#include<algorithm>
#include<cstdio>
#include<vector>
#include<string>
#include<cctype>
#include<queue>
#include<deque>
#include<stack>
#include<cmath>
#include<ctime>
#include<list>
#include<map>
#include<set>
#define pi (acos(-1.0))
#define Abs(a) (((a)<0) ? (-(a)) :(a) )
#define rep(i,n) for((i)=0;(i)<(n);(i)++)
#define Rep(i,n) for(int i=0;i<(n);i++)
#define Rrep(i,n) for(int i=n-1;i>=0;i--)
#define rrep(i,n) for((i)=(n);(i)>=0;(i)--)
#define Pii pair<int,int>
#define PB push_back
#define Size(x) ((int)(x.size()))
using namespace std;
typedef long long mint;
typedef unsigned long long umint;
char iswin(char a,char b,char c,char d)
{
    if(a=='.'||b=='.'||c=='.'||d=='.')
        return '.';
    map<char,int>m;
    m['X']=0;
    m['O']=0;
    m['T']=0;
    m[a]++;
    m[b]++;
    m[c]++;
    m[d]++;
    if(m['X']+m['T']==4)
        return 'X';
    if(m['O']+m['T']==4)
        return 'O';
    return '.';
}
int main()
{
	freopen("A-large.in","r",stdin);
	freopen("Aout.txt","w",stdout);
	int t,T,i,j;
	scanf("%d",&T);
	char s[4][5],ch;
	for(t=1;t<=T;t++)
	{
	    rep(i,4)
            cin>>s[i];
        rep(i,4)
        {
            ch=iswin(s[i][0],s[i][1],s[i][2],s[i][3]);
            if(ch=='X'||ch=='O')
                break;
            ch=iswin(s[0][i],s[1][i],s[2][i],s[3][i]);
            if(ch=='X'||ch=='O')
                break;
        }
        if(ch=='X'||ch=='O')
        {
            printf("Case #%d: %c won\n",t,ch);
            continue;
        }
        ch=iswin(s[0][0],s[1][1],s[2][2],s[3][3]);
        if(ch=='X'||ch=='O')
        {
            printf("Case #%d: %c won\n",t,ch);
            continue;
        }
        ch=iswin(s[0][3],s[1][2],s[2][1],s[3][0]);
        if(ch=='X'||ch=='O')
        {
            printf("Case #%d: %c won\n",t,ch);
            continue;
        }
        rep(i,4)
        {
            rep(j,4)
                if(s[i][j]=='.')
                    break;
            if(j!=4)
                break;
        }
        if(i==4&&j==4)
             printf("Case #%d: Draw\n",t);
        else
            printf("Case #%d: Game has not completed\n",t);
	}
	return 0;
}

