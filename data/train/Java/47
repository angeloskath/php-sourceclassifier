import java.util.*;

public class a {
    static String[] status = new String[4];
    public static void main(String[] args) { 
      status[0] = "X won";
      status[1] = "O won";
      status[2] = "Draw";
      status[3] = "Game has not completed";

      Scanner in = new Scanner(System.in);
      int T = in.nextInt();
      char[][] grid = new char[4][];
      for (int i=0; i < 4; i++) grid[i] = new char[4];
      for (int zz=1; zz <= T; zz++) {
        int res = 2;
        for (int i=0; i < 4; i++) {
            String s = in.next();
            for (int j=0; j < 4; j++) {
              grid[i][j] = s.charAt(j);
              if (grid[i][j] == '.') res = 3;
            }
        }
        int x,o;
        
        for (int i=0; i < 4; i++) {
           x=o=0;
           for (int j=0; j < 4; j++) {
             if (grid[i][j] == 'X') x++;
             if (grid[i][j] == 'O') o++;
             if (grid[i][j] == 'T') {x++; o++;}
           }
           if (x==4) res = 0;
           if (o==4) res = 1;
            
           x=o=0;
           for (int j=0; j < 4; j++) {
             if (grid[j][i] == 'X') x++;
             if (grid[j][i] == 'O') o++;
             if (grid[j][i] == 'T') {x++; o++;}
           }
           if (x==4) res = 0;
           if (o==4) res = 1;
        }
        
        x=o=0;
        for (int j=0; j < 4; j++) {
            if (grid[j][j] == 'X') x++;
            if (grid[j][j] == 'O') o++;
            if (grid[j][j] == 'T') {x++; o++;}
        }
        if (x==4) res = 0;
        if (o==4) res = 1;

        x=o=0;
        for (int j=0; j < 4; j++) {
            if (grid[3-j][j] == 'X') x++;
            if (grid[3-j][j] == 'O') o++;
            if (grid[3-j][j] == 'T') {x++; o++;}
        }
        if (x==4) res = 0;
        if (o==4) res = 1;

        System.out.printf("Case #%d: %s\n", zz, status[res]);
      }
    }
}
