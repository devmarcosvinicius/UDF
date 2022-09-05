package me.marcosderek.lista1;

import java.util.Scanner;

public class exercicio07 {
	private static Scanner input = new Scanner(System.in);
	
	public static void main(String[] args) {
		int inteiro;
		float real;
		
		System.out.println("Digite um numero inteiro: ");
		inteiro = input.nextInt();
		
		System.out.println("Digite um numero real: ");
		real = input.nextFloat();
		
		System.out.println("Voce digitou o numero " + inteiro + " e " + String.format("%.2f", real));
		
	}
}
