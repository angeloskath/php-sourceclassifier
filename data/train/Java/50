import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.FileInputStream;
import java.io.FileOutputStream;
import java.io.InputStreamReader;
import java.io.OutputStreamWriter;


public class Main {
	private static byte[][] board = new byte[4][4];
	public static String resolver(String[] parametros) {
		boolean possibly_unfinished = false;
		for(int i = 0; i < 4; i++) {
			int ganador = 0;
			for(int j = 0; j < 4; j++) {
				switch(parametros[i].charAt(j)) {
				case 'T':
					board[i][j] = 0;
					break;
				case 'X':
					board[i][j] = 1;
					if(ganador == 2)
						ganador = -1;
					if(ganador == 0)
						ganador = 1;
						
					break;
				case 'O':
					board[i][j] = 2;
					if(ganador == 1)
						ganador = -1;
					if(ganador == 0)
						ganador = 2;
					break;
				case '.':
					possibly_unfinished = true;
					ganador = -1;
					board[i][j] = -1;
					break;
				}
			}
			if(ganador == 1) {
				return "X won";
			}
			if(ganador == 2) {
				return "O won";
			}
		}
		for(int j = 0; j < 4; j++) {
			int ganador = 0;
			checkline:
			for(int i = 0; i < 4; i++) {
				switch(board[i][j]) {
				case -1:
					ganador = -1;
					break checkline;
				case 1:
					if(ganador == 2) {
						ganador = -1;
						break checkline;
					}
					if(ganador == 0)
						ganador = 1;
					break;
				case 2:
					if(ganador == 1) {
						ganador = -1;
						break checkline;
					}
					if(ganador == 0)
						ganador = 2;
					break;
				}
			}
			if(ganador == 1) {
				return "X won";
			}
			if(ganador == 2) {
				return "O won";
			}
		}
		int ganador = 0;
		for(int i = 0; i < 4; i++) {
			switch(board[i][i]) {
			case -1:
				ganador = -1;
				break;
			case 1:
				if(ganador == 2)
					ganador = -1;
				if(ganador == 0)
					ganador = 1;
				break;
			case 2:
				if(ganador == 1)
					ganador = -1;
				if(ganador == 0)
					ganador = 2;
				break;
			}
		}
		if(ganador == 1) {
			return "X won";
		}
		if(ganador == 2) {
			return "O won";
		}
		
		ganador = 0;
		for(int i = 0; i < 4; i++) {
			switch(board[i][3-i]) {
			case -1:
				ganador = -1;
				break;
			case 1:
				if(ganador == 2)
					ganador = -1;
				if(ganador == 0)
					ganador = 1;
				break;
			case 2:
				if(ganador == 1)
					ganador = -1;
				if(ganador == 0)
					ganador = 2;
				break;
			}
		}
		if(ganador == 1) {
			return "X won";
		}
		if(ganador == 2) {
			return "O won";
		}
		
		if(possibly_unfinished) {
			return "Game has not completed";
		}
		return "Draw";
		
	}
	public static void main(String[] args) throws Exception {
        System.out.println("?");
        BufferedReader lector = new BufferedReader(new InputStreamReader(System.in));
        String tipo = lector.readLine().trim();
        BufferedReader entrada = new BufferedReader(new InputStreamReader(new FileInputStream(tipo + ".in")));
        BufferedWriter salida = new BufferedWriter(new OutputStreamWriter(new FileOutputStream(tipo + ".out")));
        int casos = Integer.parseInt(entrada.readLine());
        int contador = 1;
        String parametros[] = new String[4];
        while(casos > 0) {
        	for(int i = 0; i < 4; i++)
        		parametros[i] = entrada.readLine().trim();
        	entrada.readLine();
            salida.write("Case #" + contador + ": " + resolver(parametros) + "\n");
            contador++;
            casos--;
        }
        entrada.close();
        salida.close();
        System.out.println("Fin");
    }
}
