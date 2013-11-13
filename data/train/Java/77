package contest;

import java.util.*;
import java.io.*;

public class TicTacToeTomek {
    final static String PROBLEM_NAME = "tttt";
    final static String WORK_DIR = "D:\\Gcj\\" + PROBLEM_NAME + "\\";

    int flag(char a, char b, char c, char d) {
        String s = "" + a + b + c + d;
         if (s.matches("[XT]*")) return 1;
        if (s.matches("[OT]*")) return 2;
        return 0;
    }

    void solve(Scanner sc, PrintWriter pw) {
        char[][] A = new char[4][];
        for (int i=0; i<4; i++) A[i] = sc.next().toCharArray();
        int winFlag = 0;
        for (int i=0; i<4; i++) {
            winFlag |= flag(A[i][0], A[i][1], A[i][2], A[i][3]);
            winFlag |= flag(A[0][i], A[1][i], A[2][i], A[3][i]);
        }
        winFlag |= flag(A[0][0], A[1][1], A[2][2], A[3][3]);
        winFlag |= flag(A[0][3], A[1][2], A[2][1], A[3][0]);
        if (winFlag == 1) {
            pw.println("X won");
            return;
        }
        if (winFlag == 2) {
            pw.println("O won");
            return;
        }
        boolean hasEmpty = false;
        for (int i=0; i<4; i++) for (int j=0; j<4; j++) hasEmpty |= A[i][j] == '.';
        if (hasEmpty) {
            pw.println("Game has not completed");
        } else {
            pw.println("Draw");
        }
    }

    public static void main(String[] args) throws Exception {
        Scanner sc = new Scanner(new FileReader(WORK_DIR + "input.txt"));
        PrintWriter pw = new PrintWriter(new FileWriter(WORK_DIR + "output.txt"));
        int caseCnt = sc.nextInt();
        for (int caseNum=0; caseNum<caseCnt; caseNum++) {
            System.out.println("Processing test case " + (caseNum + 1));
            pw.print("Case #" + (caseNum+1) + ": ");
            new TicTacToeTomek().solve(sc, pw);
        }
        pw.flush();
        pw.close();
        sc.close();
    }
}
