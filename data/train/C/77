#include <stdio.h>
#include <stddef.h>
#include <stdlib.h>

int solve(char brd[4][4])
{
	int i, j;
	int sum[10];
	char emp_flag = 0;

	for (i = 0; i < 4; i++)
		for (j = 0; j < 4; j++)
			switch (brd[i][j]) {
				case 'X': brd[i][j]=5; break;
				case 'O': brd[i][j]=23; break;
				case 'T': brd[i][j]=115; break;
				case '.': brd[i][j]=0; emp_flag = 1; break;
			}

	sum[0] = brd[0][0] + brd[0][1] + brd[0][2] + brd[0][3];
	sum[1] = brd[1][0] + brd[1][1] + brd[1][2] + brd[1][3];
	sum[2] = brd[2][0] + brd[2][1] + brd[2][2] + brd[2][3];
	sum[3] = brd[3][0] + brd[3][1] + brd[3][2] + brd[3][3];

	sum[4] = brd[0][0] + brd[1][0] + brd[2][0] + brd[3][0];
	sum[5] = brd[0][1] + brd[1][1] + brd[2][1] + brd[3][1];
	sum[6] = brd[0][2] + brd[1][2] + brd[2][2] + brd[3][2];
	sum[7] = brd[0][3] + brd[1][3] + brd[2][3] + brd[3][3];

	sum[8] = brd[0][0] + brd[1][1] + brd[2][2] + brd[3][3];
	sum[9] = brd[0][3] + brd[1][2] + brd[2][1] + brd[3][0];

	for (i = 0; i < 10; i++) {
		if (sum[i] == 20 || sum[i] == 130)
			return 1;
		if (sum[i] == 92 || sum[i] == 184)
			return 4;
	}
	if (emp_flag)
		return 3;
	return 2;
}

int main(int argc, char **argv)
{
	FILE *fp_in, *fp_out;
	int T;
	char brd[4][4];
	int i, j;
	int res;

	fp_in = fopen(argv[1], "r");
	if (fp_in == NULL) {
		perror(argv[1]);
		exit(1);
	}
	fp_out = fopen(argv[2], "w");
	if (fp_out == NULL) {
		perror(argv[2]);
		exit(1);
	}

	fscanf(fp_in, " %d ", &T);
	for (i = 0; i < T; i++) {
		for (j = 0; j < 4; j++)
			fscanf(fp_in, "%c%c%c%c ", &brd[j][0], &brd[j][1], &brd[j][2], &brd[j][3]);
		res = solve(brd);
		switch(res) {
			case 1: fprintf(fp_out, "Case #%d: X won\n", i+1); break;
			case 2: fprintf(fp_out, "Case #%d: Draw\n", i+1); break;
			case 3: fprintf(fp_out, "Case #%d: Game has not completed\n", i+1); break;
			case 4: fprintf(fp_out, "Case #%d: O won\n", i+1); break;
		}
	}

	fclose(fp_in);
	fclose(fp_out);
	return 0;
}
