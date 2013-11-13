package com.chcat;

import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.DataInputStream;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.FileWriter;
import java.io.IOException;
import java.io.InputStreamReader;

public class A {
	private static int T;
	private static int t;
	
	private static char[][] field;
	static{
		field = new char[4][];
		for (int i=0; i<4; i++){
			field[i] = new char [4];
		}
	}
	
	private static int X;
	private static int O;
	
	private static boolean containsDot;
	
	private static String solution = "NOT SOLVED";
	
	private static BufferedReader reader;
	private static BufferedWriter writer;
	
	public static void main(String[] args) {
		String input_file_name;
		String output_file_name;
		
		if (args.length < 2) {
			input_file_name="r:\\input.txt";
			output_file_name = "r:\\output.txt";
		} else {
			input_file_name = args[0];
			output_file_name = args[1];
		}
		
		try {
			writer = new BufferedWriter(new FileWriter(output_file_name));
			reader = new BufferedReader(new InputStreamReader(new DataInputStream(new FileInputStream(input_file_name))));
			
			String readed_line = reader.readLine();
			T = Integer.parseInt(readed_line);
			
			for (t = 1; t<=T; t++){
				readTestCaseConditions();
				solveTestCase();
				writeTestCaseSolution();
			}
			
			reader.close();
			
			writer.flush();
			writer.close();
			
		} catch (FileNotFoundException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		} catch (IOException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		} finally {
		}	
	}
	
	private static void readTestCaseConditions() throws IOException{
		containsDot = false;
		
		String readed_line;
		for (int j=0; j<4; j++){
			readed_line = reader.readLine();
			for (int i=0; i<4; i++){
				char symbol = readed_line.charAt(i);
				field[i][j] = symbol;
				
				if (symbol == '.'){
					containsDot = true;
				}
			}
		}
		
		reader.readLine();
	}
	
	private static void writeTestCaseSolution() throws IOException{
		writer.append("Case #"+String.valueOf(t)+": "+solution);
		writer.newLine();
	}
	
	private static void solveTestCase(){
		
		for (int j=0; j<4; j++){
			
			resetCounter();
			
			for (int i=0; i<4; i++){
				count(field[i][j]);
			}
			
			if (determineWinner()){
				return;
			}
		}
		
		for (int j=0; j<4; j++){
			
			resetCounter();
			
			for (int i=0; i<4; i++){
				count(field[j][i]);
			}
			
			if (determineWinner()){
				return;
			}
		}
		
		resetCounter();
		for (int i = 0; i <4; i++){
			count(field[i][i]);
		}
		if (determineWinner()){
			return;
		}
		
		resetCounter();
		for (int i = 0; i <4; i++){
			count(field[i][3-i]);
		}
		if (determineWinner()){
			return;
		}
		
		if (containsDot){
			solution = "Game has not completed";
		} else {
			solution = "Draw";
		}
	}

	private static boolean determineWinner(){
		if (X==4){
			solution = "X won";
			return true;
		}
		if (O==4){
			solution = "O won";
			return true;
		}
		
		return false;
	}
	
	private static void resetCounter(){
		X=0;
		O=0;
	}
	
	private static void count(char symbol){
		if (symbol == '.'){
			return;
		}
		
		if (symbol == 'X'){
			X++;
			return;
		}
		
		if (symbol == 'O'){
			O++;
			return;
		}
		
		if (symbol == 'T'){
			X++;
			O++;
			return;
		}
	}
	
}
