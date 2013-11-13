#include <stdio.h>

char checksame(char, char, char, char);

int main() {
	int N, n;
	char line[10];
	
	scanf("%d\n", &N);
	
	for (n = 1; n <= N; n++) {
		char m[4][4];
		int dots = 0;
		int k;
		
		for (k = 0; k < 4; k++) {
			int j;
			gets(line);
			
			for (j = 0; j < 4; j++) {
				char c = line[j];
				if (c == '.') {
					dots++;
				}
				
				m[k][j] = line[j];
			}
		}
		
		char res;
		
		if ((res = checksame(m[0][0], m[0][1], m[0][2], m[0][3])) != 0) {
			printf("Case #%d: %c won\n", n, res);
		} else if ((res = checksame(m[1][0], m[1][1], m[1][2], m[1][3])) != 0) {
			printf("Case #%d: %c won\n", n, res);
		} else if ((res = checksame(m[2][0], m[2][1], m[2][2], m[2][3])) != 0) {
			printf("Case #%d: %c won\n", n, res);
		} else if ((res = checksame(m[3][0], m[3][1], m[3][2], m[3][3])) != 0) {
			printf("Case #%d: %c won\n", n, res);
		} else if ((res = checksame(m[0][0], m[1][0], m[2][0], m[3][0])) != 0) {
			printf("Case #%d: %c won\n", n, res);
		} else if ((res = checksame(m[0][1], m[1][1], m[2][1], m[3][1])) != 0) {
			printf("Case #%d: %c won\n", n, res);
		} else if ((res = checksame(m[0][2], m[1][2], m[2][2], m[3][2])) != 0) {
			printf("Case #%d: %c won\n", n, res);
		} else if ((res = checksame(m[0][3], m[1][3], m[2][3], m[3][3])) != 0) {
			printf("Case #%d: %c won\n", n, res);
		} else if ((res = checksame(m[0][0], m[1][1], m[2][2], m[3][3])) != 0) {
			printf("Case #%d: %c won\n", n, res);
		} else if ((res = checksame(m[3][0], m[2][1], m[1][2], m[0][3])) != 0) {
			printf("Case #%d: %c won\n", n, res);
		} else {
			if (dots == 0) {
				printf("Case #%d: Draw\n", n);
			} else {
				printf("Case #%d: Game has not completed\n", n);
			}
		}
		
		gets(line);
	}
	
	return 0;
}

char checksame(char a, char b, char c, char d) {
	/* change T to non-T in area */
	if (a == 'T') a = b;
	else if (b == 'T') b = a;
	else if (c == 'T') c = a;
	else if (d == 'T') d = a;
	
	if (a == b && a == c && c == d) {
		if (a != '.')
			return a;
	}
	
	return 0;
}
