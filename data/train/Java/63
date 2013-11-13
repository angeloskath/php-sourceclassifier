
import java.io.BufferedReader;
import java.io.FileReader;
import java.io.InputStreamReader;
import java.io.PrintWriter;
import java.util.StringTokenizer;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 *
 * @author bgamlath
 */
public class Main {

    /**
     * @param args the command line arguments
     */
    static BufferedReader in;
    static PrintWriter out;
    static StringTokenizer stk;

    public static void main(String[] args) throws Exception {
        in = new BufferedReader(new FileReader("in.txt"));
        out = new PrintWriter("out.txt");
        stk = new StringTokenizer(in.readLine());
        // Start of User Code

        int T = ni();
        for (int i = 1; i <= T; i++) {
            printf("Case #%d: %s\n", i, proc());
        }


        // End of User Code
        in.close();
        out.close();
    }

    static String proc() throws Exception {
        String[] b = new String[4];
        for (int i = 0; i < 4; i++) {
            b[i] = ns();
            //System.out.println(b[i]);
        }
        if (wins(b, 'X')) {
            return "X won";
        }
        if (wins(b, 'O')) {
            return "O won";
        }
        if (draws(b)) {
            return "Draw";
        }
        return "Game has not completed";
        
    }

    static boolean draws(String[] b) {
        int c = 0;
        for (int i = 0; i < 4; i++) {
            for (int j = 0; j < 4; j++) {
                if (b[i].charAt(j) == '.')
                    c++;
            }
        }
        return c == 0;
    }

    static boolean wins(String[] b, char P) {
        for (int i = 0; i < 4; i++) {
            if (wins(i, 0, 0, 1, b, P)) {
                return true;
            }
            if (wins(0, i, 1, 0, b, P)) {
                return true;
            }
        }
        if (wins(0, 0, 1, 1, b, P)) {
            return true;
        }
        if (wins(0, 3, 1, -1, b, P)) {
            return true;
        }
        return false;
    }

    static boolean wins(int r, int c, int dr, int dc, String[] b, char P) {
        int rr = r;
        int cc = c;
        for (int i = 0; i < 4; i++) {
            if (!(b[rr].charAt(cc) == P || b[rr].charAt(cc) == 'T')) {
                return false;
            }
            rr += dr;
            cc += dc;
        }
        return true;
    }

    static void printf(String format, Object... args) {
        System.out.printf(format, args);
        out.printf(format, args);
    }

    static int ni() throws Exception {
        while (!stk.hasMoreTokens()) {
            stk = new StringTokenizer(in.readLine());
        }
        return Integer.parseInt(stk.nextToken());
    }

    static long nl() throws Exception {
        while (!stk.hasMoreTokens()) {
            stk = new StringTokenizer(in.readLine());
        }
        return Long.parseLong(stk.nextToken());
    }

    static double nd() throws Exception {
        while (!stk.hasMoreTokens()) {
            stk = new StringTokenizer(in.readLine());
        }
        return Double.parseDouble(stk.nextToken());
    }

    static String ns() throws Exception {
        while (!stk.hasMoreTokens()) {
            stk = new StringTokenizer(in.readLine());
        }
        return stk.nextToken();
    }
}
