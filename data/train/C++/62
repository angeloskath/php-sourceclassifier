#include <string>
#include <iostream>
#include <vector>
#include <utility>
#include <cstdio>
using namespace std;

string board[4];

void init()
{
    for (int i = 0; i < 4; ++i) cin >> board[i];
}

bool testPattern(vector<pair<int, int> >& p, char c)
{
    for (int j = 0; j < p.size(); ++j)
    {
        int x = p[j].first;
        int y = p[j].second;
        if (board[x][y] == c || board[x][y] == 'T') continue;
        return false;
    }
    return true;
}

string deal()
{
    vector<vector<pair<int, int> > > patterns;
    for (int i = 0; i < 4; ++i)
    {
        vector<pair<int, int> > nowp;
        for (int j = 0; j < 4; ++j) nowp.push_back(make_pair(i, j));
        patterns.push_back(nowp);
        
        nowp.clear();
        for (int j = 0; j < 4; ++j) nowp.push_back(make_pair(j, i));
        patterns.push_back(nowp);
    }
    
    vector<pair<int, int> > nowp;
    for (int i = 0; i < 4; ++i) nowp.push_back(make_pair(i, i));
    patterns.push_back(nowp);
    
    nowp.clear();
    for (int i = 0; i < 4; ++i) nowp.push_back(make_pair(i, 3 - i));
    patterns.push_back(nowp);
    
    for (int i = 0; i < patterns.size(); ++i)
    {
        if (testPattern(patterns[i], 'X')) return "X won";
        if (testPattern(patterns[i], 'O')) return "O won";
    }
    
    for (int i = 0; i < 4; ++i) for (int j = 0; j < 4; ++j) if (board[i][j] == '.') return "Game has not completed";
    return "Draw";
}

int main()
{
    freopen("/Users/pigoneand/windoflife/CONTEST/CODEJAM/QUAL/a.in", "r", stdin);
    freopen("/Users/pigoneand/windoflife/CONTEST/CODEJAM/QUAL/a.out", "w", stdout);
    
    int T;
    cin >> T;
    for (int test = 1; test <= T; ++test)
    {
        init();
        cout << "Case #" << test << ": " << deal() << endl;
    }
    return 0;
}