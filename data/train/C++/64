#include <iostream>
#include <vector>
#include <string>
#include <cstdio>

using namespace std;

string solve(const vector<string>& vs){
	bool draw = true;
	for(int i=0;i<4;i++){
		bool xWin = true, oWin = true;
		for(int j=0;j<4;j++){
			if(vs[i][j]=='.'||vs[i][j]=='O') xWin = false;
			if(vs[i][j]=='.'||vs[i][j]=='X') oWin = false;
			if(vs[i][j]=='.') draw = false;
		}
		if(xWin) return "X won";
		if(oWin) return "O won";
	}
	for(int i=0;i<4;i++){
		bool xWin = true, oWin = true;
		for(int j=0;j<4;j++){
			if(vs[j][i]=='.'||vs[j][i]=='O') xWin = false;
			if(vs[j][i]=='.'||vs[j][i]=='X') oWin = false;
			if(vs[j][i]=='.') draw = false;
		}
		if(xWin) return "X won";
		if(oWin) return "O won";
	}
	{
		bool xWin = true, oWin = true;
		for(int j=0;j<4;j++){
			if(vs[j][j]=='.'||vs[j][j]=='O') xWin = false;
			if(vs[j][j]=='.'||vs[j][j]=='X') oWin = false;
			if(vs[j][j]=='.') draw = false;
		}
		if(xWin) return "X won";
		if(oWin) return "O won";
	}
	{
		bool xWin = true, oWin = true;
		for(int j=0;j<4;j++){
			if(vs[j][3-j]=='.'||vs[j][3-j]=='O') xWin = false;
			if(vs[j][3-j]=='.'||vs[j][3-j]=='X') oWin = false;
			if(vs[j][3-j]=='.') draw = false;
		}
		if(xWin) return "X won";
		if(oWin) return "O won";
	}
	return draw ? "Draw" : "Game has not completed";
}

int main(){
	int T; cin >> T;
	for(int test=1;test<=T;test++){
		vector<string> vs;
		for(int i=0;i<4;i++){
			string str;
			cin >> str;
			vs.push_back(str);
		}
		printf("Case #%d: %s\n", test, solve(vs).c_str());
	}
}