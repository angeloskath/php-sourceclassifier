import java.util.*;
import java.io.*;
import java.math.BigDecimal;

public class Test {

	public static void main(String args[]) throws Exception{
		Scanner input = new Scanner(new FileReader("./iothings/A-large.in"));
		PrintWriter pw = new PrintWriter(new FileWriter("./iothings/output.txt"));
        int n = input.nextInt();
        for(int i = 0 ; i < n ; i++){
        	String[] s = new String[4];
        	for(int j = 0 ; j < 4 ; j++){
        		s[j] = input.next();
        	}
            pw.print("Case #"+(i+1)+": "+win(s));
            pw.println();
        }
		input.close();
		pw.flush();
		pw.close();
	}
	    	
    public static String win(String[] s){
    	for(int i = 0 ; i < 4 ; i++){
    		int Tcount = 0;
    		int Ocount = 0;
    		int Xcount = 0;
    		for(int j = 0 ; j < 4 ; j++){
    			if(s[i].charAt(j) == 'X'){
    				Xcount++;
    			}else if(s[i].charAt(j) == 'O'){
    				Ocount++;
    			}else if(s[i].charAt(j) == 'T'){
    				Tcount++;
    			}
    		}
    		if(Xcount == 4 || (Xcount == 3 && Tcount == 1))return "X won";
    		if(Ocount == 4 || (Ocount == 3 && Tcount == 1))return "O won";
    	}
    	
    	for(int i = 0 ; i < 4 ; i++){
    		int Tcount = 0;
    		int Ocount = 0;
    		int Xcount = 0;
    		for(int j = 0 ; j < 4 ; j++){
    			if(s[j].charAt(i) == 'X'){
    				Xcount++;
    			}else if(s[j].charAt(i) == 'O'){
    				Ocount++;
    			}else if(s[j].charAt(i) == 'T'){
    				Tcount++;
    			}
    		}
    		if(Xcount == 4 || (Xcount == 3 && Tcount == 1))return "X won";
    		if(Ocount == 4 || (Ocount == 3 && Tcount == 1))return "O won";
    	}
    	
		int Tcount = 0;
		int Ocount = 0;
		int Xcount = 0;
    	for(int i = 0 ; i < 4 ; i++){
			if(s[i].charAt(i) == 'X'){
				Xcount++;
			}else if(s[i].charAt(i) == 'O'){
				Ocount++;
			}else if(s[i].charAt(i) == 'T'){
				Tcount++;
			}
    		if(Xcount == 4 || (Xcount == 3 && Tcount == 1))return "X won";
    		if(Ocount == 4 || (Ocount == 3 && Tcount == 1))return "O won";
    	}
    	
		Tcount = 0;
		Ocount = 0;
		Xcount = 0;
    	for(int i = 0 ; i < 4 ; i++){
			if(s[i].charAt(3-i) == 'X'){
				Xcount++;
			}else if(s[i].charAt(3-i) == 'O'){
				Ocount++;
			}else if(s[i].charAt(3-i) == 'T'){
				Tcount++;
			}
    		if(Xcount == 4 || (Xcount == 3 && Tcount == 1))return "X won";
    		if(Ocount == 4 || (Ocount == 3 && Tcount == 1))return "O won";
    	}
    	int counter = 0;
    	for(int i = 0 ; i < 4 ; i++){
    		for(int j = 0 ; j < 4 ; j++){
    			if(s[i].charAt(j) != '.'){
    				counter++;
    			}
    		}
    	}
    	if(counter == 16){
    		return "Draw";
    	}else{
    		return "Game has not completed";
    	}
    }

}