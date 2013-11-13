import java.util.*;
import java.io.*;

public class TicTacToeTomek {
    static Scanner sc;
    static PrintStream out;

    public static void main(String[] args) throws Exception {
        sc =  new Scanner(new FileReader("A-large.in"));
        out = new PrintStream(new FileOutputStream("A-large.out"));
        int testCases = sc.nextInt();
        for (int index = 1; index <= testCases; index++) {
            out.println(String.format("Case #%s: %s", index, solveCase()));
        }
    }

    static char[][] board;

    public static String solveCase() {
        board = new char[4][];
        for (int row = 0; row < 4; row++)
            board[row] = sc.next().toCharArray();

        for (int row = 0; row < 4; row++) {
            for (int col = 0; col < 4; col++) {
                for (int dr = -1; dr <= 1; dr++) {
                    for (int dc = -1; dc <= 1; dc++) {
                        if (dr == 0 && dc == 0)
                            continue;
                        if (fourConsecutive(row, col, dr, dc, 'X'))
                            return "X won";
                        if (fourConsecutive(row, col, dr, dc, 'O'))
                            return "O won";
                    }
                }
            }
        }
        
        for (int row = 0; row < 4; row++)
            for (int col = 0; col < 4; col++)
                if(board[row][col] == '.')
                    return "Game has not completed";
        return "Draw";
    }

    public static boolean fourConsecutive(int row, int col, int dr, int dc,
            char check) {
        for (int i = 0; i < 4; i++, row += dr, col += dc) {
            if (!(row >= 0 && col >= 0 && row < 4 && col < 4 && (board[row][col] == check || board[row][col] == 'T')))
                return false;
        }
        return true;
    }
}
