#include <cstdio>
#include <cstdlib>
#include <cmath>
#include <climits>
#include <cfloat>
#include <map>
#include <utility>
#include <set>
#include <iostream>
#include <memory>
#include <string>
#include <vector>
#include <algorithm>
#include <functional>
#include <sstream>
#include <complex>
#include <stack>
#include <queue>
#include <cstring>
#include <sstream>
#include <cassert>
#include <ctime>
#include <list>
#include <numeric>
#include <fstream>

using namespace std;
static const double EPS = 1e-8;
typedef long long ll;
typedef unsigned long long ull;
typedef pair<int,int> PI;
#ifndef M_PI
const double M_PI=acos(-1.0);
#endif
#define rep(i,n) for(int i=0;i<(int)(n);++i)
#define FOR(i,c) for(__typeof((c).begin())i=(c).begin();i!=(c).end();++i)
#define FORR(i,c) for(__typeof((c).rbegin())i=(c).rbegin();i!=(c).rend();++i)
#define ALL(c) (c).begin(), (c).end()
#define mp(a,b) make_pair(a,b)
#define pb(a) push_back(a)
#define SZ(a) (int((a).size()))
#define F first
#define S second
int dx[]={0,-1,0,1,1,1,-1,-1},dy[]={1,0,-1,0,1,-1,1,-1};

string in[4];
void solve(int ca){
  printf("Case #%d: ",ca);
  rep(i,4) cin >> in[i];
  bool xw=false,ow=false;
  rep(i,4){
    bool ok=true;
    rep(j,4)
      if(in[i][j]=='O' || in[i][j]=='.') ok=false;
    xw |= ok;
    ok=true;
    rep(j,4)
      if(in[j][i]=='O' || in[j][i]=='.') ok=false;
    xw |= ok;
    ok=true;
    rep(j,4)
      if(in[j][j]=='O' || in[j][j]=='.') ok=false;
    xw |= ok;
    ok=true;
    rep(j,4)
      if(in[j][3-j]=='O' || in[j][3-j]=='.') ok=false;
    xw |= ok;    
  }

  rep(i,4){
    bool ok=true;
    rep(j,4)
      if(in[i][j]=='X' || in[i][j]=='.') ok=false;
    ow |= ok;
    ok=true;
    rep(j,4)
      if(in[j][i]=='X' || in[j][i]=='.') ok=false;
    ow |= ok;
    ok=true;
    rep(j,4)
      if(in[j][j]=='X' || in[j][j]=='.') ok=false;
    ow |= ok;
    ok=true;
    rep(j,4)
      if(in[j][3-j]=='X' || in[j][3-j]=='.') ok=false;
    ow |= ok;    
  }

  int dot=0;
  rep(i,4)rep(j,4)dot+=in[i][j]=='.';

  if(xw) cout << "X won" << endl;
  else if(ow) cout << "O won" << endl;
  else if(dot) cout << "Game has not completed" << endl;
  else cout << "Draw" << endl;
}
  

main(){
  int t;
  cin >> t;
  rep(i,t) solve(i+1);
}
