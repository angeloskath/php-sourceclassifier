#include <iostream>
#include <vector>
#include <string>
#include <algorithm>
using namespace std;
int main()
{
	int n_cases;
	cin >> n_cases;
	for (int tc=0; tc<n_cases; tc++)
	{
		vector<string> board;
		for (int i=0; i<4; i++)
		{
			string line;
			cin >> line;
			board.push_back(line);
		}
		vector<string> v;
		for (int i=0; i<4; i++)
		{
			string tmp;
			for (int j=0; j<4; j++)
				tmp += board[i][j];
			v.push_back(tmp);
		}
		for (int j=0; j<4; j++)
		{
			string tmp;
			for (int i=0; i<4; i++)
				tmp += board[i][j];
			v.push_back(tmp);
		}
		{
			string tmp;
			for (int k=0; k<4; k++)
				tmp += board[k][k];
			v.push_back(tmp);
		}
		{
			string tmp;
			for (int k=0; k<4; k++)
				tmp += board[k][3-k];
			v.push_back(tmp);
		}
		bool o_won = false, x_won = false, has_empty = false;
		for (vector<string>::iterator it = v.begin(); it != v.end(); ++it)
		{
			int n_o = count(it->begin(), it->end(), 'O');
			int n_t = count(it->begin(), it->end(), 'T');
			int n_x = count(it->begin(), it->end(), 'X');
			o_won |= n_o && n_o + n_t == 4;
			x_won |= n_x && n_x + n_t == 4;
			has_empty |= n_o + n_t + n_x < 4;
		}
		cout << "Case #" << tc + 1 << ": ";
		if (o_won ^ x_won)
		{
			cout << (o_won ? 'O' : 'X') << " won" << endl;
		}
		else if (o_won || !has_empty)
		{
			cout << "Draw" << endl;
		}
		else
		{
			cout << "Game has not completed" << endl;
		}
	}
	return 0;
}
