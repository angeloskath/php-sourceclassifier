package com.forthgo.contest.g2013r0;

import java.io.File;
import java.io.FileWriter;
import java.io.IOException;
import java.io.PrintWriter;
import java.util.Scanner;


public class ProblemA {
    public static void main(String[] args) {
        try {
            Scanner in = new Scanner(new File("A.in"));
            PrintWriter out = new PrintWriter(new FileWriter("A.out"));
//            PrintWriter out = new PrintWriter(System.out);
            int n = in.nextInt();
            in.nextLine();
            for (int i = 0; i < n; i++) {
                out.printf("Case #%d: ", i + 1);
                solve(in, out);
                out.println();
                out.flush();
            }
        } catch (IOException e) {
            throw new RuntimeException();
        }

    }

    private static void solve(Scanner in, PrintWriter out) {
        int xboard = 0;
        int oboard = 0;
        for (int i = 0; i < 4; i++) {
            String s = in.nextLine();
            for (int j = 0; j < 4; j++) {
                xboard <<= 1;
                oboard <<= 1;
                switch (s.charAt(j)) {
                case 'X':
                    xboard += 1;
                    break;
                case 'O':
                    oboard += 1;
                    break;
                case 'T':
                    xboard += 1;
                    oboard += 1;
                    break;
                case '.':
                    break;
                default:
                    throw new RuntimeException();
                }
            }
        }
        in.nextLine();
        if (won(xboard))
            out.print("X won");
        else if (won(oboard))
            out.print("O won");
        else if ((xboard | oboard) != 0xffff)
            out.print("Game has not completed");
        else
            out.print("Draw");


    }

    private static boolean won(int b) {
        return w(b, 0xf000) || w(b, 0x0f00) || w(b, 0x00f0) || w(b, 0x000f)
               || w(b, 0x8888) || w(b, 0x4444) || w(b, 0x2222) || w(b, 0x1111)
               || w(b, 0x8421) || w(b, 0x1248);
    }

    private static boolean w(int b, int m) {
        return (b & m) == m;
    }


}

