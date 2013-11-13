#include <cstdio>
#include <cstdlib>
#include <cmath>
#include <climits>
#include <cfloat>
#include <map>
#include <utility>
#include <ctime>
#include <set>
#include <iostream>
#include <memory>
#include <string>
#include <cstring>
#include <vector>
#include <algorithm>
#include <functional>
#include <fstream>
#include <sstream>
#include <complex>
#include <stack>
#include <queue>
#include <cstring>
#include <numeric>
#include <cassert>
using namespace std;
static const double EPS = 1e-10;
typedef long long ll;
#define rep(i,n) for(int i=0;i<n;i++)
#define rev(i,n) for(int i=n-1;i>=0;i--)
#define all(a) a.begin(),a.end()
#define mp(a,b) make_pair(a,b)
#define pb(a) push_back(a)
#define SS stringstream
#define DBG1(a) rep(_X,sz(a)){printf("%d ",a[_X]);}puts("");
#define DBG2(a) rep(_X,sz(a)){rep(_Y,sz(a[_X]))printf("%d ",a[_X][_Y]);puts("");}
#define bitcount(b) __builtin_popcount(b)
#define EACH(i,c) for(typeof((c).begin()) i=(c).begin(); i!=(c).end(); ++i)

#define delete(a,n) a.erase(remove(all(a),n),a.end())
template<typename T, typename S> vector<T>& operator<<(vector<T>& a, S b) { a.push_back(b); return a; }
template<typename T> void operator>>(vector<T>& a, int b) {while(b--)if(!a.empty())a.pop_back();}
bool isprime(int n){ if(n<2)return false;  for(int i=2;i*i<=n;i++)if(n%i==0)return false;  return true;} 
ll b_pow(ll x,ll n){return n ? b_pow(x*x,n/2)*(n%2?x:1) : 1ll;}
string itos(int n){stringstream ss;ss << n;return ss.str();}

void putCase(){
	static int x = 1;
	cout << "Case #" << x++ << ": ";
}

char c[4][4];
int iswin(char w){
	for(int i = 0 ; i < 4 ; i++){
		int ok = 1;
		for(int j = 0 ; j < 4 ; j++){
			ok &= c[i][j] == w || c[i][j] == 'T';
		}
		if(ok) return 1;
	}
	for(int i = 0 ; i < 4 ; i++){
		int ok = 1;
		for(int j = 0 ; j < 4 ; j++){
			ok &= c[j][i] == w || c[j][i] == 'T';
		}
		if(ok) return 1;
	}
	
	{
	int ok = 1;
	for(int i = 0 ; i < 4 ; i++){
		ok &= c[i][i] == w || c[i][i] == 'T';
	}
	if(ok) return 1;
	}

	{
	int ok = 1;
	for(int i = 0 ; i < 4 ; i++){
		ok &= c[i][3-i] == w || c[i][3-i] == 'T';
	}
	if(ok) return 1;
	}
	
	return 0;
}
int main(){
	int T;
	cin >> T;
	while(T--){
		int cont = 0;
		for(int i = 0 ; i < 4 ; i++){
			for(int j = 0 ; j < 4 ; j++){
				cin >> c[i][j];
				if( c[i][j] == '.' ) cont = 1;
			}
		}
		putCase();
		if( iswin('O') && iswin('X') ){
			cout << "Error" << endl;
		}else if( iswin('O') ){
			cout << "O won" << endl;
		}else if( iswin('X') ){
			cout << "X won" << endl;
		}else{
			if(cont) cout << "Game has not completed" << endl;
			else cout << "Draw" << endl;
		}
	}
}