package me.marcosderek.lista1;

import java.util.Scanner;

public class exercicio08 {
	private static Scanner input = new Scanner(System.in);
	
	public static void main(String[] args) {
		String letra;
		
		System.out.println("Digite a primeira letra do seu nome: ");
		letra = input.next();
		
		System.out.println("Voce digitou " + letra);
	}
}
