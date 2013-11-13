#include<stdio.h>
#include<stdlib.h>
#include<math.h>
char *pname;
int checkBrd(int myBrd[4][4],FILE *fpOut) {
 	int i,j,Xwon=0,Owon=0,notComplete=0;
        int sumTop[4]={0,0,0,0},sumBot[4]={0,0,0,0},sumDig[2]={0,0};
	for (i=0;i<4;i++) {
		for (j=0;j<4;j++) {
			sumTop[i]+=myBrd[i][j];
			sumBot[j]+=myBrd[i][j];
			if (i==j) {
				sumDig[0]+=myBrd[i][j];
			}
			if (i==(3-j)) {
				sumDig[1]+=myBrd[i][j];
			}
			if(myBrd[i][j]> 120) {
				notComplete=1;
			}
		}
	}
	for (i=0;i<4;i++) {
		if(sumTop[i]==3 || sumTop[i]==4 || sumBot[i]==3 || sumBot[i]==4  ) {
			Owon=1;
		} 
		if(sumTop[i]==-3 || sumTop[i]==-4 || sumBot[i]==-3 || sumBot[i]==-4 ) {
			Xwon=1;
		}
	}
	for (i=0;i<2;i++) {
		if(sumDig[i]==3 || sumDig[i]==4 || sumDig[i]==3 || sumDig[i]==4  ) {
			Owon=1;
		} 
		if(sumDig[i]==-3 || sumDig[i]==-4 || sumDig[i]==-3 || sumDig[i]==-4 ) {
			Xwon=1;
		}
	}
	if(Owon == 1 && Xwon == 1 ) {
		fprintf(fpOut,"ERROR");
	} else if (Owon ==1 ) {
		fprintf(fpOut,"O won");
	} else if (Xwon ==1 ) {
		fprintf(fpOut,"X won");
	} else if (notComplete == 1) {
		fprintf(fpOut,"Game has not completed");
	} else {
		fprintf(fpOut,"Draw");
	}

	fprintf(fpOut,"\n");
	return(0);
}

void Usage(char *Msg,int status) {
	printf("Usage : %s FileName\n",pname);
	printf("Example : %s testFile1\n",pname);
	printf("%s\n",Msg);
	exit(status);
}
int main(int argc,char *argv[]) {
	char a;
	pname=argv[0];
	printf("VIVEK : Arguments count %d \n",argc);
	if(argc != 2) {
		Usage("ERROR: No Argument Found",255);
	} 
	FILE *fp,*fpOut;
	char *fileName=argv[1];
	fp=fopen(fileName,"r");
	fpOut=fopen("TTResult","w");
	char *line;
	char c;
	int totalCount,noSteps,i,j,k,stepLen,stepCount,time,myBrd[4][4];
	char stepAB;
	fscanf(fp,"%d",&totalCount);
	printf("Count : %d\n",totalCount);
	fscanf(fp,"%c",&stepAB);
	for(i=0;i<totalCount;i++) {
		for (j=0;j<4;j++) {
			for (k=0;k<4;k++) {
				fscanf(fp,"%c",&stepAB);
				printf(">>%c<<",stepAB);
                                if(stepAB == 'O' ) {
					myBrd[j][k]=1;
  				} else if(stepAB == 'X' ) {
					myBrd[j][k]=-1;
  				} else if(stepAB == 'T' ) {
					myBrd[j][k]=0;
  				} else {
					myBrd[j][k]=123;
				}
			}
			fscanf(fp,"%c",&stepAB);
			printf("\n");
		}
		fprintf(fpOut,"Case #%d: ",(i+1));
		checkBrd(myBrd,fpOut);
		fscanf(fp,"%c",&stepAB);
		
	}
}
