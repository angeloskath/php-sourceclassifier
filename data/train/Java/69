
import java.io.File;
import java.io.FileNotFoundException;
import java.io.PrintWriter;
import java.util.Scanner;

public class A {

    public static void main(String[] args) throws FileNotFoundException {
        Scanner in = new Scanner(new File(A.class.getSimpleName() + ".in"));
        PrintWriter out = new PrintWriter(new File(A.class.getSimpleName() + ".out"));
        int T = in.nextInt();
        for (int i = 0; i < T; i++) {
            String s = "Case #" + (i + 1) + ": " + new A().solve(in);
            out.println(s);
            System.out.println(s);
        }
        out.close();
    }

    private String solve(Scanner in) {
        char[][] a = new char[4][4];
        for (int i = 0; i < 4; i++) {
            String s = in.next();
            for (int j = 0; j < 4; j++) {
                a[i][j] = s.charAt(j);
            }
        }
        String res = "Draw";
        for (int i = 0; i < 4; i++) {
            for (int j = 0; j < 4; j++) {
                if (a[i][j] == '.') res = "Game has not completed";
            }
        }
        for (char c : new char[]{'X', 'O'}) {
            boolean win = false;
            boolean d1w = true;
            boolean d2w = true;
            for (int i = 0; i < 4; i++) {
                boolean rw = true;
                boolean cw = true;
                for (int j = 0; j < 4; j++) {
                    if (a[i][j] != c && a[i][j] != 'T') rw = false;
                    if (a[j][i] != c && a[j][i] != 'T') cw = false;
                }
                if (rw || cw) win = true;
                if (a[i][i] != c && a[i][i] != 'T') d1w = false;
                if (a[3 - i][i] != c && a[3 - i][i] != 'T') d2w = false;
            }
            if (d1w || d2w) win = true;

            if (win) {
                res = c + " won";
            }
        }
        return res;
    }
}