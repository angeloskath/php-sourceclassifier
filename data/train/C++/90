#include <cstdio>
#include <iostream>
#include <cmath>
#include <sstream>
#include <vector>
#include <map>
#include <set>
#include <complex>
#include <algorithm>
#include <functional>
#include <fstream>
#include <numeric>
#include <string>
#include <valarray>


using namespace std;

typedef pair<int,int> Pair;

template<class t>
ostream & operator << (ostream & tout,const vector<t> &s){
  tout<<'[';
  for (int i=0;i<s.size();i++)
    if (i+1 == s.size())
      tout<<s[i];
    else
      tout<<s[i]<<',';
  tout<<']';
  return(tout);
}

template<class a,class b>
ostream & operator << (ostream & tout,const pair<a,b> &c){
  return(tout<<'('<<c.first<<','<<c.second<<')');
}

template<class T> struct __set__print{
  __set__print(ostream& out) : tout(out), count(0) {}
  void operator() (T x) { 
    if (count > 0)
      tout<<',';
    tout<<x;
    ++count; 
  }
  ostream& tout;
  int count;
};

template<class T>
ostream & operator << (ostream & tout,const set<T> &s){
  tout<<'{';
  for_each(s.begin(),s.end(),__set__print<T>(tout));
  return(tout<<'}');
}

template<class T,class Q> struct print_map{
  print_map(ostream& out) : tout(out), count(0) {}
  void operator() (const pair<T,Q> &x) { 
    if (count > 0)
      tout<<',';
    tout<<'('<<x.first<<" => "<<x.second<<')';
    ++count; 
  }
  ostream& tout;
  int count;
};

template<class T,class Q>
ostream & operator << (ostream & tout,map<T,Q> s){
  tout<<'{';
  for_each(s.begin(),s.end(),print_map<T,Q>(tout));
  return(tout<<'}');
}

template<class T>
string to_string(T s){
  stringstream tin;
  tin<<s;
  string res;
  getline(tin,res);
  return(res);
}


template<class T>
vector<T> to_vector(T *s,int n){
  vector<T> result;
  for (int i=0;i<n;i++)
    result.push_back(s[i]);
  return(result);
}

// *********************************** MY CODE ***************************

int cal(string a){
  bool x = true,o = true;
  for (int i=0;i<a.size();i++){
    if (a[i] != 'X' && a[i] != 'T')
      x = false;
    if (a[i] != 'O' && a[i] != 'T')
      o = false;
  }
  if (x)
    return(-1);
  if (o)
    return(1);
  return(0);
}

string num[4];

int main(){
  ios_base::sync_with_stdio(false) ;
  int ttime;
  cin>>ttime;
  for (int ccount=1;ccount<=ttime;ccount++){
    cout<<"Case #"<<ccount<<": ";
    for (int i=0;i<=3;i++)
      cin>>num[i];
    bool e = true;
    for (int i=0;i<=3;i++)
      for (int j=0;j<=3;j++)
	if (num[i][j] == '.')
	  e = false;

    int won = 0;
    for (int i=0;i<=3;i++)
      if (cal(num[i]) != 0)
	won = cal(num[i]);
    for (int i=0;i<=3;i++){
      string t;
      for (int j=0;j<=3;j++)
	t+=num[j][i];
      if (cal(t) != 0)
	won = cal(t);
    }

    string a,b;
    for (int i=0;i<=3;i++){
      a+=num[i][i];
      b+=num[i][3-i];
    }
    if (cal(a) != 0)
      won = cal(a);

    if (cal(b) != 0)
      won = cal(b);
    if (won == -1){
      cout<<"X won"<<endl;
      continue;
    }
    if (won == 1){
      cout<<"O won"<<endl;
      continue;
    }
    if (e == true){
      cout<<"Draw"<<endl;
      continue;
    }
    cout<<"Game has not completed"<<endl;

  }
}
