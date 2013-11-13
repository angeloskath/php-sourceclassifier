import java.io.*;
import java.util.*;
import java.math.*;

public class A
{

	public static void main(String[] args) throws Exception
	{
    int T;	
		RandomAccessFile in = new RandomAccessFile(args[0],"r");
		T=Integer.parseInt(in.readLine());
		

		for (int i=1; i<=T; i++)
		{
		  char[][] grid=new char[4][4];
		  for (int r=0; r<4; r++)
		  {
        String line=in.readLine();      
        for (int c=0; c<4; c++) grid[r][c]=line.charAt(c);
      }
      String ans=solve(grid);
      System.out.println("Case #"+i+": "+ans);
      in.readLine();
    }

		in.close();
	}
	

	public static String solve(char[][] grid)
  {
    int used=0;
    for (int r=0; r<4; r++) for (int c=0; c<4; c++) if (grid[r][c]!='.') used++;
    
    //|,\,-
    int[] dr={1,1,0,-1,-1,-1, 0, 1};
    int[] dc={0,1,1,+1, 0,-1,-1,-1};
    
    for (int r=0; r<4; r++)
    {
      for (int c=0; c<4; c++)
      {
        char start=grid[r][c];
        if (start=='T' || start=='.') continue;

loop:        
        for (int q=0; q<dr.length; q++)
        {   
          for (int k=1; k<=3; k++)
          {
            int r2=r+k*dr[q];
            int c2=c+k*dc[q];
            if (r2<0 || r2>=4 || c2<0 || c2>=4) continue loop;
            if (grid[r2][c2]=='T') continue;
            if (grid[r2][c2]!=start) continue loop;
          }
          if (start=='X') return "X won";
          return "O won";          
        }        
      }
    }
    
    if (used==16) return "Draw";
    return "Game has not completed";
  }
}