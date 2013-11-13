#include <stdio.h>


char board[4][4];




const char *analyze( void )
{
	int num_empty = 0;
	int winner = -1;
	for( int player = 0; player < 2; ++player ) {
		int ch = 0;
		if( player == 0 )
			ch = 'O';
		if( player == 1 )
			ch = 'X';

		/* Count empty. */
		for( int r = 0; r < 4; ++r )
			for( int c = 0; c < 4; ++c )
				if( board[ r ][ c ] == '.' )
					num_empty += 1;

		/* Diagonals. */
		{
			int nd1 = 0, nd2 = 0;
			for( int i = 0; i < 4; ++i ) {
				char x = board[ i ][ i ];
				char y = board[ i ][ 3 - i ];
				if( x == ch || x == 'T' )
					nd1 += 1;
				if( y == ch || y == 'T' )
					nd2 += 1;
			}
			if( nd1 == 4 || nd2 == 4 ) {
				winner = player;
				break;
			}
		}

		/* Rows. */
		{
			for( int r = 0; r < 4 && winner == -1; ++r ) {
				int nr = 0;
				for( int c = 0; c < 4; ++c ) {
					char x = board[ r ][ c ];
					if( x == ch || x == 'T' )
						nr += 1;
				}
				if( nr == 4 ) {
					winner = player;
					break;
				}
			}
		}

		/* Cols. */
		{
			for( int r = 0; r < 4 && winner == -1; ++r ) {
				int nr = 0;
				for( int c = 0; c < 4; ++c ) {
					char x = board[ c ][ r ];
					if( x == ch || x == 'T' )
						nr += 1;
				}
				if( nr == 4 ) {
					winner = player;
					break;
				}
			}
		}

	}
	if( winner == -1 ) {
		if( num_empty > 0 )
			return "Game has not completed";
		else
			return "Draw";
	} else {
		if( winner == 0 ) 
			return "O won";
		else
			return "X won";
	}
	return "";
}


int main( void )
{
	int num_cases = 0;

	/* Read number of cases. */
	scanf( "%d\n", &num_cases );

	/* For each case... */
	for( int test = 1; test <= num_cases; ++test ) {

		/* Read board. */
		for( int row = 0; row < 4; ++row ) {
			scanf( "%c%c%c%c\n", &board[ row ][ 0 ], &board[ row ][ 1 ], &board[ row ][ 2 ], &board[ row ][ 3 ] );
		}

		/* Read empty line. */
		scanf( "\n" );

		/* Analyze board. */
		const char *outcome = analyze( );

		/* Print outcome. */
		printf( "Case #%d: %s\n", test, outcome );

	}

	return 0;
}
