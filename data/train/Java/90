import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import java.util.ArrayList;
import java.util.concurrent.LinkedBlockingQueue;
import java.util.concurrent.ThreadPoolExecutor;
import java.util.concurrent.TimeUnit;

public class QualifierA {
  class Task implements Runnable {
    private final int num;
    private final String[] lines;
    
    public Task(int num, String[] lines) {
      this.num = num;
      this.lines = lines;
    }
    
    @Override
    public void run() {
      String result = null;
      
      // BEGIN RESULT COMPUTATION
      // ------------------------------------------------------------
      
      result = null;
      boolean completed = true;
      boolean x_chance;
      boolean o_chance;
      for (int row = 0; row < 4; ++row) {
        String line = lines[row];
        char mark = line.charAt(0);
        if (mark == '.') {
          completed = false;
        }
        x_chance = (mark == 'X' || mark == 'T');
        o_chance = (mark == 'O' || mark == 'T');
        for (int col = 1; col < 4; ++col) {
          mark = line.charAt(col);
          if (mark == '.') {
            completed = false;
            x_chance = false;
            o_chance = false;
          }
          if (mark == 'X') {
            o_chance = false;
          }
          else if (mark == 'O') {
            x_chance = false;
          }
        }
        if (x_chance) {
          result = "X won";
          break;
        }
        else if (o_chance) {
          result = "O won";
          break;
        }
      }
      
      if (result == null) {
        for (int col = 0; col < 4; ++col) {
          char mark = lines[0].charAt(col);
          if (mark == '.') {
            completed = false;
          }
          x_chance = (mark == 'X' || mark == 'T');
          o_chance = (mark == 'O' || mark == 'T');
          for (int row = 1; row < 4; ++row) {
            mark = lines[row].charAt(col);
            if (mark == '.') {
              completed = false;
              x_chance = false;
              o_chance = false;
            }
            if (mark == 'X') {
              o_chance = false;
            }
            else if (mark == 'O') {
              x_chance = false;
            }
          }
          if (x_chance) {
            result = "X won";
            break;
          }
          else if (o_chance) {
            result = "O won";
            break;
          }
        }
      }
      
      if (result == null) {
        x_chance = true;
        o_chance = true;
        for (int row = 0; row < 4; ++row) {
          char mark = lines[row].charAt(row);
          if (mark == 'X' || mark == '.') {
            o_chance = false;
          }
          if (mark == 'O' || mark == '.') {
            x_chance = false;
          }
        }
        if (x_chance) {
          result = "X won";
        }
        else if (o_chance) {
          result = "O won";
        }
      }
      
      if (result == null) {
        x_chance = true;
        o_chance = true;
        for (int row = 0; row < 4; ++row) {
          char mark = lines[row].charAt(3 - row);
          if (mark == 'X' || mark == '.') {
            o_chance = false;
          }
          if (mark == 'O' || mark == '.') {
            x_chance = false;
          }
        }
        if (x_chance) {
          result = "X won";
        }
        else if (o_chance) {
          result = "O won";
        }
      }
      
      if (result == null) {
        if (!completed) {
          result = "Game has not completed";
        }
        else {
          result = "Draw";
        }
      }
      
      // END RESULT COMPUTATION
      // ------------------------------------------------------------
      
      System.out.println(result);
      reportResult(num, result);
    }
  }
  
  public static final int NUM_THREADS = 4;
  
  private final String file_name;
  private ArrayList<String> results;
  
  public QualifierA(String file_name) {
    this.file_name = file_name;
  }
  
  public ArrayList<String> calculate() throws IOException, InterruptedException {
    results = new ArrayList<String>();
    ThreadPoolExecutor tpe =
            new ThreadPoolExecutor(NUM_THREADS, NUM_THREADS, 2, TimeUnit.SECONDS,
                    new LinkedBlockingQueue<Runnable>());
    FileReader fr = new FileReader(file_name);
    BufferedReader br = new BufferedReader(fr);
    String line = br.readLine();
    System.out.println("Header: " + line);
    String[] ints = line.split(" ");
    
    // BEGIN HEADER PARSING
    // --------------------------------------------------------------------
    
    int total_num = Integer.parseInt(ints[0]);
    
    // END HEADER PARSING
    // --------------------------------------------------------------------
    
    for (int i = 0; i < total_num; ++i) {
      results.add("");
      
      // BEGIN READING CASE
      // ----------------------------------------------------------------
      
      String[] lines = new String[4];
      for (int j = 0; j < 4; ++j) {
        line = br.readLine();
        lines[j] = line;
      }
      br.readLine();
      
      tpe.execute(new Task(i, lines));
      
      // END READING CASE
      // ----------------------------------------------------------------
      
    }
    
    br.close();
    fr.close();
    tpe.shutdown();
    tpe.awaitTermination(8, TimeUnit.MINUTES);
    return results;
  }
  
  public synchronized void reportResult(int num, String result) {
    results.set(num, result);
  }
  
  public static void main(String[] args) throws IOException, InterruptedException {
    long time0 = System.currentTimeMillis();
    if (args.length < 1) {
      System.out.println("Remember command line argument");
      System.exit(1);
    }
    QualifierA runner = new QualifierA(args[0]);
    ArrayList<String> results = runner.calculate();
    System.out.println("Run time: " + (System.currentTimeMillis() - time0) / 1000 + "s\n");
    FileWriter fw = new FileWriter("results.txt");
    BufferedWriter bw = new BufferedWriter(fw);
    for (int i = 0; i < results.size(); ++i) {
      System.out.println("Case #" + (i + 1) + ": " + results.get(i));
      bw.write("Case #" + (i + 1) + ": " + results.get(i) + "\n");
    }
    bw.close();
    fw.close();
  }
}
