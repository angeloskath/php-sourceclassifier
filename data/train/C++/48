#include <stdio.h>

char A[4][10];
char msg[4][100] = {
"X won",
"O won",
"Draw",
"Game has not completed"
};

int main() {
	int T, te, i, j, outcome, nfree, ch;

	freopen("A-large.in", "r", stdin);
	freopen("A-large.out", "w", stdout);
	
	scanf("%d", &T);
	for (te = 1; te <= T; te++) {
		for (i = 0; i < 4; i++)
			scanf("%s", A[i]);
		
		nfree = 0;
		for (i = 0; i < 4; i++)
			for (j = 0; j < 4; j++)
				if (A[i][j] == '.')
					nfree++;
		
		if (nfree == 0)
			outcome = 2;
		else
			outcome = 3;
		
		// Check for victory on rows.
		for (i = 0; i < 4; i++) {
			ch = '.';
			if (A[i][0] != 'T' && A[i][0] != '.')
				ch = A[i][0];
			else
				ch = A[i][3];
			
			for (j = 0; j < 4; j++)
				if (A[i][j] != ch && A[i][j] != 'T')
					break;
				
			if (j == 4) {
				if (ch == 'X')
					outcome = 0;
				else if (ch == 'O')
					outcome = 1;
			}
		}
		
		// Check for victory on columns.
		for (j = 0; j < 4; j++) {
			ch = '.';
			if (A[0][j] != 'T' && A[0][j] != '.')
				ch = A[0][j];
			else
				ch = A[3][j];
			
			for (i = 0; i < 4; i++)
				if (A[i][j] != ch && A[i][j] != 'T')
					break;
				
			if (i == 4) {
				if (ch == 'X')
					outcome = 0;
				else if (ch == 'O')
					outcome = 1;
			}
		}
		
		// Check for victory on diagonals.
		ch = '.';
		if (A[0][0] != 'T' && A[0][0] != '.')
			ch = A[0][0];
		else
			ch = A[3][3];

		for (i = 0; i < 4; i++)
			if (A[i][i] != ch && A[i][i] != 'T')
				break;
		
		if (i == 4) {
			if (ch == 'X')
				outcome = 0;
			else if (ch == 'O')
				outcome = 1;
		}
	
		ch = '.';
		if (A[0][3] != 'T' && A[0][3] != '.')
			ch = A[0][3];
		else
			ch = A[3][0];

		for (i = 0; i < 4; i++)
			if (A[i][3 - i] != ch && A[i][3 - i] != 'T')
				break;
		
		if (i == 4) {
			if (ch == 'X')
				outcome = 0;
			else if (ch == 'O')
				outcome = 1;
		}

		printf("Case #%d: %s\n", te, msg[outcome]);
	}
	
	return 0;
}
