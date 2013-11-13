#include <bits/stdc++.h>

using namespace std;



#define fr(i,a,b) for(int i=a;i<b;++i)




bool xw, ow;

char gr[10][10];
int t;


bool check(char l){
	char graux[10][10];
	memcpy(graux,gr,sizeof gr);
	fr(i,0,4) fr(j,0,4) if(graux[i][j] == 'T') graux[i][j] = l;
	fr(i,0,4){
		int cnt = 0, cnt2 = 0;
		fr(j,0,4) if(graux[i][j] == l) cnt++;
		fr(j,0,4) if(graux[j][i] == l) cnt2++;
		if(cnt == 4 || cnt2 == 4) return true;
	}
	int cnt = 0, cnt2 = 0;
	fr(i,0,4){
		if(graux[i][i] == l) cnt++;
		if(graux[i][3-i] == l) cnt2++;
	}
	if(cnt == 4 || cnt2 == 4) return true;
	return false;
}




int main(){
	scanf("%d",&t);
	fr(cas,1,t+1){
		fr(i,0,4) scanf("%s",gr[i]);
		xw = ow = false;
		bool cabou = true;
		fr(i,0,4) fr(j,0,4) if(gr[i][j] == '.') cabou = false;
		xw = check('X');
		ow = check('O');
		printf("Case #%d: ",cas);
		if(xw) printf("X won\n");
		else if(ow) printf("O won\n");
		else if(!cabou) printf("Game has not completed\n");
		else printf("Draw\n");
	}
	return 0;
}
































