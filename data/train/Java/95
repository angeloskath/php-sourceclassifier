
import java.io.File;
import java.io.FileNotFoundException;
import java.util.Scanner;

public class main {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        Scanner scanner;
        try {
            String[] arr= new String[5];
            scanner = new Scanner(new File("1.in"));
            int t=Integer.parseInt(scanner.nextLine());
            int i=0;
            int j=0;
            while(j<t){
                arr[i++]=scanner.nextLine();
                if(i==4)
                {
                    if(scanner.hasNextLine())
                        scanner.nextLine();
                    j++;i=0;
                    System.out.print("Case #"+j+": ");
                    f(arr);
                }
            }
        } 
        catch (FileNotFoundException ex) {
            
        }
        
    }
    public static void f(String[] arr){
        int[][] p=new int[4][4];
        int i,j,sum;
        for(i=0;i<4;i++)
        {
            String q=arr[i];
            for(j=0;j<4;j++)
            {
                if(q.charAt(j)=='.')
                    p[i][j]=0;
                else if(q.charAt(j)=='O')
                    p[i][j]=1;
                else if(q.charAt(j)=='X')
                    p[i][j]=20;
                else if(q.charAt(j)=='T')
                    p[i][j]=10;
            }
        }
        for(i=0;i<4;i++)
        {
            sum=0;
            for(j=0;j<4;j++)
                sum+=p[i][j];
            if(sum==4||sum==13)
            {   
                System.out.println("O won");
                return;
            }
            else if(sum==80||sum==70)  
            {   
                System.out.println("X won");
                return;
            }
            sum=0;
            for(j=0;j<4;j++)
                sum+=p[j][i];
            if(sum==4||sum==13)
            {   
                System.out.println("O won");
                return;
            }
            else if(sum==80||sum==70)  
            {   
                System.out.println("X won");
                return;
            }
        }
        sum=0;
        for(i=0;i<4;i++)
            sum+=p[i][i];
        if(sum==4||sum==13)
        {   
            System.out.println("O won");
            return;
        }
        else if(sum==80||sum==70)  
        {   
            System.out.println("X won");
            return;
        }
        sum=0;
        for(i=0;i<4;i++)
            sum+=p[i][3-i];
        if(sum==4||sum==13)
        {   
            System.out.println("O won");
            return;
        }
        else if(sum==80||sum==70)  
        {   
            System.out.println("X won");
            return;
        }
        int check=0;
        for(i=0;i<4;i++)
            for(j=0;j<4;j++)
                if(p[i][j]==0)
                    check=1;
        if(check==1)
            System.out.println("Game has not completed");
        else
            System.out.println("Draw");
    }
}
