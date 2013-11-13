#include <stdio.h>

int n = 4;
char a[5][5];

#define REP(i, n) for(int i=0; i<(int)(n); ++ i) 

int dx[] = {1, 0, -1, 0, -1, -1, 1, 1};
int dy[] = {0, 1, 0, -1, -1, 1, -1, 1};

const char* go() {
	bool all_filled = true;

	REP(i, n) REP(j, n)
		all_filled &= (a[i][j] != '.');

	REP(i, n) REP(j, n) {
		for(int k =0; k < 8; ++ k) {
			bool valid = true;

			int o = 0, x = 0, t = 0;
			for(int amt = 3; amt >= 0; -- amt ) {
				int ii = i + dx[k] * amt;
				int jj = j + dy[k] * amt;
				if(0 <= ii && ii < n && 0 <= jj && jj < n); 
				else {valid = false; break;}

				if(a[ii][jj] == 'O') o ++;
				if(a[ii][jj] == 'X') x ++;
				if(a[ii][jj] == 'T') t ++;
			}
			if(valid) {
				if(o == 4) 
					return "O won";
				if(x == 4) 
					return "X won";
				if(o == 3 && t == 1) 
					return "O won";
				if(x == 3 && t == 1) 
					return "X won";
			}
		}
	}

	if(all_filled) return "Draw";
	return "Game has not completed";
}

int main() {
	int T;
	freopen("A-large.in","r",stdin);
	freopen("A-large.out","w",stdout);

	scanf("%d", &T);
	for(int t=1; t<=T; ++t) {
		for(int i=0; i<n; ++i) {
			scanf("%s", a[i]);
		}
		printf("Case #%d: %s\n", t, go());
	}
	return 0;
}