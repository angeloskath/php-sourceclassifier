#include <string>
#include <vector>
#include <map>
#include <set>
#include <queue>
#include <stack>
#include <cstdlib>
#include <cstring>
#include <cassert>
#include <iostream>
#include <sstream>
#include <cstddef>
#include <algorithm>
#include <utility>
#include <iterator>
#include <numeric>
#include <list>
#include <complex>
#include <cstdio>
#include <climits>
#include <fcntl.h>
#include <unistd.h>

using namespace std;

typedef vector<int> vi;
typedef vector<string> vs;
typedef long long ll;
typedef complex<double> pnt;
typedef pair<int, int> pii;

#define RA(x) (x).begin(), (x).end()
#define FE(i, x) for (typeof((x).begin()) i = (x).begin(); i != (x).end(); i++)
#define SZ(x) ((int) (x).size())

template<class T>
void splitstr(const string &s, vector<T> &out)
{
    istringstream in(s);
    out.clear();
    copy(istream_iterator<T>(in), istream_iterator<T>(), back_inserter(out));
}

template<class T> T gcd(T a, T b) { return b ? gcd(b, a % b) : a; }

static void redirect(int argc, const char **argv)
{
    if (argc > 1)
    {
        int fd = open(argv[1], O_RDONLY);
        if (fd == -1) { perror(argv[1]); exit(1); }
        if (-1 == dup2(fd, 0)) { perror(argv[1]); exit(1); }
        if (-1 == close(fd)) { perror(argv[1]); exit(1); }
    }

    if (argc > 2)
    {
        int fd = open(argv[2], O_WRONLY | O_CREAT, 0666);
        if (fd == -1) { perror(argv[2]); exit(1); }
        if (-1 == dup2(fd, 1)) { perror(argv[2]); exit(1); }
        if (-1 == close(fd)) { perror(argv[2]); exit(1); }
    }
}

static vector<int> win_masks;

static int make_mask(int r, int c)
{
    return 1 << (r * 4 + c);
}

static void init()
{
    win_masks.clear();
    for (int i = 0; i < 4; i++)
    {
        int m1 = 0;
        int m2 = 0;
        for (int j = 0; j < 4; j++)
        {
            m1 |= make_mask(i, j);
            m2 |= make_mask(j, i);
        }
        win_masks.push_back(m1);
        win_masks.push_back(m2);
    }
    int d1 = 0, d2 = 0;
    for (int i = 0; i < 4; i++)
    {
        d1 |= make_mask(i, i);
        d2 |= make_mask(i, 3 - i);
    }
    win_masks.push_back(d1);
    win_masks.push_back(d2);
}

int main(int argc, const char **argv)
{
    redirect(argc, argv);
    init();

    int cases;
    cin >> cases;
    for (int cas = 0; cas < cases; cas++)
    {
        int T = 0, X = 0, O = 0;
        int dots = 0;
        for (int i = 0; i < 4; i++)
        {
            string line;
            cin >> line;
            for (int j = 0; j < 4; j++)
            {
                switch (line[j])
                {
                case 'T': T |= make_mask(i, j); break;
                case 'X': X |= make_mask(i, j); break;
                case 'O': O |= make_mask(i, j); break;
                case '.': dots++; break;
                }
            }
        }
        O |= T;
        X |= T;

        bool xwin = false;
        bool owin = false;
        for (int i = 0; i < SZ(win_masks); i++)
        {
            int m = win_masks[i];
            if (!(m & ~X))
                xwin = true;
            if (!(m & ~O))
                owin = true;
        }
        printf("Case #%d: ", cas + 1);
        if (xwin)
            printf("X won\n");
        else if (owin)
            printf("O won\n");
        else if (dots == 0)
            printf("Draw\n");
        else
            printf("Game has not completed\n");
    }
    return 0;
}
