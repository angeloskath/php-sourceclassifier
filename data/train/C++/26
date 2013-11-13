#include <algorithm>
#include <iostream>
#include <string>
using namespace std;

string win[10] = {
  "XXXX............",
  "....XXXX........",
  "........XXXX....",
  "............XXXX",
  "X...X...X...X...",
  ".X...X...X...X..",
  "..X...X...X...X.",
  "...X...X...X...X",
  "X....X....X....X",
  "...X..X..X..X...",
};

main() {
  int T, prob=1;
  for (cin >> T; T--;) {
    cout << "Case #" << prob++ << ": ";
    string s(16, ' ');
    for (int i = 0; i < 16; i++) cin >> s[i];
    for (int p = 0; p < 2; p++) {
      char ch = (p ? 'X' : 'O');
      for (int i = 0; i < 10; i++) {
        bool valid = true;
        for (int j = 0; j < 16; j++)
          if (win[i][j] == 'X' && s[j] != ch && s[j] != 'T') valid = false;
        if (valid) {cout << ch << " won" << endl; goto done;}
      }
    }
    if (s.find('.') == -1) {
      cout << "Draw" << endl;
    } else {
      cout << "Game has not completed" << endl;
    }
done:;
  }
}
