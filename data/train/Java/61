import java.awt.geom.*;
import java.io.*;
import java.math.*;
import java.util.*;
import java.util.regex.*;
import static java.lang.Math.*;
import static java.lang.System.*;
public class A {

    public A() throws Exception {
        int caseCount = Integer.parseInt(br.readLine());
        for (int caseNum=1; caseNum<=caseCount; caseNum++) {
            out.printf("Case #%d: ", caseNum);

            char[][] map = new char[4][];
            for (int i=0; i<4; i++) {
                map[i] = br.readLine().toCharArray();
            }
            br.readLine();

            boolean xWon = false;
            boolean oWon = false;

            boolean xWonDig1 = true;
            boolean oWonDig1 = true;
            boolean xWonDig2 = true;
            boolean oWonDig2 = true;
            for (int i=0; i<4; i++) {
                if (map[i][i]!='X'&&map[i][i]!='T') xWonDig1 = false;
                if (map[i][i]!='O'&&map[i][i]!='T') oWonDig1 = false;

                if (map[i][3-i]!='X'&&map[i][3-i]!='T') xWonDig2 = false;
                if (map[i][3-i]!='O'&&map[i][3-i]!='T') oWonDig2 = false;

                boolean xWonRow = true;
                boolean oWonRow = true;
                for (int j=0; j<4; j++) {
                    if (map[i][j]!='X'&&map[i][j]!='T') xWonRow = false;
                    if (map[i][j]!='O'&&map[i][j]!='T') oWonRow = false;
                }
                if (xWonRow) xWon = true;
                if (oWonRow) oWon = true;

                boolean xWonCol = true;
                boolean oWonCol = true;
                for (int j=0; j<4; j++) {
                    if (map[j][i]!='X'&&map[j][i]!='T') xWonCol = false;
                    if (map[j][i]!='O'&&map[j][i]!='T') oWonCol = false;
                }
                if (xWonCol) xWon = true;
                if (oWonCol) oWon = true;
            }
            if (xWonDig1) xWon = true;
            if (oWonDig1) oWon = true;
            if (xWonDig2) xWon = true;
            if (oWonDig2) oWon = true;

            String ans = "impossible!";

            if (xWon) ans = "X won";
            else if (oWon) ans = "O won";
            else if (!xWon&&!oWon) {
                boolean empty = false;
                for (int i=0; i<4; i++) {
                    for (int j=0; j<4; j++) {
                        if (map[i][j]=='.') empty = true;
                    }
                }
                if (empty) ans = "Game has not completed";
                else ans = "Draw";
            }
            out.println(ans);
        }
    }

    // {{{
    BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
    public static void main(String[] args) throws Exception {
        new A();
    }
    public static void debug(Object... arr) {
        System.err.println(Arrays.deepToString(arr));
    }
    // }}}
}
