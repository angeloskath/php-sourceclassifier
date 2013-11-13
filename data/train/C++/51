#define _CRT_SECURE_NO_DEPRECATE
#define _SECURE_SCL 0

#include <algorithm>
#include <cmath>
#include <cstdio>
#include <cstdlib>
#include <ctime>
#include <map>
#include <set>
#include <string>
#include <utility>
#include <vector>
#include <iostream>
#include <queue>
#include <deque>
#include <stack>
#include <list>
#include <cctype>
#include <sstream>
#include <cassert>
#include <bitset>
#include <memory.h>
#include <complex>
#include <iomanip>

using namespace std;

#pragma comment(linker, "/STACK:200000000")

typedef long long int64;

#define forn(i, n) for(int i = 0; i < (int)(n); i++)
#define ford(i, n) for(int i = (int)(n) - 1; i >= 0; i--)
#define fore(i, a, n) for(int i = (int)(a); i < (int)(n); i++)
#define pb push_back
#define mp make_pair
#define fs first
#define sc second
#define last(a) (int(a.size()) - 1)
#define all(a) a.begin(), a.end()

const double EPS = 1E-9;
const int INF = 1000000000;
const int64 INF64 = (int64) 1E18;
const double PI = 3.1415926535897932384626433832795;

char s[10][10];

bool win(char c) {
  forn(i, 4) {
    bool full = true;
    forn(j, 4)
      if (s[i][j] != c && s[i][j] != 'T')
        full = false;
    if (full)
      return true;
  }
  forn(i, 4) {
    bool full = true;
    forn(j, 4)
      if (s[j][i] != c && s[j][i] != 'T')
        full = false;
    if (full)
      return true;
  }

  {
    bool full = true;
    forn(j, 4)
      if (s[j][j] != c && s[j][j] != 'T')
        full = false;
    if (full)
      return true;
  }
  {
    bool full = true;
    forn(j, 4)
      if (s[j][3 - j] != c && s[j][3 - j] != 'T')
        full = false;
    if (full)
      return true;
  }
  return false;
}

int main() {
#ifdef RADs_project
  freopen("input.txt", "rt", stdin);
  freopen("output.txt", "wt", stdout);
#endif
  
  int tt;
  cin >> tt;
  for (int test = 1; test <= tt; test++) {
    printf("Case #%d: ", test);

    forn(i, 4)
      scanf("%s", s[i]);

    if (win('X'))
      puts("X won");
    else if (win('O'))
      puts("O won");
    else {
      bool emp = false;
      forn(i, 4)
        forn(j, 4)
          if (s[i][j] == '.')
            emp = true;
      if (emp)
        puts("Game has not completed");
      else
        puts("Draw");
    }
  }
  
  return 0;
}