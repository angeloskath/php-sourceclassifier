import com.google.common.base.Joiner;
import com.google.common.base.Splitter;
import com.google.common.collect.Lists;
import com.google.common.collect.Maps;

import java.io.*;
import java.util.Iterator;
import java.util.List;
import java.util.Map;

public class Main {
    private static List<char[][]> readInput(Reader reader) throws IOException {
        BufferedReader bufferedReader = new BufferedReader(reader);
        String firstLine = bufferedReader.readLine();
        int numCases = Integer.valueOf(firstLine);

        List<char[][]> result = Lists.newArrayListWithCapacity(numCases);

        for (int i = 0; i < numCases; i++) {
            char[][] testCase = new char[4][];
            for(int j = 0; j < 4; j++) {
                String line = bufferedReader.readLine();
                testCase[j] = line.toCharArray();
            }
            bufferedReader.readLine();
            result.add(testCase);
        }

        return result;
    }

    private static final String TEST_INPUT = "6\n" +
            "XXXT\n" +
            "....\n" +
            "OO..\n" +
            "....\n" +
            "\n" +
            "XOXT\n" +
            "XXOO\n" +
            "OXOX\n" +
            "XXOO\n" +
            "\n" +
            "XOX.\n" +
            "OX..\n" +
            "....\n" +
            "....\n" +
            "\n" +
            "OOXX\n" +
            "OXXX\n" +
            "OX.T\n" +
            "O..O\n" +
            "\n" +
            "XXXO\n" +
            "..O.\n" +
            ".O..\n" +
            "T...\n" +
            "\n" +
            "OXXX\n" +
            "XO..\n" +
            "..O.\n" +
            "...O\n";


    public static void main(String[] args) throws IOException, InterruptedException {
        List<char[][]> testCases = readInput(new FileReader("c:\\comp\\large.in"));
        final PrintStream outStream = new PrintStream(new FileOutputStream("c:\\comp\\large.out"));

        int currentCase = 1;
        for (char[][] testCase : testCases) {
            if(scanForWin('X', testCase)) {
                System.out.println("Case #" + currentCase + ": X won");
                outStream.println("Case #" + currentCase + ": X won");
            } else if(scanForWin('O', testCase)) {
                System.out.println("Case #" + currentCase + ": O won");
                outStream.println("Case #" + currentCase + ": O won");
            } else if(scanForDraw(testCase)) {
                System.out.println("Case #" + currentCase + ": Draw");
                outStream.println("Case #" + currentCase + ": Draw");
            } else {
                System.out.println("Case #" + currentCase + ": Game has not completed");
                outStream.println("Case #" + currentCase + ": Game has not completed");
            }
            currentCase++;
        }
    }

    private static boolean scanForDraw(char[][] testCase) {
        for(int i = 0; i < 4; i++) {
            for(int j = 0; j < 4; j++) {
                if(testCase[i][j] == '.') {
                    return false;
                }
            }
        }
        return true;
    }

    private static boolean scanForWin(char x, char[][] testCase) {
        for(int i = 0; i < 4; i++) {
            for(int j = 0; j < 4; j++) {
                if(testCase[i][j] != x && testCase[i][j] != 'T') {
                    break;
                }
                if(j == 3){
                    return true;
                }
            }
        }

        for(int i = 0; i < 4; i++) {
            for(int j = 0; j < 4; j++) {
                if(testCase[j][i] != x && testCase[j][i] != 'T') {
                    break;
                }
                if(j == 3){
                    return true;
                }
            }
        }

        for(int i = 0; i < 4; i++) {
            if(testCase[i][i] != x && testCase[i][i] != 'T') {
                break;
            }
            if(i == 3){
                return true;
            }
        }

        for(int i = 0; i < 4; i++) {
            if(testCase[3 - i][i] != x && testCase[3 - i][i] != 'T') {
                break;
            }
            if(i == 3){
                return true;
            }
        }

        return false;
    }
}
