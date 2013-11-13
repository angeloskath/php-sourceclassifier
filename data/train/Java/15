import java.io.*;
import java.util.*;

public class A {
    FastScanner in;
    PrintWriter out;

    char[][] c;
    
    boolean isWin(char cc) {
        for (int i = 0; i < 4; i++) {
            int s =0;
            for (int j = 0; j < 4; j++)
                if (c[i][j] == cc || c[i][j] == 'T')
                    s++;
            if (s == 4)
                return true;
        }
        for (int i = 0; i < 4; i++) {
            int s =0;
            for (int j = 0; j < 4; j++)
                if (c[j][i] == cc || c[j][i] == 'T')
                    s++;
            if (s == 4)
                return true;
        }
        int s = 0;
        for (int j = 0; j < 4; j++)
            if (c[j][j] == cc || c[j][j] == 'T')
                s++;
        if (s == 4)
            return true;
        s = 0;
        for (int j = 0; j < 4; j++)
            if (c[j][3 - j] == cc || c[j][3 - j] == 'T')
                s++;
        return s == 4;
    }

    void solve() throws IOException {
        c = new char[4][4];
        for (int i = 0; i < 4; i++) {
            c[i] = in.next().toCharArray();
        }
        if (isWin('X')) {
            out.println("X won");
        } else {
            if (isWin('O')) {
                out.println("O won");
            } else {
                int ss = 0;
                for (int i =0 ; i < 4; i++)
                    for (int j = 0; j < 4; j++)
                        if (c[i][j] == '.')
                            ss++;
                if (ss == 0) {
                    out.println("Draw");
                } else {
                    out.println("Game has not completed");
                }
            }
        }
        
    }

    void run() throws IOException {
        try {
            in = new FastScanner(new File("A.in"));
            out = new PrintWriter(new File("A.out"));

            int testNumber = in.nextInt();
            for (int test = 1; test <= testNumber; test++) {
                out.print("Case #" + (test) + ": ");
                solve();
                System.out.println(test);
            }

            out.close();
        } catch (FileNotFoundException e) {
            e.printStackTrace();
        }
    }

    void runIO() {

        in = new FastScanner(System.in);
        out = new PrintWriter(System.out);

        try {
            solve();
        } catch (IOException e) {
            // TODO Auto-generated catch block
            e.printStackTrace();
        }

        out.close();
    }

    class FastScanner {
        BufferedReader br;
        StringTokenizer st;

        public FastScanner(File f) {
            try {
                br = new BufferedReader(new FileReader(f));
            } catch (FileNotFoundException e) {
                e.printStackTrace();
            }
        }

        public FastScanner(InputStream f) {
            br = new BufferedReader(new InputStreamReader(f));
        }

        String next() {
            while (st == null || !st.hasMoreTokens()) {
                String s = null;
                try {
                    s = br.readLine();
                } catch (IOException e) {
                    e.printStackTrace();
                }
                if (s == null)
                    return null;
                st = new StringTokenizer(s);
            }
            return st.nextToken();
        }

        boolean hasMoreTokens() {
            while (st == null || !st.hasMoreTokens()) {
                String s = null;
                try {
                    s = br.readLine();
                } catch (IOException e) {
                    e.printStackTrace();
                }
                if (s == null)
                    return false;
                st = new StringTokenizer(s);
            }
            return true;
        }

        int nextInt() {
            return Integer.parseInt(next());
        }

        long nextLong() {
            return Long.parseLong(next());
        }
    }

    public static void main(String[] args) throws IOException {
        new A().run();
    }
}