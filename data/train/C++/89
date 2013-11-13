#include <stdio.h>

char arr[5][5];
int icase;

void Work(){
  bool xwon, owon;
  
  for(int i=0; i<4; i++){
    xwon = owon = true;
    for(int j=0; j<4; j++){
      if((arr[i][j] == 'O')||(arr[i][j] == '.')) xwon = false;
      if((arr[i][j] == 'X')||(arr[i][j] == '.')) owon = false;
    }
    
    if(owon){
      printf("Case #%d: O won\n", icase+1);
      return;
    }
    else if(xwon){
      printf("Case #%d: X won\n", icase+1);
      return;
    }
  }
  
  for(int i=0; i<4; i++){
    xwon = owon = true;
    for(int j=0; j<4; j++){
      if((arr[j][i] == 'O')||(arr[j][i] == '.')) xwon = false;
      if((arr[j][i] == 'X')||(arr[j][i] == '.')) owon = false;
    }
    
    if(owon){
      printf("Case #%d: O won\n", icase+1);
      return;
    }
    else if(xwon){
      printf("Case #%d: X won\n", icase+1);
      return;
    }
  }
  
  xwon = owon = true;
  for(int i=0; i<4; i++){
      if((arr[i][i] == 'O')||(arr[i][i] == '.')) xwon = false;
      if((arr[i][i] == 'X')||(arr[i][i] == '.')) owon = false;
  }
  
  if(owon){
    printf("Case #%d: O won\n", icase+1);
    return;
  }
  else if(xwon){
    printf("Case #%d: X won\n", icase+1);
    return;
  }
  
  xwon = owon = true;
  for(int i=0; i<4; i++){
      if((arr[i][3-i] == 'O')||(arr[i][3-i] == '.')) xwon = false;
      if((arr[i][3-i] == 'X')||(arr[i][3-i] == '.')) owon = false;
  }
  
  if(owon){
    printf("Case #%d: O won\n", icase+1);
    return;
  }
  else if(xwon){
    printf("Case #%d: X won\n", icase+1);
    return;
  }
  
  for(int i=0; i<4; i++){
    for(int j=0; j<4; j++){
      if(arr[i][j] == '.') {
        printf("Case #%d: Game has not completed\n", icase+1);
        return;
      }
    }
  }
  
  printf("Case #%d: Draw\n", icase+1);
}

int main(){
  int jcase;
  
  freopen("A-large.in", "r", stdin);
  freopen("A-large.out", "w", stdout);
  
  scanf("%d", &jcase);
  for(icase=0; icase<jcase; icase++){
    gets(arr[0]);
    for(int i=0; i<4; i++) gets(arr[i]);
    
    Work();
  }
}
