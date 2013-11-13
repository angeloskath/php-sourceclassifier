#include<iostream>
#include<stdio.h>
using namespace std;
int main(){
	int T;
	cin>>T;
	char map[4][5];
	int st;
	char ta;
	for(int Ti=1;Ti<=T;++Ti){
		st=0;
		cout<<"Case #"<<Ti<<": ";
		for(int i=0;i<4;++i){
			scanf("%s",map[i]);
		}

		int count;


		ta='O';
		for(int i=0;i<4;++i){
			count=0;
			for(int j=0;j<4;++j){
				count+=(map[i][j]==ta||map[i][j]=='T');
			}
			if(count==4){
				st=1;
			}
			count=0;
			for(int j=0;j<4;++j){
				count+=(map[j][i]==ta||map[j][i]=='T');
			}
			if(count==4){
				st=1;
			}
		}
		count=0;
		for(int i=0;i<4;++i){
			count+=(map[i][i]==ta||map[i][i]=='T');
		}
		if(count==4)
			st=1;

		count=0;
		for(int i=0;i<4;++i){
			count+=(map[i][3-i]==ta||map[i][3-i]=='T');
		}
		if(count==4)
			st=1;

		if(st){
			cout<<ta<<" won\n";
			continue;
		}
		
		////////////////////////////
		ta='X';
		for(int i=0;i<4;++i){
			count=0;
			for(int j=0;j<4;++j){
				count+=(map[i][j]==ta||map[i][j]=='T');
			}
			if(count==4){
				st=1;
			}
			count=0;
			for(int j=0;j<4;++j){
				count+=(map[j][i]==ta||map[j][i]=='T');
			}
			if(count==4){
				st=1;
			}
		}
		count=0;
		for(int i=0;i<4;++i){
			count+=(map[i][i]==ta||map[i][i]=='T');
		}
		if(count==4)
			st=1;

		count=0;
		for(int i=0;i<4;++i){
			count+=(map[i][3-i]==ta||map[i][3-i]=='T');
		}
		if(count==4)
			st=1;

		if(st){
			cout<<ta<<" won\n";
			continue;
		}

		//////////////////////////
		for(int i=0;i<4&&st==0;++i){
			for(int j=0;j<4&&st==0;++j){
				if(map[i][j]=='.'){
					cout<<"Game has not completed\n";
					st=3;
				}
			}
		}
		if(st)
			continue;

		cout<<"Draw\n";

		
		//for(int i=0;i<4;++i){
		//	cout<<map[i]<<endl;
		//}


	}
	return 0;
}
