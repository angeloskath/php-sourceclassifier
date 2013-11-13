//#include <iostream>
#include <fstream>
#include <vector>
#include <set>
#include <map>
#include <cstring>
#include <string>
#include <cmath>
#include <cassert>
#include <ctime>
#include <algorithm>
#include <sstream>
#include <list>
#include <queue>
#include <deque>
#include <stack>
#include <cstdlib>
#include <cstdio>
#include <iterator>
#include <functional>
#include <bitset>
#define mp make_pair
#define pb push_back

#ifdef LOCAL
#define eprintf(...) fprintf(stderr,__VA_ARGS__)
#else
#define eprintf(...)
#endif

#define TIMESTAMP(x) eprintf("["#x"] Time : %.3lf s.\n", clock()*1.0/CLOCKS_PER_SEC)

#if ( _WIN32 || __WIN32__ )
    #define LLD "%I64d"
#else
    #define LLD "%lld"
#endif

using namespace std;

#define TASKNAME "A"
#define TASKMOD "large"

typedef long long ll;
typedef long double ld;

void PreCalc(){
}

char s[5][5];

void solve(){
	for (int i = 0; i < 4; i++)
		for (int j = 0; j < 4; j++)
			scanf(" %c",&s[i][j]);
                   

	for (int i = 0; i < 4; i++){
		int cntx,cnto;
		cntx = cnto = 0;
		for (int j = 0; j < 4; j++)
			if (s[i][j] == 'X')
				cntx++;
			else if (s[i][j] == 'O')
				cnto++;
			else if (s[i][j] == 'T')
				cntx++,cnto++;

		if (cntx == 4){
			printf("X won\n");
			return;
		}

		if (cnto == 4){
			printf("O won\n");
			return;
		}          
	}

	for (int j = 0; j < 4; j++){
		int cntx,cnto;
		cntx = cnto = 0;
		for (int i = 0; i < 4; i++)
			if (s[i][j] == 'X')
				cntx++;
			else if (s[i][j] == 'O')
				cnto++;
			else if (s[i][j] == 'T')
				cntx++,cnto++;

		if (cntx == 4){
			printf("X won\n");
			return;
		}

		if (cnto == 4){
			printf("O won\n");
			return;
		}          
	}

	{
		int cntx,cnto;
		cntx = cnto = 0;
		for (int i = 0; i < 4; i++)
			if (s[i][i] == 'X')
				cntx++;
			else if (s[i][i] == 'O')
				cnto++;
			else if (s[i][i] == 'T')
				cntx++,cnto++;

		if (cntx == 4){
			printf("X won\n");
			return;
		}

		if (cnto == 4){
			printf("O won\n");
			return;
		}          
	}

	{
		int cntx,cnto;
		cntx = cnto = 0;
		for (int i = 0; i < 4; i++)
			if (s[i][3-i] == 'X')
				cntx++;
			else if (s[i][3-i] == 'O')
				cnto++;
			else if (s[i][3-i] == 'T')
				cntx++,cnto++;

		if (cntx == 4){
			printf("X won\n");
			return;
		}

		if (cnto == 4){
			printf("O won\n");
			return;
		}          
	}

	for (int i = 0; i < 4; i++)
		for (int j = 0; j < 4; j++)
			if (s[i][j] == '.'){
				printf("Game has not completed\n");
				return;
			}
	printf("Draw\n");
}


int main(){
  freopen(TASKNAME"-"TASKMOD".in","r",stdin);
  freopen(TASKNAME"-"TASKMOD".out","w",stdout);
	
  PreCalc();	

  char buf[1000];
  int testNum;
  gets(buf);
  sscanf(buf,"%d",&testNum);

  for (int testId = 1; testId <= testNum; testId++){
  	printf("Case #%d: ",testId);
  	solve();
  	if (testId <= 20 || testId >= testNum - 20 || testId % 10 == 0)
	  	eprintf("Test %d\n",testId);
  }
      
  TIMESTAMP(end);
  return 0;
}