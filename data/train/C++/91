#include <cstdio>
#include <cstdlib>
using namespace std;

int main(){
	int cases;
	scanf("%d", &cases);
	
	for(int z=1; z<=cases; z++){
		char grid[4][5];
		for(int i=0; i<4; i++){
			scanf("%s", &grid[i]);
		}
		
		for(int i=0; i<4; i++){
			char c = grid[i][0];
			if(c == 'T'){
				c = grid[i][1];
			}else{
				if( grid[i][1] != c && grid[i][1] != 'T'){
					continue;
				}
			}
			if(c == '.') continue;
			if( (grid[i][2] == c || grid[i][2] == 'T') && (grid[i][3] == c || grid[i][3] == 'T') ){
				printf("Case #%d: %c won\n", z, c);
				goto a;
			}
		}
		for(int i=0; i<4; i++){
			char c = grid[0][i];
			if(c == 'T'){
				c = grid[1][i];
			}else{
				if( grid[1][i] != c && grid[1][i] != 'T'){
					continue;
				}
			}
			if(c == '.') continue;
			if( (grid[2][i] == c || grid[2][i] == 'T') && (grid[3][i] == c || grid[3][i] == 'T') ){
				printf("Case #%d: %c won\n", z, c);
				goto a;
			}
		}
		
		{
			char c = grid[0][0];
			if(c == 'T'){
				c = grid[1][1];
			}else{
				if( grid[1][1] != c && grid[1][1] != 'T'){
					c = '.';
				}
			}
			if(c != '.' && (grid[2][2] == c || grid[2][2] == 'T') && (grid[3][3] == c || grid[3][3] == 'T')){
				printf("Case #%d: %c won\n", z, c);
				goto a;
			}
			c = grid[0][3];
			if(c == 'T'){
				c = grid[1][2];
			}else{
				if( grid[1][2] != c && grid[1][2] != 'T'){
					c = '.';
				}
			}
			if(c != '.' && (grid[2][1] == c || grid[2][1] == 'T') && (grid[3][0] == c || grid[3][0] == 'T')){
				printf("Case #%d: %c won\n", z, c);
				goto a;
			}
			int n = 0;
			for(int i=0; i<4; i++){
				for(int j=0; j<4; j++){
					if(grid[i][j] == '.'){
						n++;
						goto b;
					}
				}
			}
			b:
			if(n > 0){
				printf("Case #%d: Game has not completed\n", z);
			}else{
				printf("Case #%d: Draw\n", z);
			}
		}
		
		a:
		int asdf;
	}
}