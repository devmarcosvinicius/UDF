package me.marcosderek.lista1;

import java.util.Scanner;

public class exercicio04 {
	private static Scanner input = new Scanner(System.in);
	
	public static void main(String[] args) {
		int primeiroNumero, segundoNumero;
		
		System.out.println("Digite o primeiro numero inteiro: ");
		primeiroNumero = input.nextInt();

		System.out.println("Digite o segundo numero inteiro: ");
		segundoNumero = input.nextInt();	
		
		System.out.println("Voce informou os numeros " + primeiroNumero + " e " + segundoNumero);
	}
}
