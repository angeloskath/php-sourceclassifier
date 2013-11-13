#include <cstdio>
#include <string>

using namespace std;

string opt[4] = {
"X won",
"O won",
"Draw",
"Game has not completed"
};

char buf[4][5];

int check(char S) {
  int ok;

  for (int i = 0; i < 4; ++i) {
    ok = 0;
    for (int j = 0; j < 4; ++j)
      ok += buf[i][j] == S || buf[i][j] == 'T'; 
    if (ok == 4) return 1;
  }

  for (int i = 0; i < 4; ++i) {
    ok = 0;
    for (int j = 0; j < 4; ++j)
      ok += buf[j][i] == S || buf[j][i] == 'T';
    if (ok == 4) return 1;
  }

  ok = 0;
  for (int i = 0; i < 4; ++i)
    ok += buf[i][i] == S || buf[i][i] == 'T';
  if (ok == 4) return 1;

  ok = 0;
  for (int i = 0; i < 4; ++i)
    ok += buf[i][3-i] == S || buf[i][3-i] == 'T';
  if (ok == 4) return 1;

  return 0;
}

int ans() {
  int occ = 0;
  for (int i = 0; i < 4; ++i)
    for(int j = 0; j < 4; ++j)
      occ += buf[i][j] != '.';

  if (check('X')) return 0;
  if (check('O')) return 1;
  if (occ == 16) return 2;
  return 3;
}

int main() {
  freopen("A-large.in", "r", stdin);
  freopen("A.out", "w", stdout);

  int T;
  scanf("%d", &T);

  for(int i = 1; i <= T; ++i) {
    printf("Case #%d: ", i);
    for (int j = 0; j < 4; ++j)
      scanf("%s", buf[j]);

    printf("%s\n", opt[ans()].c_str()); 
  }
  

  return 0;
}
