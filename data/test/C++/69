#include <iostream>
#include <vector>
using namespace std;

bool won(const vector<string>& board, char c) {
    // check horizontally
    for (int i = 0; i < 4; i++) {
        bool ok = true;
        for (int j = 0; j < 4; j++) {
            if (board[i][j] != c && board[i][j] != 'T') {
                ok = false;
                break;
            }
        }
        if (ok) return true;
    }
    // check vertically
    for (int j = 0; j < 4; j++) {
        bool ok = true;
        for (int i = 0; i < 4; i++) {
            if (board[i][j] != c && board[i][j] != 'T') {
                ok = false;
                break;
            }
        }
        if (ok) return true;
    }
    // check diagonally
    bool ok = true;
    for (int k = 0; k < 4; k++) {
        if (board[k][k] != c && board[k][k] != 'T') {
            ok = false;
            break;
        }
    }
    if (ok) return true;
    ok = true;
    for (int k = 0; k < 4; k++) {
        if (board[k][3-k] != c && board[k][3-k] != 'T') {
            ok = false;
            break;
        }
    }
    if (ok) return true;

    return false;
}

bool filled(const vector<string>& board) {
    for (int i = 0; i < 4; i++)
        for (int j = 0; j < 4; j++)
            if (board[i][j] == '.')
                return false;
    return true;
}

string solve(const vector<string>& board) {
    if (won(board, 'X')) return "X won";
    if (won(board, 'O')) return "O won";
    if (filled(board)) return "Draw";
    return "Game has not completed";
}

int main() {
    int T; cin >> T;
    for (int t = 1; t <= T; t++) {
        vector<string> board(4);
        for (int i = 0; i < 4; i++) {
            cin >> board[i];
        }
        cout << "Case #" << t << ": " << solve(board) << endl;
    }
}
