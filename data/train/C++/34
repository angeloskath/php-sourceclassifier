
#include <iostream>
#include <cstdlib>
#include <cstring>
#include <cstdio>
#include <algorithm>
#include <cmath>
#include <vector>
#include <queue>
#define FOR(it,c) for ( __typeof((c).begin()) it=(c).begin(); it!=(c).end(); it++ )

typedef long long int LL;

using namespace std;

char b[10][10];

bool end(){
	for(int i=0;i<4;i++)
		for(int j=0;j<4;j++)
			if(b[i][j]=='.')
				return false;
	return true;
}
bool win(char c){
	int i,j;
	for(i=0; i<4; i++){
		for(j=0; j<4; j++){
			if(b[i][j]!=c && b[i][j]!='T')break;
		}
		if(j==4)return true;
	}
	for(j=0; j<4; j++){
		for(i=0; i<4; i++){
			if(b[i][j]!=c && b[i][j]!='T') break;
		}
		if(i==4)return true;
	}
	for(i=0; i<4; i++){
		if(b[i][i]!=c && b[i][i]!='T') break;
	}
	if(i==4)return true;
	for(i=0; i<4; i++){
		if(b[i][3-i]!=c && b[i][3-i]!='T')break;
	}
	if(i==4)return true;
	return false;
}

void go(){
	static int i=0;
	for(int i=0;i<4;i++){
		scanf("%s",b[i]);
	}
	printf("Case #%d: ",++i);
	if(win('O')){
		puts("O won");
	}
	else if(win('X')){
		puts("X won");	
	}
	else if(end()){
		puts("Draw");
	}
	else{
		puts("Game has not completed");
	}
}

int main(){

	int n;
	scanf("%d",&n);
	while(n--)go();

	return 0;
}
