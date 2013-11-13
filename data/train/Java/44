// Author: Alejandro Sotelo Arevalo
package qualification;

import java.io.*;

public class A_TicTacToeTomek {
  // --------------------------------------------------------------------------------
  private static String ID="A";
  private static String NAME="large";
  private static String STAGE="qualification";
  private static boolean STANDARD_OUTPUT=false;
  // --------------------------------------------------------------------------------
  private static BufferedReader reader=null;
  private static PrintStream output=null;
  // --------------------------------------------------------------------------------
  public static void main(String[] args) throws Throwable {
    try (BufferedReader bufferedReader=reader=new BufferedReader(new FileReader(new File("data/"+STAGE+"/"+ID+"-"+NAME+".in")))) {
      try (PrintStream printStream=output=STANDARD_OUTPUT?System.out:new PrintStream(new File("data/"+STAGE+"/"+ID+"-"+NAME+".out"))) {
        process();
      }
    }
  }
  // --------------------------------------------------------------------------------
  private static void process() throws Throwable {
    for (int c=1,T=Integer.parseInt(reader.readLine()); c<=T; c++) {
      char[][] board=new char[4][];
      for (int i=0; i<4; i++) {
        board[i]=reader.readLine().toUpperCase().toCharArray();
      }
      reader.readLine();
      char r=getState(board);
      output.println("Case #"+c+": "+(r=='O'||r=='X'?r+" won":(r=='D'?"Draw":"Game has not completed")));
    }
  }
  private static char getState(char[][] board) {
    for (int i=0; i<4; i++) {
      char state=getState(board[i][0],board[i][1],board[i][2],board[i][3]);
      if (state!='.') return state;
    }
    for (int j=0; j<4; j++) {
      char state=getState(board[0][j],board[1][j],board[2][j],board[3][j]);
      if (state!='.') return state;
    }
    {
      char state=getState(board[0][0],board[1][1],board[2][2],board[3][3]);
      if (state!='.') return state;
    }
    {
      char state=getState(board[0][3],board[1][2],board[2][1],board[3][0]);
      if (state!='.') return state;
    }
    for (int i=0; i<4; i++) {
      for (int j=0; j<4; j++) {
        if (board[i][j]=='.') return 'N';
      }
    }
    return 'D';
  }
  private static char getState(char a, char b, char c, char d) {
    char t='T';
    for (char z:new char[]{'O','X'}) {
      if ((a==t||a==z)&&(b==t||b==z)&&(c==t||c==z)&&(d==t||d==z)) return z;
    }
    return '.';
  }
}
