#include <cassert>
#include <cstdio>
#include <algorithm>
#include <vector>

using namespace std;

char board[4][10];

bool win(const vector<int>& squares, char player) {
    assert(squares.size() == 4);
    for (int i = 0; i < squares.size(); ++i) {
        int x = squares[i] / 4, y = squares[i] & 3;
        if (board[x][y] != player && board[x][y] != 'T') {
            return false;
        }
    }
    return true;
}

void solve() {
    for (int i = 0; i < 4; ++i) {
        vector<int> row, column;
        for (int j = 0; j < 4; ++j) {
            row.push_back(i * 4 + j);
            column.push_back(i + j * 4);
        }
        if (win(row, 'X') || win(column, 'X')) {
            printf("X won\n");
            return;
        } else if (win(row, 'O') || win(column, 'O')) {
            printf("O won\n");
            return;
        }
    }
    vector<int> diag1, diag2;
    diag1.push_back(0 * 4 + 0);
    diag1.push_back(1 * 4 + 1);
    diag1.push_back(2 * 4 + 2);
    diag1.push_back(3 * 4 + 3);
    diag2.push_back(0 * 4 + 3);
    diag2.push_back(1 * 4 + 2);
    diag2.push_back(2 * 4 + 1);
    diag2.push_back(3 * 4 + 0);
    if (win(diag1, 'X') || win(diag2, 'X')) {
        printf("X won\n");
        return;
    } else if (win(diag1, 'O') || win(diag2, 'O')) {
        printf("O won\n");
        return;
    }

    int numEmpty = 0;
    for (int i = 0; i < 4; ++i) {
        for (int j = 0; j < 4; ++j) {
            if (board[i][j] == '.')
                ++numEmpty;
        }
    }
    if (numEmpty == 0) {
        printf("Draw\n");
    } else {
        printf("Game has not completed\n");
    }
}

int main() {
    int numOfCases;
    scanf("%d", &numOfCases);
    for (int caseNo = 1; caseNo <= numOfCases; ++caseNo) {
        gets(board[0]);
       
        gets(board[0]);
        gets(board[1]);
        gets(board[2]);
        gets(board[3]);

        printf("Case #%d: ", caseNo);
        solve();
    }
    return 0;
}
