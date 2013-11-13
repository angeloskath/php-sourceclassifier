#include <algorithm>
#include <bitset>
#include <cassert>
#include <cctype>
#include <climits>
#include <cmath>
#include <complex>
#include <cstdio>
#include <cstdlib>
#include <cstring>
#include <ctime>
#include <deque>
#include <fstream>
#include <iomanip>
#include <iostream>
#include <map>
#include <numeric>
#include <queue>
#include <set>
#include <sstream>
#include <stack>
#include <string>
#include <valarray>
#include <vector>

#define EPS 1e-9
#define INF 1070000000LL
#define MOD 1000000007LL
#define fir first
#define foreach(it,X) for(__typeof((X).begin()) it=(X).begin();it!=(X).end();it++)
#define ite iterator
#define mp make_pair
#define rep(i,n) rep2(i,0,n)
#define rep2(i,m,n) for(int i=m;i<(n);i++)
#define pb push_back
#define sec second
#define sz(x) ((int)x.size())

using namespace std;

struct timer{
	time_t start;
	timer(){start=clock();}
	~timer(){cerr<<1.*(clock()-start)/CLOCKS_PER_SEC<<" secs"<<endl;}
};

typedef istringstream iss;
typedef long long ll;
typedef pair<int,int> pi;
typedef stringstream sst;
typedef vector<int> vi;

char c[5][5];

int main(){
	int T;
	cin>>T;
	time_t start=clock(),pre=start;
	rep(tc,T){
		cout<<"Case #"<<tc+1<<": ";
		
		rep(i,4)cin>>c[i];
		
		int o,x,dot;
		
		rep(i,4){
			int o=0,x=0;
			rep(j,4){
				if(c[i][j]=='O')o++;
				if(c[i][j]=='X')x++;
				if(c[i][j]=='T')o++,x++;
			}
			if(o==4){
				cout<<"O won"<<endl;
				goto end;
			}
			if(x==4){
				cout<<"X won"<<endl;
				goto end;
			}
		}
		
		rep(j,4){
			int o=0,x=0;
			rep(i,4){
				if(c[i][j]=='O')o++;
				if(c[i][j]=='X')x++;
				if(c[i][j]=='T')o++,x++;
			}
			if(o==4){
				cout<<"O won"<<endl;
				goto end;
			}
			if(x==4){
				cout<<"X won"<<endl;
				goto end;
			}
		}
		
		o=0,x=0;
		rep(i,4){
			if(c[i][i]=='O')o++;
			if(c[i][i]=='X')x++;
			if(c[i][i]=='T')o++,x++;
		}
		if(o==4){
			cout<<"O won"<<endl;
			goto end;
		}
		if(x==4){
			cout<<"X won"<<endl;
			goto end;
		}
		
		o=0,x=0;
		rep(i,4){
			if(c[i][3-i]=='O')o++;
			if(c[i][3-i]=='X')x++;
			if(c[i][3-i]=='T')o++,x++;
		}
		if(o==4){
			cout<<"O won"<<endl;
			goto end;
		}
		if(x==4){
			cout<<"X won"<<endl;
			goto end;
		}
		
		dot=0;
		rep(i,4)rep(j,4)if(c[i][j]=='.')dot++;
		if(dot==0)cout<<"Draw"<<endl;
		else cout<<"Game has not completed"<<endl;
		
		end:;
		time_t now=clock();
		cerr<<tc+1<<"/"<<T<<": "<<(double)(now-pre)/CLOCKS_PER_SEC<<endl;
		if(tc==T-1){
			cerr<<"Total: "<<(double)(now-start)/CLOCKS_PER_SEC<<endl;
			cerr<<"  Ave: "<<(double)(now-start)/CLOCKS_PER_SEC/T<<endl;
		}
		pre=now;
	}
}
