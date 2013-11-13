// compile with "g++ XXX.cc -O2" in Cygwin

#include<iostream>
#include<sstream>
#include<cstdio>
#include<cstring>
#include<algorithm>
#include<string>
#include<vector>
#include<cmath>
#include<set>
#include<map>
#include<stack>
#include<queue>
#include<numeric>
#include<functional>
#include<complex>
#include<bitset>

using namespace std;
#define BET(a,b,c) ((a)<=(b)&&(b)<(c))
#define FOR(i,n) for(int i=0,i##_end=(int(n));i<i##_end;i++)
#define FOR3(i,a,b) for(int i=a,i##_end=b;i<i##_end;i++)
#define FOR_EACH(it,v) for(__typeof(v.begin()) it=v.begin(),it_end=v.end() ; it != it_end ; it++)
#define SZ(x) (int)(x.size())
#define ALL(x) (x).begin(),(x).end()
#define MP make_pair
#define CLS(x,val) memset((x) , val , sizeof(x)) 
typedef long long ll_t;
typedef long double ld_t;
typedef vector<int> VI; 
typedef vector<VI> VVI;
typedef complex<int> xy_t;

template<typename T> void debug(T v , string delimiter = "\n")
{ for(__typeof(v.begin()) it=v.begin(),it_end=v.end() ; it != it_end ; it++) cout << *it << delimiter; cout << flush ;}

int dx[]  = {0,1,0,-1};
int dy[]  = {1,0,-1,0};
string ds = "SENW";

const double PI = 4.0*atan(1.0);

string solve()
{
  vector<string> board(4);
  FOR(i,4) cin>>board[i];
  vector<string> lines;
  FOR(i,4) {
    string lineTate,lineYoko;
    FOR(j,4){
      lineYoko += board[i][j];
      lineTate += board[j][i];
    }
    lines.push_back(lineTate);
    lines.push_back(lineYoko);
  }
  lines.push_back(string("")+board[0][0]+board[1][1]+board[2][2]+board[3][3]);
  lines.push_back(string("")+board[3][0]+board[2][1]+board[1][2]+board[0][3]);
  
  FOR(i,SZ(lines)){
    string line = lines[i];
    int Xnum = 0 ;
    int Onum = 0 ;
    int Tnum = 0 ;
    FOR(j,SZ(line)) {
      if(line[j] == 'X') Xnum++;
      if(line[j] == 'O') Onum++;
      if(line[j] == 'T') Tnum++;
    }
    if(Xnum + Tnum == 4) return "X won";
    if(Onum + Tnum == 4) return "O won";
  }

  FOR(i,4) FOR(j,4) if(board[i][j] == '.') return "Game has not completed";
  return "Draw";
}

int main() {
  int t,case_no=1;
  cin>>t;
  while(t--){
    string ans = solve();
    printf("Case #%d: %s\n" , case_no++ , ans.c_str());
  }
  return 0 ;
}
