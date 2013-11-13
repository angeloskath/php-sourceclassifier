#include<stdio.h>

int main(void) {
	FILE* ifp = fopen("input.txt", "r");
	FILE* ofp = fopen("output.txt", "w");

	int c, n, i, j, i1, j1, t1, t2, t3, full;
	char a[4][5];
	char winner;

	fscanf(ifp, "%d", &c);
	n = 0;
	while(c--) {
		n++;
		for (i=0; i<4; i++)
			fscanf(ifp, "%s", a[i]);
		t1 = t2 = t3 = 0;
		full = 1;
		for (i=0; i<4; i++)
			for (j=0; j<4; j++)
				if (a[i][j] == '.')
					full = 0;
		for (i=0; i<4; i++) {
			for (j=1; j<4; j++) {
				if (a[i][j] == 'T') {a[i][j] = a[i][j-1]; t2=1; i1=i; j1=j;}
				if ((a[i][j] != a[i][j-1] && a[i][j-1] != 'T') || a[i][j-1] == '.' || a[i][j] == '.') {t1=1; break;}
			}
			if (t1 == 0) {t1=1; winner = a[i][3]; break;} 
			else t1 = 0;
			if (t2 == 1) {a[i1][j1] = 'T'; t2=0;}
			for (j=1; j<4; j++) {
				if (a[j][i] == 'T') {a[j][i] = a[j-1][i]; t1=1; i1=i; j1=j;}
				if ((a[j][i] != a[j-1][i] && a[j-1][i] != 'T') || a[j-1][i] == '.' || a[j-1][i] == '.') {t2=1; break;}
			}
			if (t2 == 0) {t2=1; winner = a[3][i]; break;} 
			else t2 = 0;
			if (t1 == 1) {a[j1][i1] = 'T'; t1=0;}
		}
		t3 = 1;
		for (j=0; j<1; j++) {
		for (i=0; i<4; i++) {
			if (a[i][i] != 'O' && a[i][i] != 'T')
				t3 = 0;
		}
		if (t3 == 1) {winner = 'O'; break;}
		else t3 = 1;
		for (i=0; i<4; i++) {
			if (a[i][3-i] != 'O' && a[i][3-i] != 'T')
				t3 = 0;
		}
		if (t3 == 1) {winner = 'O'; break;}
		else t3 = 1;
		for (i=0; i<4; i++) {
			if (a[i][i] != 'X' && a[i][i] != 'T')
				t3 = 0;
		}
		if (t3 == 1) {winner = 'X'; break;}
		else t3 = 1;
		for (i=0; i<4; i++) {
			if (a[i][3-i] != 'X' && a[i][3-i] != 'T')
				t3 = 0;
		}
		if (t3 == 1) {winner = 'X'; break;}
		}
		if (t1 || t2 || t3) fprintf(ofp, "Case #%d: %c won\n", n, winner);
		else if (full) fprintf(ofp, "Case #%d: Draw\n", n);
		else fprintf(ofp, "Case #%d: Game has not completed\n", n);
	}

	fclose(ifp);
	fclose(ofp);
	return 0;
}