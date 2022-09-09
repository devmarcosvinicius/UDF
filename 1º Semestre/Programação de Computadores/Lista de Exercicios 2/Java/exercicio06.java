package me.marcosderek.lista2;

import java.util.Scanner;

public class exercicio06 {
	private static Scanner input = new Scanner(System.in);
	
	public static void main(String[] args) {
		int numero, multiplo;
		
		System.out.println("Digite um numero inteiro: ");
		numero = input.nextInt();
		
		System.out.println("Digite um multiplo: ");
		multiplo = input.nextInt();
		
		if(numero % multiplo == 0) {
			System.out.println("O " + numero + " é multiplo de " + multiplo + ".");
		} else {
			System.out.println("O " + numero + " não é multiplo de " + multiplo + ".");
		}
	}
}
