#include<iostream>
#include<vector>


using namespace std;

int main(){
  int t; cin>>t;
  for (int tc=1; tc<=t; ++tc){
    vector<string> s(4, "");
    for (int i=0; i<4; ++i)
      cin>>s[i];
    int dots=0;
    int O, X;
    bool x=false;
    bool o=false;
    for (int i=0; i<4; ++i){
      O=0;
      X=0;
      for (int j=0; j<4; ++j){
	if (s[i][j]=='.') ++dots;
	if (s[i][j]=='T' || s[i][j]=='O') ++O;
	if (s[i][j]=='T' || s[i][j]=='X') ++X;
      }
      if (O==4) o=true;
      if (X==4) x=true;
    }
    for (int j=0; j<4; ++j){
      O=0; X=0;
      for (int i=0; i<4; ++i){
	if (s[i][j]=='T'||s[i][j]=='O') ++O;
	if (s[i][j]=='T'||s[i][j]=='X') ++X;
      }
      if (O==4) o=true;
      if (X==4) x=true;
    }
    X=0; O=0;
    for (int i=0; i<4; ++i){
      if (s[i][i]=='T'||s[i][i]=='O') ++O;
      if (s[i][i]=='T'||s[i][i]=='X') ++X;
    }
    if (O==4) o=1;
    if (X==4) x=1;
    X=0;
    O=0;
    for (int i=0; i<4; ++i){
      int j=3-i;
      if (s[i][j]=='T'|| s[i][j]=='O') ++O;
      if (s[i][j]=='T'|| s[i][j]=='X') ++X;
    }
    if (O==4) o=1;
    if (X==4) x=1;
    cout<<"Case #"<<tc<<": ";
    if (x==1){
      cout<<"X won"<<endl;
      continue;
    }
    if (o==1){
      cout<<"O won"<<endl;
      continue;
    }
    if (dots==0)
      cout<<"Draw"<<endl;
    else
      cout<<"Game has not completed"<<endl;
  }
  return 0;
}
