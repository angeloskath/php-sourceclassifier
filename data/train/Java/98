package com.google.codejam;

import java.io.File;
import java.io.PrintStream;
import java.util.Arrays;
import java.util.Scanner;

//Libraries used: http://commons.apache.org/lang/, http://commons.apache.org/collections/, https://code.google.com/p/guava-libraries/
public class A {
    private static boolean debugAllowed = true;

    private static String solve(int caseNumber, Scanner scanner) {
        char[][] c = new char[4][4];
        for (int i = 0; i < 4; i++) {
            String line = scanner.nextLine();
            c[i] = line.toCharArray();
        }
        scanner.nextLine();
        debug("" + Arrays.deepToString(c));

        for (int i = 0; i < 4; i++) {
            int numX = 0;
            int numO = 0;
            int numT = 0;
            for (int j = 0; j < 4; j++) {
                if (c[i][j] == 'X')
                    numX++;
                if (c[i][j] == 'O')
                    numO++;
                if (c[i][j] == 'T')
                    numT++;
            }
            if (numX + numT == 4) {
                return "X won";
            }
            if (numO + numT == 4) {
                return "O won";
            }
        }

        for (int j = 0; j < 4; j++) {
            int numX = 0;
            int numO = 0;
            int numT = 0;
            for (int i = 0; i < 4; i++) {
                if (c[i][j] == 'X')
                    numX++;
                if (c[i][j] == 'O')
                    numO++;
                if (c[i][j] == 'T')
                    numT++;
            }
            if (numX + numT == 4) {
                return "X won";
            }
            if (numO + numT == 4) {
                return "O won";
            }
        }

        {
            int numX = 0;
            int numO = 0;
            int numT = 0;
            for (int i = 0; i < 4; i++) {
                if (c[i][i] == 'X')
                    numX++;
                if (c[i][i] == 'O')
                    numO++;
                if (c[i][i] == 'T')
                    numT++;
            }
            if (numX + numT == 4) {
                return "X won";
            }
            if (numO + numT == 4) {
                return "O won";
            }
        }

        {
            int numX = 0;
            int numO = 0;
            int numT = 0;
            for (int i = 0; i < 4; i++) {
                if (c[i][3 - i] == 'X')
                    numX++;
                if (c[i][3 - i] == 'O')
                    numO++;
                if (c[i][3 - i] == 'T')
                    numT++;
            }
            if (numX + numT == 4) {
                return "X won";
            }
            if (numO + numT == 4) {
                return "O won";
            }
        }

        for (int i = 0; i < 4; i++) {
            for (int j = 0; j < 4; j++) {
                if (c[i][j] == '.')
                    return "Game has not completed";
            }
        }

        return "Draw";
    }

    public static void main(String[] args) throws Exception {
        if (args.length != 1) {
            throw new IllegalArgumentException("Wrong run parameters: " + Arrays.deepToString(args));
        }
        File inputFile = new File(args[0]);
        String outputFileName = inputFile.getParent() + File.separator + inputFile.getName().replace(".in", ".out");
        PrintStream out = new PrintStream(outputFileName);

        Scanner scanner = new Scanner(inputFile);
        int numberOfCases = Integer.valueOf(scanner.nextLine());
        debug(numberOfCases + " cases");

        long startTime = System.currentTimeMillis();
        for (int caseNumber = 1; caseNumber <= numberOfCases; caseNumber++) {
            // Parsing the file
            debug("Case #" + caseNumber);

            // Now solving

            String result = solve(caseNumber, scanner);
            String resultString = "Case #" + caseNumber + ": " + result;
            out.println(resultString);
            debug("Solution for " + resultString);

            debug("");
        }
        long time = System.currentTimeMillis() - startTime;
        debug("Time: " + time + " ms (" + time / numberOfCases + " ms / case)");

        out.close();
    }

    private static void debug(String text) {
        if (debugAllowed) {
            System.out.println(text);
        }
    }
}
