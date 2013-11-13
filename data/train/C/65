#include<stdio.h>
#include<stdlib.h>
#define MAX_ARRAY 4
void main(void){
	int i,j,t,tcase;
	char board[MAX_ARRAY+1][MAX_ARRAY+1];
	char hasDot;
	char winner;
	FILE * fin, * fout;
	fin = fopen("A-large.in","rw");
	fout = fopen("out.txt","ww");
	fscanf(fin,"%d",&tcase);
//	getch();
	t=1;
	while(t<=tcase){
		for(i=0;i<4;i++) {
			fscanf(fin,"%s",board[i]);
			printf("%d:%s*\n",t,board[i]);
		}
		fgets(board[4],0,fin);
		hasDot = 0;
		winner = 0;
		for(i=0;i<4;i++){
			board[i][4]='T';
			for(j=0;j<4;j++){
				if(!(board[i][4]=='T'||board[i][j]=='T'||board[i][4]==board[i][j])) break;
				if(board[i][j]!='T')
					board[i][4]=board[i][j];
			}
			if(j==4&&board[i][4]!='.'&&board[i][4]!='T'){
				winner = board[i][4];
				break;
			}
			board[i][4]='T';
			for(j=0;j<4;j++){
				if(!(board[i][4]=='T'||board[j][i]=='T'||board[i][4]==board[j][i])) break;
				if(board[j][i]!='T')
					board[i][4]=board[j][i];
			}
			if(j==4&&board[i][4]!='.'&&board[i][4]!='T'){
				winner = board[i][4];
				break;
			}
		}
		if(!winner){
			board[0][4]='T';
			for(j=0;j<4;j++){
				if(!(board[0][4]=='T'||board[j][j]=='T'||board[0][4]==board[j][j])) break;
				if(board[j][j]!='T')
					board[0][4]=board[j][j];
			}
			if(j==4&&board[0][4]!='.'&&board[0][4]!='T'){
				winner = board[0][4];
				//break;
			}
			board[0][4]='T';
			for(j=0;j<4;j++){
				if(!(board[0][4]=='T'||board[j][3-j]=='T'||board[0][4]==board[j][3-j])) break;
				if(board[j][3-j]!='T')
					board[0][4]=board[j][3-j];
			}
			if(j==4&&board[0][4]!='.'&&board[0][4]!='T'){
				winner = board[0][4];
				//break;
			}
		}
		fprintf(fout,"Case #%d: ",t);
		if(winner){
			fprintf(fout,"%c won\n",winner);
		}else{
			for(i=0;i<4;i++){
				for(j=0;j<4;j++){
					if(board[i][j]=='.'){
						hasDot=1;
						break;
					}
				}
				if(hasDot){
					break;
				}
			}
			if(hasDot) fprintf(fout,"Game has not completed\n");
			else fprintf(fout,"Draw\n");
		}
		t++;
	}
	fclose(fin);
	fclose(fout);
}