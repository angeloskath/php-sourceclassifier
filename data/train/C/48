/** Suvesh Pratapa
 *  suveshp@gmail.com
 *
 *  2013 Google Code Jam - Qualification Round
 *  Question A - Tic-Tac-Toe-Tomek
 */

#include <stdio.h>
#include <stdlib.h>
#include <string.h>

#define TEST_CASE_LINE_COUNT     4
#define MAX_LINE_LENGTH          6
#define SPACE_SEPARATOR          1

const char *xWins = "|XXXX|XXXT|XXTX|XTXX|TXXX|";
const char *yWins = "|OOOO|OOOT|OOTO|OTOO|TOOO|";

// Statuses
// 0 Draw
// 1 X Won
// 2 O Won
// 3 Incomplete

int isLineXWin(const char *line)
{
  if (strstr(xWins, line) != NULL) {
    return 1;
  }
  return 0;
}

int isLineOWin(const char *line)
{
  if (strstr(yWins, line) != NULL) {
    return 1;
  }
  return 0;
}

// Given a 5x5 matrix of the test case (5x5 because
// of null termination) solve for who won.
// 
// Just iterate over the various possibilities. I'm
// sure there's some cool way to do this more
// beautifully, but this gets the job done for up to
// 1000 test cases pretty fast.
int solveTTTTestCase(char tttTestCase[5][5])
{
  int i, j;
  // Iterate rows
  for (i = 0; i < 4; i++) {
    if (isLineXWin(tttTestCase[i]))
      return 1;
    else if (isLineOWin(tttTestCase[i]))
      return 2;
  }

  // Iterate columns
  char tttTestCaseTranspose[5][5];
  for (i = 0; i < 5; i++) {
    for (j = 0; j < 5; j++) {
      tttTestCaseTranspose[i][j] = tttTestCase[j][i];
    }
  }
  for (i = 0; i < 4; i++) {
    if (isLineXWin(tttTestCaseTranspose[i]))
      return 1;
    else if (isLineOWin(tttTestCaseTranspose[i]))
      return 2;
  }

  // Check diagonals
  char line[5];
  line[0] = tttTestCase[0][0];
  line[1] = tttTestCase[1][1];
  line[2] = tttTestCase[2][2];
  line[3] = tttTestCase[3][3];
  line[4] = '\0';
  if (isLineXWin(line))
    return 1;
  else if (isLineOWin(line))
    return 2;

  line[0] = tttTestCase[0][3];
  line[1] = tttTestCase[1][2];
  line[2] = tttTestCase[2][1];
  line[3] = tttTestCase[3][0];
  line[4] = '\0';
  if (isLineXWin(line))
    return 1;
  else if (isLineOWin(line))
    return 2;

  return 0;
}

int solveTestCase(FILE *input)
{
  char tttTestCase[5][5];
  int i;
  char line[MAX_LINE_LENGTH];
  // Check whether all blocks are filled.
  // That would constitute a draw in case
  // no one won.
  int allFilled = 1;

  for (i = 0; i < TEST_CASE_LINE_COUNT; i++) {
    fgets(line, MAX_LINE_LENGTH, input);
    if (strchr(line, '.') != NULL) {
      allFilled = 0;
    }
    strncpy(tttTestCase[i], line, 4);
    tttTestCase[i][4] = '\0';
  }

  int result = solveTTTTestCase(tttTestCase);
  // No one won, but not all are filled either
  // so this is an incomplete game.
  if (result == 0 && !allFilled) {
    return 3;
  }
  return result;
}

int solveA(FILE *input)
{
  int i;
  char line[MAX_LINE_LENGTH];
  long testCaseCount;
  // Read the number of test cases
  fgets(line, MAX_LINE_LENGTH, input);
  sscanf(line, "%ld", &testCaseCount);

  for (i = 0; i < testCaseCount; i++) {
    // Solve for each test case
    int result = solveTestCase(input);
    printf("Case #%d: ", i+1);
    switch (result)
    {
      case 0:  printf("Draw\n");
               break;
      case 1:  printf("X won\n");
               break;
      case 2:  printf("O won\n");
               break;
      case 3:  printf("Game has not completed\n");
               break;
      default: break;
    }
    if (SPACE_SEPARATOR) {
      // Eat the space
      fgets(line, MAX_LINE_LENGTH, input);
    }
  }
}

int main(int argc, char **argv)
{
  FILE *input = fopen("A-large.in", "rt");
  if (input == NULL) {
    printf("Error opening the file!\n");
    return -1;
  }
  return solveA(input);
}
