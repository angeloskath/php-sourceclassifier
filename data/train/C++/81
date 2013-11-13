#include <iostream>
#include <vector>
#include <algorithm>
#include <stdio.h>
#include <stdlib.h>
#include <string.h>
using namespace std;

int m[16];

bool win(char c){
	for(int i=0;i<4;i++){
		if(m[i]&m[i+4]&m[i+8]&m[i+12]&c){
			//printf("c %d %d %d %d %d\n",i,m[i],m[i+4],m[i+8],m[i+12]);
			return true;
		}
		if(m[4*i]&m[4*i+1]&m[4*i+2]&m[4*i+3]&c){
			//printf("r %d %d %d %d %d\n",i,m[4*i],m[4*i+1],m[4*i+1],m[4*i+3]);
			return true;
		}
	}
	if(m[0]&m[5]&m[10]&m[15]&c) return true;
	if(m[3]&m[6]&m[9]&m[12]&c) return true;
	return false;
}

bool draw(){
	for(int i=0;i<16;i++) if(m[i]==0) return false;
	return true;
}

int main(int argc, char *argv[]) {
	int T;
	freopen("/Users/vanhoa/Documents/dev/codejam/A-large.in","r",stdin);
	freopen("/Users/vanhoa/Documents/dev/codejam/A-large.out","w",stdout);
	scanf("%d",&T);
	for(int t=1;t<=T;t++){
		for(int i=0;i<16;){
			char c=getchar();
			if(c=='.') m[i++]=0;
			else if(c=='X') m[i++]=1;
			else if(c=='O') m[i++]=2;
			else if(c=='T') m[i++]=3;
		}
		if(win(1)) printf("Case #%d: X won\n",t);
		else if(win(2)) printf("Case #%d: O won\n",t);
		else if(draw()) printf("Case #%d: Draw\n",t);
		else printf("Case #%d: Game has not completed\n",t);
	}
}