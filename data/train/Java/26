import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

public class Tomek {
    public static void main(String[] args) throws IOException {
        BufferedReader reader = new BufferedReader(new InputStreamReader(System.in));
        int numTests = Integer.parseInt(reader.readLine());
        for (int testId = 1; testId <= numTests; ++ testId) {
            String[] board = new String[4];
            for (int r = 0; r < 4; ++r) {
                board[r] = reader.readLine().trim();
            }
            reader.readLine();

            boolean Xwin = check(board, 'X');
            boolean Owin = check(board, 'O');

            boolean full = true;
            for (int r = 0; r < 4; ++r) {
                for (int c = 0; c < 4; ++c) {
                    if (board[r].charAt(c) == '.') {
                        full = false;
                        break;
                    }
                }
                if (! full) {
                    break;
                }
            }

            String ans = "";
            if (Xwin) {
                ans = "X won";
            } else if (Owin) {
                ans = "O won";
            } else if (full) {
                ans = "Draw";
            } else {
                ans = "Game has not completed";
            }

            System.out.println("Case #" + testId + ": " + ans);
        }
    }

    private static boolean check(String[] board, char x) {
        boolean win;
        for (int r = 0; r < 4; ++r) {
            win = true;
            for (int c = 0; c < 4; ++c) {
                if (board[r].charAt(c) != x && board[r].charAt(c) != 'T') {
                    win = false;
                    break;
                }
            }
            if (win) {
                return true;
            }
        }

        for (int c = 0; c < 4; ++c) {
            win = true;
            for (int r = 0; r < 4; ++r) {
                if (board[r].charAt(c) != x && board[r].charAt(c) != 'T') {
                    win = false;
                    break;
                }
            }
            if (win) {
                return true;
            }
        }

        boolean win1 = true, win2 = true;
        for (int r = 0; r < 4; ++r) {
            char c = board[r].charAt(r);
            if (c != x && c != 'T') {
                win1 = false;
            }
            c = board[r].charAt(3 - r);
            if (c != x && c != 'T') {
                win2 = false;
            }
        }

        return win1 || win2;
    }
}
