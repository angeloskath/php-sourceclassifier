#include <iostream>

using namespace std;

int main(){
	int T;
	cin >> T;
	int i, j, k;

	for (i=1;i<=T;i++){
		char board[4][4];
		bool full = true;


		for (j=0;j<4;j++){
			for (k=0;k<4;k++){
				cin >> board[j][k];
				if (board[j][k] == '.'){
					full = false;
				}
			}
		}

		char win_char = '.';
		for (j=0;j<4;j++){
			if (board[j][0] != '.' && board[j][1] != '.'){

				char start_char = board[j][0];
				if (start_char == 'T' ){
					start_char = board[j][1];
				}
				bool win = true;
				for (k=1;k<4;k++){
					if (board[j][k] != start_char && board[j][k] != 'T'){
						win = false;
						break;
					}
				}
				if (win){
					win_char = start_char;
					break;
				}
			}
				
		}

		for (k=0;k<4;k++){
			if (board[0][k] != '.' && board[1][k] != '.'){

				char start_char = board[0][k];
				if (start_char == 'T' ){
					start_char = board[1][k];
				}
				bool win = true;
				for (j=1;j<4;j++){
					if (board[j][k] != start_char && board[j][k] != 'T'){
						win = false;
						break;
					}
				}
				if (win){
					win_char = start_char;
					break;
				}
			}
				
		}
		if (board[0][0] != '.' && board[1][1] != '.'){
			char start_char = board[0][0];
			if (start_char == 'T' ){
				start_char = board[1][1];
			}
			bool win = true;

			for (j=1;j<4;j++){
				if (board[j][j] != start_char && board[j][j] != 'T'){
					win = false;
					break;
				}
			}
			if (win){
				win_char = start_char;
			}
		}
		if (board[3][0] != '.' && board[2][1] != '.'){
			char start_char = board[3][0];
			if (start_char == 'T' ){
				start_char = board[2][1];
			}
			bool win = true;

			for (j=1;j<4;j++){
				if (board[3-j][j] != start_char && board[3-j][j] != 'T'){
					win = false;
					break;
				}
			}
			if (win){
				win_char = start_char;
			}
		}

		if (win_char != '.'){
			cout << "Case #" << i <<": " << win_char << " won" << endl;
		}else if (full){
			cout << "Case #" << i <<": Draw" << endl;
		}else{
			cout << "Case #" << i <<": Game has not completed" << endl;
		}
	}

	return 0;
}