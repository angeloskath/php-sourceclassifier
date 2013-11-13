import java.io.*;
import java.util.Scanner;

public class QA {
  public static void main(String[] args) {

    final String PREFIX = "/home/saul/IdeaProjects/CodeJam/src/";

    try {
      Scanner sc = new Scanner(new File(PREFIX + "QA-large.in"));
      PrintWriter out = new PrintWriter(new File(PREFIX + "QA.out"));
      //PrintWriter out = new PrintWriter(System.out);
      int n = sc.nextInt();
      for (int iCases = 0; iCases < n; iCases++) {
        String[] board = new String[4];
        for (int iBoard = 0; iBoard < board.length; iBoard++) {
          board[iBoard] = sc.next();
        }

        boolean hasX = false , hasO = false;
        boolean hasEmpty = false;

        for (int dx = -1; dx < 2; dx++) {
          for (int dy = -1; dy < 2; dy++) {
            if ( dx != 0 || dy != 0 ){
              for (int i = 0; i < board.length; i++) {
                for (int j = 0; j < board[0].length(); j++) {
                  hasEmpty |= board[i].charAt(j) == '.';
                  int sizeX = 0 , sizeO = 0;
                  for (int iSize = 0; iSize < 4; iSize++) {
                    int nX = iSize * dx + i , nY = iSize * dy + j;
                    if ( nX >= 0 && nX < 4 && nY >= 0 && nY < 4 ){
                      if ( board[nX].charAt(nY) == 'T' ){
                        ++sizeO; ++sizeX;
                      }
                      if ( board[nX].charAt(nY) == 'X' ){
                        ++sizeX; sizeO = 0;
                      }
                      if ( board[nX].charAt(nY) == 'O' ){
                        ++sizeO; sizeX = 0;
                      }
                      if ( board[nX].charAt(nY) == '.' ){
                        sizeO = sizeX = 0;
                      }
                    }
                  }
                  hasX |= sizeX == 4;
                  hasO |= sizeO == 4;
                }
              }
            }
          }
        }
        out.print("Case #" + (iCases+1) +": ");
        if ( hasO ){
          out.println("O won");
        }else if ( hasX ){
          out.println("X won");
        }else if ( hasEmpty ){
          out.println("Game has not completed");
        }else{
          out.println("Draw");
        }
      }
      out.close();
    } catch (Exception e) {
      e.printStackTrace();
    }
  }
}
