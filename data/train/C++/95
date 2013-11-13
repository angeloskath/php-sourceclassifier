#include <iostream>
#include <map>
#include <sstream>
#include <string>
#include <vector>
using namespace std;

char win(char a, char b, char c, char d) {
	map<char,int> cnt;
	cnt[a]++;
	cnt[b]++;
	cnt[c]++;
	cnt[d]++;
	if(cnt['X']+cnt['T']==4) return 'X';
	if(cnt['O']+cnt['T']==4) return 'O';
	return 0;
}

int main(void) {
	int T;
	cin >> T;
	for(int ts=1; ts<=T; ts++) {
		string s[4];
		char c;
		int i,j;
		cout << "Case #" << ts << ": ";
		for(i=0; i<4; i++) cin >> s[i];
		for(i=0; i<4; i++) { c=win(s[0][i],s[1][i],s[2][i],s[3][i]); if(c) {cout << c << " won"; goto done; }}
		for(i=0; i<4; i++) { c=win(s[i][0],s[i][1],s[i][2],s[i][3]); if(c) {cout << c << " won"; goto done; }}
		c = win(s[0][0],s[1][1],s[2][2],s[3][3]); if(c) {cout << c << " won"; goto done;}
		c = win(s[0][3],s[1][2],s[2][1],s[3][0]); if(c) {cout << c << " won"; goto done;}
		for(i=0; i<4; i++) for(j=0; j<4; j++) if(s[i][j]=='.') {cout << "Game has not completed"; goto done;}
		cout << "Draw"; goto done;
done:           cout << endl;
	}
}
