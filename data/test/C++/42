#include <algorithm>
#include <cmath>
#include <climits>
#include <complex>
#include <cstdio>
#include <cstdlib>
#include <iostream>
#include <map>
#include <queue>
#include <set>
#include <sstream>
#include <string>
#include <stack>
#include <utility>
#include <vector>
using namespace std;


typedef long long LL;
typedef pair<int,int> PII;
#define MP make_pair
#define REP(i,n) for(int i=0;i<(int)n;i++) 
#define EACH(i,c) for(__typeof((c).begin()) i=(c).begin();i!=(c).end();i++) 
#define ALL(c) (c).begin(),(c).end() 

int solve() {
  vector<string> field;
  bool point = false;
  for(int i=0; i<4; i++) {
    string tmp;
    cin>>tmp;
    //   cout<<tmp<<endl;
    field.push_back(tmp);
    for(int j=0; j<4; j++)
      if(tmp[j]=='.')
	point = true;
  } 
  REP(z,2) {
    char check = 'X';
    if(z==1) check='O';
    vector<string> x = field;
    REP(i,4) REP(j,4) if(x[i][j]=='T') {
      if(z==0) x[i][j]='X';
      if(z==1) x[i][j]='O';
    }
    bool xWin = false;
    REP(i,4) {
      int ok = true;
      
      REP(j,4) if(x[i][j]!=check) ok = false;
      if(ok) xWin = true;
      ok = true;
      
      REP(j,4) if(x[j][i]!=check) ok = false;
      if(ok) xWin = true;
      ok = true;
      
      REP(j,4) if(x[j][j]!=check) ok = false;
      if(ok) xWin = true;
      ok = true;
      
      REP(j,4) if(x[j][3-j]!=check) ok = false;
      if(ok) xWin = true;
      ok = true;  
    }
    if(xWin) return z;
  }
  if(point) return 3;
  return 2;
}


int main() {
  int t;
  cin>>t;
  REP(i,t) {
    string ans[4] = {"X won", "O won", "Draw", "Game has not completed"};
    cout<<"Case #"<<i+1<<": "<<ans[solve()]<<endl;
  }
  return 0;

}
