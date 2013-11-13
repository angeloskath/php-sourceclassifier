
#include <iostream>
#include <vector>
using namespace std;

int main() {
	int T;	
	cin >> T;
  vector<string> B(4);
	for(int t = 1; t <= T; t++) {
    getline(cin, B[0]);
    for(int i = 0; i < 4; i++) getline(cin, B[i]);
		cout << "Case #" << t << ": ";
	
    char won = '.';
    bool draw = true;
    for(int c = 'O'; c <= 'X'; c+= 'X'-'O') {
      bool w = true;        
      for(int i = 0; i < 4; i++) w = w && (B[i][i] == c || B[i][i] == 'T');
      if(w) won = c;

      w = true;        
      for(int i = 0; i < 4; i++) w = w && (B[i][3-i] == c || B[i][3-i] == 'T');
      if(w) won = c;

      for(int i = 0; i < 4; i++) {
        w = true;        
        for(int j = 0; j < 4; j++)
          w = w && (B[i][j] == c || B[i][j] == 'T');
        if(w) won = c;

        w = true;        
        for(int j = 0; j < 4; j++)
          w = w && (B[j][i] == c || B[j][i] == 'T');
        if(w) won = c;

        for(int j = 0; j < 4; j++) draw = draw && B[i][j] != '.';
      }
    }
    if(won == 'X') cout << "X won" << endl;
    else if(won == 'O') cout << "O won" << endl;
    else if(draw) cout << "Draw" << endl;
    else cout << "Game has not completed" << endl;
  }


}
