import java.io.*;
import java.math.BigInteger;
import java.util.Locale;
import java.util.StringTokenizer;

/**
 * User: Igor Kirov
 * Date: 13.04.13
 */
public class A implements Runnable {
    private boolean check(int a, int b) {
        return a == b || a == 2;
    }

    private int check(int a, int b, int c, int d, int q) {
        if (q != 0) {
            return q;
        }
        if (check(a, 1) && check(b, 1) && check(c, 1) && check(d, 1)) {
            return 1;
        }
        if (check(a, -1) && check(b, -1) && check(c, -1) && check(d, -1)) {
            return -1;
        }
        return 0;
    }

    private void solve() throws IOException {
        int[][] a = new int[4][4];
        boolean anyEmpty = false;
        for (int i = 0; i < 4; i++) {
            String s = nextToken();
            int j = 0;
            for (char c : s.toCharArray()) {
                switch (c) {
                    case 'X':
                        a[i][j] = 1;
                        break;
                    case 'O':
                        a[i][j] = -1;
                        break;
                    case 'T':
                        a[i][j] = 2;
                        break;
                    case '.':
                        anyEmpty = true;
                        break;
                }
                j++;
            }
        }
        int res = 0;
        res = check(a[0][0], a[1][1], a[2][2], a[3][3], res);
        res = check(a[0][3], a[1][2], a[2][1], a[3][0], res);
        for (int i = 0; i < 4; i++) {
            res = check(a[i][0], a[i][1], a[i][2], a[i][3], res);
            res = check(a[0][i], a[1][i], a[2][i], a[3][i], res);
        }
        if (res == 0) {
            if (anyEmpty) {
                writer.println("Game has not completed");
            } else {
                writer.println("Draw");
            }
        } else {
            if (res == 1) {
                writer.println("X won");
            } else {
                writer.println("O won");
            }
        }
    }

    public static void main(String[] args) {
        new Thread(null, new A(), "", 64 * 1024 * 1024).start();
    }

    StringTokenizer tokenizer;
    BufferedReader reader;
    PrintWriter writer;

    public void run() {
        try {
            try {
                Locale.setDefault(Locale.US);
            } catch (Exception ignored) {
            }

            reader = new BufferedReader(new FileReader("A.in"));
            writer = new PrintWriter(new FileWriter("A.out"));
            tokenizer = null;

            int tests = nextInt();
            for (int i = 0; i < tests; i++) {
                writer.printf("Case #%d: ", i + 1);
                solve();
                writer.flush();
            }

            reader.close();
            writer.close();
        } catch (Exception e) {
            e.printStackTrace();
            System.exit(1);
        }
    }

    private int nextInt() throws IOException {
        return Integer.parseInt(nextToken());
    }

    private long nextLong() throws IOException {
        return Long.parseLong(nextToken());
    }

    private BigInteger nextBigInteger() throws IOException {
        return new BigInteger(nextToken());
    }

    private double nextDouble() throws IOException {
        return Double.parseDouble(nextToken());
    }

    private String nextToken() throws IOException {
        while (tokenizer == null || !tokenizer.hasMoreTokens()) {
            tokenizer = new StringTokenizer(reader.readLine());
        }
        return tokenizer.nextToken();
    }
}