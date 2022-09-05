package me.marcosderek.lista2;

import java.util.Scanner;

public class exercicio05 {
	private static Scanner input = new Scanner(System.in);
	
	public static void main(String[] args) {
		int numero;
		
		System.out.println("Digite um numero inteiro: ");
		numero = input.nextInt();
		
		if(numero % 3 == 0) {
			System.out.println("O numero é multiplo de 3.");
		} else {
			System.out.println("O numero não é mutiplo de 3.");
		}
	}
}
