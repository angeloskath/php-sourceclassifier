#include <iostream>
#include <cstdio>
#include <algorithm>
#include <functional>
#include <numeric>
#include <vector>
#include <set>
#include <map>
#include <queue>
using namespace std;
//{{{Commonly used macro
//-----------------------By cylixstar-----------------------//
#define REP(i, n) for (int n_##__LINE__= (n), i = 0; i < n_##__LINE__; ++i)
#define FOR(i, f, t) for (__typeof__(f) f_##__LINE__=(f), t_##__LINE__=(t), i = f_##__LINE__; i <= t_##__LINE__; ++i)
#define TR(c, it) for (__typeof__((c).begin()) it = (c).begin(); it != (c).end(); ++it)
#define ALL(c) (c).begin(), (c).end()
#define SZ(a) ((int)(a).size())
#define CLR(a, v) do { memset(a, v, sizeof(a)); } while(0)
#define DBG(a) do { std::cout << "[" << __FUNCTION__ << "]" << #a << ": " << a << endl; } while(0)

template<typename T>
inline void checkMax(T& a, const T& b) {
  if (a < b) a = b;
}

template<typename T>
inline void checkMin(T& a, const T& b) {
  if (a > b) a = b;
}

//}}}

const int dir[4][2] = {{0, 1}, {1, 0}, {1, 1}, {1, -1}};
char board[4][5];

bool check(char player, int start_x, int start_y, int idx_dir) {
  for (int x = start_x, y = start_y, i = 0;
      i < 4;  ++i, x += dir[idx_dir][0], y += dir[idx_dir][1]) {
    if (board[x][y] != player && board[x][y] != 'T') return false;
  }
  return true;
}

char is_win(char player) {
  REP (i, 4) {
    if (check(player, i, 0, 0) ||
       check(player, 0, i, 1)) return true;
  }
  if (check(player, 0, 0, 2) ||
      check(player, 0, 3, 3)) return true;
  return false;
}


void go() {
  int num_space = 0;
  REP (i, 4) REP (j, 4) if (board[i][j] == '.') ++num_space;
  if (is_win('O')) {
    puts("O won");
    return;
  }
  if (is_win('X')) {
    puts("X won");
    return;
  }
  if (num_space == 0) {
    puts("Draw");
    return;
  }
  puts("Game has not completed");
}
int main() {
  int n_case;
  scanf("%d", &n_case);
  REP (idx_case, n_case) {
    printf("Case #%d: ", idx_case + 1);
    REP (i, 4) scanf("%s", board[i]);
    go();
  }
  return 0;
}

