import java.io.BufferedReader;
import java.io.File;
import java.io.FileReader;
import java.io.PrintWriter;

public class A {
    
    static boolean winner(String s[], char c) {
        int i,j;
        
        for (i=0;i<4;i++) {
            int counter = 0;
            for (j=0;j<4;j++) {
                //System.out.println(i+" "+j+" |"+s[i]+"|");
                if ((s[i].charAt(j) == c)||(s[i].charAt(j) == 'T')) {
                    counter++;
                }
            }
            
            if (counter == 4) {
                return true;
            }
        }
        
        for (j=0;j<4;j++) {
            int counter = 0;
            for (i=0;i<4;i++) {
                
                if ((s[i].charAt(j) == c)||(s[i].charAt(j) == 'T')) {
                    counter++;
                }
            }
            
            if (counter == 4) {
                return true;
            }
        }
        
        int counter = 0;
        for (i=0;i<4;i++) {
            if ((s[i].charAt(i) == c)||(s[i].charAt(i) == 'T')) {
                counter++;
            }
        }
        
        if (counter == 4) {
            return true;
        }
        
        counter = 0;
        for (i=0;i<4;i++) {
            if ((s[i].charAt(3-i) == c)||(s[i].charAt(3-i) == 'T')) {
                counter++;
            }
        }
        
        if (counter == 4) {
            return true;
        }
        
        return false;
    }
    
    static boolean isFilled(String s[]) {
        int i,j;
        
        for (i=0;i<4;i++) {
            for (j=0;j<4;j++) {
                if (s[i].charAt(j) == '.')
                    return false;
            }
        }
        
        return true;
    }
    
    public static void main(String[] args) throws Exception {
        int i,j,k;
        
        BufferedReader br = new BufferedReader(new FileReader("A-large.in"));
        PrintWriter out = new PrintWriter(new File("A-large.out"));
        
        int T = Integer.parseInt(br.readLine());
        
        for (k=1;k<=T;k++) {
            String s[] = new String[4];
            for (i=0;i<4;i++)
                s[i] = br.readLine();
            
            br.readLine();
            
            if (winner(s, 'X')) {
                out.println("Case #" + k + ": X won");
            } else if (winner(s, 'O')) {
                out.println("Case #" + k + ": O won");
            } else if (isFilled(s)) {
                out.println("Case #" + k + ": Draw");
            } else {
                out.println("Case #" + k + ": Game has not completed");
            }
            
        }
        
        out.close();
        br.close();
        
    }
    
}
