package me.marcosderek.lista1;

import java.util.Scanner;

public class exercicio09 {
	private static Scanner input = new Scanner(System.in);
	
	public static void main(String[] args) {
		String cor;
		
		System.out.println("Digite a sua cor preferida: ");
		cor = input.next();
		
		System.out.println("Voce gosta da cor " + cor);
		
	}
}
