#include<stdio.h>
char a[4][4];
int main(){
int t,v=0,i,j;
scanf("%d",&t);
while(v++<t){
printf("Case #%d: ",v);
char c;
	for(i=0;i<4;i++){
		scanf("%c",&c);
		scanf("%s",a[i]);
	}
int rowX[4]={0,0,0,0},rowY[4]={0,0,0,0},colX[4]={0,0,0,0};
int colY[4]={0,0,0,0},d1X=0,d2X=0,d2Y=0,d1Y=0,empty=0;

for(i=0;i<4;i++)
	for(j=0;j<4;j++){
		if(a[i][j]=='X'){
			rowX[i]++;
			colX[j]++;
			if(i==j)d1X++;
			if(i+j==3)d2X++;
		}
		else if(a[i][j]=='O'){
			rowY[i]++;
			colY[j]++;
			if(i==j)d1Y++;
			if(i+j==3)d2Y++;
		}
		else if(a[i][j]=='T'){
			rowX[i]++;
			colX[j]++;
			if(i==j)d1X++;
			if(i+j==3)d2X++;
			
			rowY[i]++;
			colY[j]++;
			if(i==j)d1Y++;
			if(i+j==3)d2Y++;
		}
		else if(a[i][j]=='.')empty++;
	}
//for(i=0;i<4;i++){
//	for(j=0;j<4;j++)
//	printf("%c",a[i][j]);
//printf("\n");
//}
int f=0;
for(i=0;i<4;i++)
	if(rowX[i]==4 || colX[i]==4 || d1X==4 || d2X==4){
		printf("X won\n");	
		f=1;
		break;
	}
if(!f)	
	for(i=0;i<4;i++)
	if(rowY[i]==4 || colY[i]==4 || d1Y==4 || d2Y==4){
		printf("O won\n");	
		f=1;
		break;
	}
if(!f){
	if(empty)
		printf("Game has not completed\n");
	else
		printf("Draw\n");
}
}
return 0;
}
