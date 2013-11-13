#include<iostream>
#include<cstdio>
#include<cstdlib>
#include<memory.h>
#include<cmath>
#include<ctime>
#include<algorithm>
#include<string>
#include<vector>
#include<map>
#include<set>
#define abs(x) ((x)<0?-(x):(x))
#define _max(x,y) ((x)<(y)?(y):(x))
#define _min(x,y) ((x)<(y)?(x):(y))
#define sqr(x) ((x)*(x))
#define getar(m,n) for(int _=0;_<n;++_) cin>>(m)[_];
#define forc(it,c) for(typeof((c).begin()) it=(c).begin(); it!=(c).end(); it++)
#define fill(m,v) memset(m,v,sizeof(m))
#define random(x) ((rand()<<15^rand())%(x))
#define y1 stupid_cmath
#define y0 stupid_cmath_make_me_cry
#define tm stupid_ctime
typedef long long ll;
using namespace std;

int n,m;
int i,j,k,l;
string s[5];

int main(){
	freopen("input.txt","r",stdin); freopen("output.txt","w",stdout);
	
	int tn,ti;
	scanf("%d",&tn);
	for(ti=1;ti<=tn;++ti){
		getar(s,4);
		n=4;
		int c1=0, c2=0, e=0, c;
		for(i=0;i<n;++i) for(j=0;j<n;++j) e+=s[i][j]=='.';
		
		for(i=0;i<n;++i){
			c=1;
			for(j=0;j<n;++j) c&=(s[i][j]=='X' || s[i][j]=='T');
			c1+=c;
			c=1;
			for(j=0;j<n;++j) c&=(s[i][j]=='O' || s[i][j]=='T');
			c2+=c;
		}
		
		
		for(i=0;i<n;++i){
			c=1;
			for(j=0;j<n;++j) c&=(s[j][i]=='X' || s[j][i]=='T');
			c1+=c;
			c=1;
			for(j=0;j<n;++j) c&=(s[j][i]=='O' || s[j][i]=='T');
			c2+=c;
		}
		
		c=1;
		for(i=0;i<n;++i) c&=(s[i][i]=='X' || s[i][i]=='T');
		c1+=c;
		
		c=1;
		for(i=0;i<n;++i) c&=(s[i][i]=='O' || s[i][i]=='T');
		c2+=c;
		
		
		c=1;
		for(i=0;i<n;++i) c&=(s[i][n-i-1]=='X' || s[i][n-i-1]=='T');
		c1+=c;
		
		c=1;
		for(i=0;i<n;++i) c&=(s[i][n-i-1]=='O' || s[i][n-i-1]=='T');
		c2+=c;
		
		
		
		string res="?";
		if(c1==0 && c2==0) res= e ? "Game has not completed" : "Draw"; else
		if(c1>c2) res="X won"; else
		if(c1<c2) res="O won"; else
		++*(int*)0;
		
		cout<<"Case #"<<ti<<": "<<(res)<<endl;
	}
		
	
	
	return 0;
}
