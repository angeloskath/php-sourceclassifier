import java.io.FileInputStream;
import java.io.PrintStream;
import java.util.Scanner;


public class ATicTacToeTomek {
  int N = 4;
  char [][] B = new char[4][4];
  Scanner in;

  public static void main(String[] args) throws Exception{
    new ATicTacToeTomek().run();
  }

  void run() throws Exception {
    //System.setIn(new FileInputStream("A-test.in"));
    System.setIn(new FileInputStream("A-large.in"));
    System.setOut(new PrintStream("A-large.out"));
    in = new Scanner(System.in);
    int cases = in.nextInt();
    in.nextLine();
    for (int c = 1; c <=cases; ++c) {
      read();
      String res = "Game has not completed";

      if(win('X'))
        res = "X won";
      else if(win('O'))
        res = "O won";
      else if (full())
        res = "Draw";
      System.out.println(String.format("Case #%d: %s", c, res));
    }
  }

  void read() {
    for(int r =0; r < N; ++r) {
      String line = in.nextLine();
      for ( int c = 0; c < N; ++c)
        B[r][c] = line.charAt(c);
    }
    if(in.hasNextLine())
      in.nextLine();
  }

  boolean win(char p) {
    for(int r = 0; r < N; ++r)
      if(countMatches(p,r,0,0,1) == N) return true;
    for(int c = 0; c < N; ++c)
      if(countMatches(p,0,c,1,0) == N) return true;
    for(int i = 0; i < N; ++i)
      if(countMatches(p,0,0,1,1) == N) return true;
    for(int i = 0; i < N; ++i)
      if(countMatches(p,0,N-1,1,-1) == N) return true;
    return false;
  }

  boolean full() {
    for(int r = 0; r < N; ++r)
      for(int c = 0; c < N; ++c)
        if(B[r][c] == '.')
          return false;
    return true;
  }

  int countMatches(char p, int r, int c, int dr, int dc) {
    int matches = 0;
    for(;r < N && c<N; r+=dr, c+=dc)
      if(B[r][c] == p || B[r][c] == 'T' )
        ++matches;
    return matches;
  }
}
