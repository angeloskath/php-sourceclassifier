#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <assert.h>

#define MAXROW (4)
#define MAXCOL (4)
typedef struct board_s {
  char b[MAXROW][MAXCOL];
} board_t;

char buf[1024];

void verify_board(board_t * board) {
  int r,c;
  int num_empty = 0;
  // check for XWIN
  char ch = 'X';
  for( r=0; r < MAXROW; r++) {
    int cons = 0;
    for( c=0;c < MAXCOL;c++) {
      if( board->b[r][c] == ch ||
	  board->b[r][c] == 'T' ) {
	cons++;
      }
      if( board->b[r][c] == '.' ) {
	num_empty++;
      }
    }
    if( cons == 4 ) {
      printf( "%c won\n", ch);
      return;
    }      
  }
  for( c=0;c < MAXCOL;c++) {
    int cons = 0;
    for( r=0; r < MAXROW; r++) {
      if( board->b[r][c] == ch ||
	  board->b[r][c] == 'T' ) {
	cons++;
      }
      if( board->b[r][c] == '.' ) {
	num_empty++;
      }
    }
    if( cons == 4 ) {
      printf( "%c won\n", ch);
      return;
    }      
  }
  int cons = 0;
  for( c=0;c < MAXCOL;c++) {
    if( board->b[c][c] == ch ||
	board->b[c][c] == 'T' ) {
      cons++;
    }
    if( board->b[c][c] == '.' ) {
      num_empty++;
    }
  }
  if( cons == 4 ) {
    printf( "%c won\n", ch);
    return;
  }      
  cons = 0;
  for( c=0;c < MAXCOL;c++) {
    if( board->b[c][3-c] == ch ||
	board->b[c][3-c] == 'T' ) {
      cons++;
    }
    if( board->b[c][3-c] == '.' ) {
      num_empty++;
    }
  }
  if( cons == 4 ) {
    printf( "%c won\n", ch);
    return;
  }      


  ch = 'O';
  for( r=0; r < MAXROW; r++) {
    int cons = 0;
    for( c=0;c < MAXCOL;c++) {
      if( board->b[r][c] == ch ||
	  board->b[r][c] == 'T' ) {
	cons++;
      }
      if( board->b[r][c] == '.' ) {
	num_empty++;
      }
    }
    if( cons == 4 ) {
      printf( "%c won\n", ch);
      return;
    }      
  }
  for( c=0;c < MAXCOL;c++) {
    int cons = 0;
    for( r=0; r < MAXROW; r++) {
      if( board->b[r][c] == ch ||
	  board->b[r][c] == 'T' ) {
	cons++;
      }
      if( board->b[r][c] == '.' ) {
	num_empty++;
      }
    }
    if( cons == 4 ) {
      printf( "%c won\n", ch);
      return;
    }      
  }
  cons = 0;
  for( c=0;c < MAXCOL;c++) {
    if( board->b[c][c] == ch ||
	board->b[c][c] == 'T' ) {
      cons++;
    }
    if( board->b[c][c] == '.' ) {
      num_empty++;
    }
  }
  if( cons == 4 ) {
    printf( "%c won\n", ch);
    return;
  }      
  cons = 0;
  for( c=0;c < MAXCOL;c++) {
    if( board->b[c][3-c] == ch ||
	board->b[c][3-c] == 'T' ) {
      cons++;
    }
    if( board->b[c][3-c] == '.' ) {
      num_empty++;
    }
  }
  if( cons == 4 ) {
    printf( "%c won\n", ch);
    return;
  }      
  if(num_empty) {
    printf( "Game has not completed\n");
  }else{
    printf( "Draw\n");
  }
}

void main(int argc, char **argv) {
  FILE *fd = fopen(argv[1], "r");
  
  assert(fd);
  
  fgets((char*)buf, 1024, fd);
  int NUMCASE;
  sscanf(buf, "%d", &NUMCASE);
  
  int curcase;
  board_t board;
  for( curcase = 1; curcase <= NUMCASE; curcase++ ) {
    printf( "Case #%d: ", curcase );
    int r;
    for( r = 0; r < MAXROW; r++ ) {
      fgets((char*)buf, 1024, fd);
      assert(strlen(buf) == 5);
      buf[4] = 0;
      memcpy(&board.b[r][0], buf, 4);
    }
    verify_board(&board);
    fgets((char*)buf, 1024, fd);
  }
}
