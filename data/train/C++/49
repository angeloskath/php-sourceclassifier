#include <cassert>
#include <string>
#include <iostream>

inline void check(char c[4], bool &global_O_wins, bool &global_X_wins)
{
	bool O_wins = true, X_wins = true;

	for (int i = 0 ; i < 4 ; i ++) {
		switch (c[i]) {
		case 'X' : O_wins = false; break;
		case 'O' : X_wins = false; break;
		case '.' : O_wins = false, X_wins = false; break;
		case 'T' : break;
		default: assert(false); break;
		}
	}

	global_O_wins |= O_wins, global_X_wins |= X_wins;
}

int main() {
	int T;
	std::string state[4];

	// Read the number of cases
	std::cin >> T;

	// For each case
	for (int t = 0 ; t < T ; t++) {
		bool O_wins = false, X_wins = false;

		// Read the case
		for (int i = 0 ; i < 4 ; i++) {
			std::cin >> state[i];
		}

		// Check rows
		for (int i = 0 ; i < 4 ; i++) {
			char c[4] = {state[i][0],state[i][1],state[i][2],state[i][3]};
			check(c, O_wins, X_wins);
		}

		// Check columns
		for (int i = 0 ; i < 4 ; i++) {
			char c[4] = {state[0][i],state[1][i],state[2][i],state[3][i]};
			check(c, O_wins, X_wins);
		}

		// Check first diagonal
		char c1[4] = {state[0][0],state[1][1],state[2][2],state[3][3]};
		check(c1, O_wins, X_wins);

		// Check the second one
		char c2[4] = {state[3][0],state[2][1],state[1][2],state[0][3]};
		check(c2, O_wins, X_wins);

		// Print the result
		std::cout << "Case #" << (t+1) << ": ";

		if (O_wins) {
			if (X_wins) {
				// Should never happen
				std::cout << "Draw";
			}
			else {
				std::cout << "O won";
			}
		}
		else {
			if (X_wins) {
				std::cout << "X won";
			}
			else {
				bool complete = true;
				for (int i = 0 ; i < 4 ; i++) {
					for (int j = 0 ; j < 4 ; j++) {
						if (state[i][j] == '.') {
							complete = false;
						}
					}
				}

				if (complete)
					std::cout << "Draw";
				else
					std::cout << "Game has not completed";
			}
		}

		std::cout << std::endl;
	}

	return 0;
}
