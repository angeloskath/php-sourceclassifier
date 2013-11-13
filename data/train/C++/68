#include <string>
#include <vector>
#include <list>
#include <map>
#include <set>
#include <cmath>
#include <numeric>
#include <algorithm>
#include <functional>
#include <cctype>
#include <cstring>
#include <sstream>
#include <iostream>
#include <iomanip>
#include <gmp.h>
#ifdef HOME_RUN
# include <debug.hpp>
# include <dump.hpp>
# include <cassert>
#else
# define TR(x) do{}while(0)
# ifdef assert
#  indef assert
# endif
# define assert(x) do{}while(0)
#endif
using namespace std;

#define ALL(C) (C).begin(), (C).end()
#define forIter(I,C) for(typeof((C).end()) I=(C).begin(); I!=(C).end(); ++I)
#define forNF(I,S,C) for(int I=(S); I<int(C); ++I)
#define forN(I,C) forNF(I,0,C)
#define forEach(I,C) forN(I,(C).size())
typedef vector<int> VI;
typedef vector<VI> VVI;
typedef vector<string> VS;
typedef long long i64;
typedef unsigned long long u64;

inline istream& skip_endl(istream& in)
{
    string s;
    getline(in, s);
    forIter( i, s ) assert(isspace(*i));
    return in;
}

inline string get_str()
{
    string ret;
    getline(cin, ret);
    return ret;
}

map<string, int> str_index;
int get_index(const string& s)
{
    return str_index.insert(make_pair(s, str_index.size())).first->second;
}
int get_str_index()
{
    return get_index(get_str());
}


char b[4][4];

int line(int i, int j, int di, int dj)
{
    int cc = 0;
    forN ( t, 4 ) {
        char c = b[i][j];
        i += di;
        j += dj;
        switch ( c ) {
        case 'X': cc |= 1; break;
        case 'O': cc |= 2; break;
        case 'T': break;
        case '.': return 4;
        }
    }
    if ( cc == 1 || cc == 2 ) return cc;
    return 0;
}

int main(int argc, const char** argv)
{
    int num_cases = 1;
    cin >> num_cases >> skip_endl;
    int part_cases = 0;
    if ( argc == 2 ) {
        part_cases = atoi(argv[1]);
    }
    forN ( nc, num_cases ) {
        bool incomplete = 0;
        forN ( i, 4 ) forN ( j, 4 ) {
            cin >> b[i][j];
            TR(b[i][j]);
            assert(strchr(".XOT", b[i][j]));
            if ( b[i][j] == '.' ) incomplete = 1;
        }
        int vv = 0;
        forN ( i, 4 ) {
            vv |= line(i, 0, 0, 1);
            vv |= line(0, i, 1, 0);
        }
        vv |= line(0, 0, 1, 1);
        vv |= line(0, 3, 1, -1);
        const char* result = 0;
        if ( vv&1 ) {
            result = "X won";
        }
        else if ( vv&2 ) {
            result = "O won";
        }
        else if ( vv&4 ) {
            result = "Game has not completed";
        }
        else {
            result = "Draw";
        }

        // output
        cout << "Case #"<<nc+1<<": ";
        cout << result;
        cout << endl;
    }
}
