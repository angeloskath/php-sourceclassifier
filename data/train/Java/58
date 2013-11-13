package gcj2013q;

import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import java.io.PrintWriter;
import java.util.Scanner;

public class TicTacToeTomek {
    public static void main(String[] args) throws IOException,
            FileNotFoundException {
        // String input = "A-small-attempt0.in";
        // String output = "A-small-attempt0.out";
        String input = "A-large.in";
        String output = "A-large.out";

        Scanner scan = new Scanner(new BufferedReader(new FileReader(input)));
        PrintWriter pw = new PrintWriter(new BufferedWriter(new FileWriter(
                output)));

        int T = Integer.parseInt(scan.nextLine());
        for (int t = 1; t <= T; t++) {
            char[][] board = new char[4][4];
            for (int r = 0; r < 4; r++)
                board[r] = scan.nextLine().toCharArray();
            if (t != T)
                scan.nextLine();
            int countDot = 0;
            boolean xwin = false;
            boolean owin = false;
            // row
            for (int r = 0; r < 4; r++) {
                boolean x = true;
                boolean o = true;
                for (int c = 0; c < 4; c++)
                    if (board[r][c] == '.') {
                        countDot++;
                        x = false;
                        o = false;
                    }
                    else if (board[r][c] == 'X')
                        o = false;
                    else if (board[r][c] == 'O')
                        x = false;
                if (x)
                    xwin = true;
                if (o)
                    owin = true;
            }
            // col
            for (int c = 0; c < 4; c++) {
                boolean x = true;
                boolean o = true;
                for (int r = 0; r < 4; r++)
                    if (board[r][c] == '.') {
                        x = false;
                        o = false;
                    }
                    else if (board[r][c] == 'X')
                        o = false;
                    else if (board[r][c] == 'O')
                        x = false;
                if (x)
                    xwin = true;
                if (o)
                    owin = true;
            }
            // diag
            if ((board[0][0] == 'T' || board[0][0] == 'X')
                    && (board[1][1] == 'T' || board[1][1] == 'X')
                    && (board[2][2] == 'T' || board[2][2] == 'X')
                    && (board[3][3] == 'T' || board[3][3] == 'X'))
                xwin = true;
            if ((board[0][0] == 'T' || board[0][0] == 'O')
                    && (board[1][1] == 'T' || board[1][1] == 'O')
                    && (board[2][2] == 'T' || board[2][2] == 'O')
                    && (board[3][3] == 'T' || board[3][3] == 'O'))
                owin = true;
            if ((board[0][3] == 'T' || board[0][3] == 'X')
                    && (board[1][2] == 'T' || board[1][2] == 'X')
                    && (board[2][1] == 'T' || board[2][1] == 'X')
                    && (board[3][0] == 'T' || board[3][0] == 'X'))
                xwin = true;
            if ((board[0][3] == 'T' || board[0][3] == 'O')
                    && (board[1][2] == 'T' || board[1][2] == 'O')
                    && (board[2][1] == 'T' || board[2][1] == 'O')
                    && (board[3][0] == 'T' || board[3][0] == 'O'))
                owin = true;

            pw.print("Case #" + t + ": ");
            if (xwin)
                pw.println("X won");
            else if (owin)
                pw.println("O won");
            else if (countDot == 0)
                pw.println("Draw");
            else
                pw.println("Game has not completed");
        }

        scan.close();
        pw.close();
    }

}
