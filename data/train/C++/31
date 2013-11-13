#include <iostream>
#include <fstream>
#include <stddef.h>
#include <stdlib.h>
#include <string>

enum boardstate
{
	Xwon,
	Owon,
	Draw,
	Incomplete
};

struct board
{
	char spaces [4] [4];
};

bool haswon (const board &board, char player)
{
	// rows
	for (unsigned int y = 0; y < 4; y++)
	{
		bool won = true;
		for (unsigned int x = 0; x < 4; x++)
		{
			if (board.spaces [y] [x] != player &&
				board.spaces [y] [x] != 'T')
			{
				won = false;
				break;
			}
		}
		if (won) { return true; }
	}

	// columns
	for (unsigned int x = 0; x < 4; x++)
	{
		bool won = true;
		for (unsigned int y = 0; y < 4; y++)
		{
			if (board.spaces [y] [x] != player &&
				board.spaces [y] [x] != 'T')
			{
				won = false;
				break;
			}
		}
		if (won) { return true; }
	}

	// diagonal
	bool won = true;
	for (unsigned int i = 0; i < 4; i++)
	{
		if (board.spaces [i] [i] != player &&
			board.spaces [i] [i] != 'T')
		{
			won = false;
			break;
		}
	}
	if (won) { return true; }

	// diagonal
	won = true;
	for (unsigned int i = 0; i < 4; i++)
	{
		if (board.spaces [i] [3 - i] != player &&
			board.spaces [i] [3 - i] != 'T')
		{
			won = false;
			break;
		}
	}
	if (won) { return true; }

	return false;
}

boardstate getboardstate (const board &board)
{
	if (haswon (board, 'X')) { return Xwon; }
	if (haswon (board, 'O')) { return Owon; }

	for (unsigned int y = 0; y < 4; y++)
	{
		for (unsigned int x = 0; x < 4; x++)
		{
			if (board.spaces [y] [x] == '.') { return Incomplete; }
		}
	}
	return Draw;
}

int main ()
{
	std::ifstream in ("a.in");
	std::ofstream out ("a.out");

	unsigned int testcount;
	in >> testcount;

	for (unsigned int i = 0; i < testcount; i++)
	{
		// read board
		board board;
		for (unsigned int y = 0; y < 4; y++)
		{
			for (unsigned int x = 0; x < 4; x++)
			{
				in >> board.spaces [y] [x];
			}
		}
		
		out << "Case #" << (i + 1) << ": ";
		switch (getboardstate (board))
		{
			case Xwon:
				out << "X won";
				break;
			case Owon:
				out << "O won";
				break;
			case Draw:
				out << "Draw";
				break;
			case Incomplete:
				out << "Game has not completed";
				break;
		}
		out << std::endl;
	}

	return 0;
}

