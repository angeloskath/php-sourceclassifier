import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

public class CodeJam1 {
    public static void main(String[] args) {


        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
        try {
            String line = br.readLine();
            int N = Integer.parseInt(line);

            String lines[] = new String[4];

            for (int i = 1; i <= N; i++) {
                for (int j = 0; j < 4; j++) {
                    lines[j] = br.readLine();
                }

                br.readLine();
                solve(i, lines);
            }
        } catch (IOException e) {
            e.printStackTrace();  //To change body of catch statement use File | Settings | File Templates.
        }

    }

    private static void solve(int k, String[] lines) {
        boolean xWon = false;
        boolean oWon = false;
        for (int i = 0; i < 4; i++) {
            xWon = xWon | checkHorizontal('X', i, lines);
            oWon = oWon | checkHorizontal('O', i, lines);
        }
        for (int i = 0; i < 4; i++) {
            xWon = xWon | checkVertical('X', i, lines);
            oWon = oWon | checkVertical('O', i, lines);
        }
        xWon = xWon | checkDiagonal('X', lines, true);
        oWon = oWon | checkDiagonal('O', lines, true);
        xWon = xWon | checkDiagonal('X', lines, false);
        oWon = oWon | checkDiagonal('O', lines, false);

        System.out.print("Case #" + k + ": ");
        if (xWon) {
            System.out.println("X won");
        } else if (oWon) {
            System.out.println("O won");
        } else if (spacesExist(lines)) {
            System.out.println("Game has not completed");
        } else {
            System.out.println("Draw");
        }

    }

    private static boolean spacesExist(String[] lines) {
        for (int i = 0; i < 4; i++) {
            for (int j = 0; j < 4; j++) {
                if (lines[i].charAt(j) == '.') {
                    return true;
                }
            }
        }
        return false;
    }


    private static boolean checkHorizontal(char x, int i, String[] lines) {
        for (int j = 0; j < 4; j++) {
            char c = lines[i].charAt(j);
            if (c != x && c != 'T') {
                return false;
            }
        }
        return true;
    }

    private static boolean checkVertical(char x, int i, String[] lines) {
        for (int j = 0; j < 4; j++) {
            char c = lines[j].charAt(i);
            if (c != x && c != 'T') {
                return false;
            }
        }
        return true;
    }

    private static boolean checkDiagonal(char x, String[] lines, boolean reverse) {
        for (int j = 0; j < 4; j++) {
            char c = lines[j].charAt(reverse ? 3 - j : j);
            if (c != x && c != 'T') {
                return false;
            }
        }
        return true;
    }


}
