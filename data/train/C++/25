#include <iostream>

int main() {
	int T;
	std::cin >> T;
	
	for(int t = 0; t < T; ++t) {
		std::cout << "Case #" << t + 1 << ": ";
		
		std::string s, tmp;
		std::cin >> tmp;
		s.append(tmp);
		std::cin >> tmp;
		s.append(tmp);
		std::cin >> tmp;
		s.append(tmp);
		std::cin >> tmp;
		s.append(tmp);
		
		bool done = false;
		auto asd = [&](int a, int d) {
			if(done) return;
			
			char c1 = s[a];
			char c2 = s[a + d];
			char c3 = s[a + 2 * d];
			char c4 = s[a + 3 * d];
			
			int Os = (int)(c1 == 'O') + (int)(c2 == 'O') + (int)(c3 == 'O') + (int)(c4 == 'O');
			int Xs = (int)(c1 == 'X') + (int)(c2 == 'X') + (int)(c3 == 'X') + (int)(c4 == 'X');
			int Ts = (int)(c1 == 'T') + (int)(c2 == 'T') + (int)(c3 == 'T') + (int)(c4 == 'T');
			
			if(Os + Ts == 4) {
				std::cout << "O won\n";
				done = true;
			}
			if(Xs + Ts == 4) {
				std::cout << "X won\n";
				done = true;
			}
		};
		asd(0, 1);
		asd(4, 1);
		asd(8, 1);
		asd(12, 1);
		asd(0, 4);
		asd(1, 4);
		asd(2, 4);
		asd(3, 4);
		asd(0, 5);
		asd(3, 3);
		
		if(done) continue;
		
		bool complete = true;
		for(char c : s) {
			if(c == '.') complete = false;
		}
		
		if(complete) {
			std::cout << "Draw\n";
		} else {
			std::cout << "Game has not completed\n";
		}
	}
	
	return 0;
}