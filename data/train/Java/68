package codejam.y2013.q;

import java.io.*;
import java.text.*;
import java.util.*;

public class P1 {

  public static void main(String[] args) throws Exception {
    BufferedReader inputFile = new BufferedReader(new InputStreamReader(
        new FileInputStream(args[0])));
    int cases = Integer.parseInt(inputFile.readLine());

    PrintStream outFile = new PrintStream(new FileOutputStream(args[1]));
    for (int i = 1; i <= cases; i++) {
      char[][] b = new char[4][];
      b[0] = inputFile.readLine().toCharArray();
      b[1] = inputFile.readLine().toCharArray();
      b[2] = inputFile.readLine().toCharArray();
      b[3] = inputFile.readLine().toCharArray();
      inputFile.readLine();

      String decision = computeDecision(b);
      outFile.println("Case #" + i + ": " + decision);
    }
    outFile.close();
    inputFile.close();
  }

  private static String computeDecision(char[][] b) {
    if (won(b, 'X'))
      return "X won";
    if (won(b, 'O'))
      return "O won";

    if (emptySquares(b))
      return "Game has not completed";
    else
      return "Draw";
  }

  private static boolean won(char[][] b, char c) {
    x: for (int i = 0; i < b.length; i++) {
      for (int j = 0; j < b[0].length; j++) {
        if (b[i][j] != c && b[i][j] != 'T')
          continue x;
      }
      return true;
    }

    x: for (int j = 0; j < b[0].length; j++) {
      for (int i = 0; i < b.length; i++) {
        if (b[i][j] != c && b[i][j] != 'T')
          continue x;
      }
      return true;
    }

    boolean bad;
    bad = false;
    x: for (int i = 0; i < b.length; i++) {
      if (b[i][i] != c && b[i][i] != 'T') {
        bad = true;
        break x;
      }
    }
    if (!bad)
      return true;

    bad = false;
    x: for (int i = 0; i < b.length; i++) {
      if (b[i][b.length - i - 1] != c && b[i][b.length - i - 1] != 'T') {
        bad = true;
        break x;
      }
    }
    if (!bad)
      return true;

    return false;
  }

  private static boolean emptySquares(char[][] b) {
    for (int i = 0; i < b.length; i++) {
      for (int j = 0; j < b[i].length; j++) {
        if (b[i][j] == '.')
          return true;
      }
    }
    return false;
  }

  public static String[] tokenize(String input) {
    StringTokenizer st = new StringTokenizer(input);
    String[] k = new String[st.countTokens()];
    for (int i = 0; i < k.length; i++)
      k[i] = st.nextToken();
    return k;
  }

  public static String[] tokenize(String input, String sep) {
    StringTokenizer st = new StringTokenizer(input, sep);
    String[] k = new String[st.countTokens()];
    for (int i = 0; i < k.length; i++)
      k[i] = st.nextToken();
    return k;
  }

  public static String formatDouble(double myDouble, String format) {
    DecimalFormat dfFormat = new DecimalFormat(format);
    FieldPosition f = new FieldPosition(0);
    StringBuffer s = new StringBuffer();
    dfFormat.format(myDouble, s, f);
    return s.toString();
  }
}
