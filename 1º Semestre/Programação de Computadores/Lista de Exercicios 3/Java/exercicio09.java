package me.marcosderek.lista3;

import java.util.Scanner;

/*
 * 9. Elabore um algoritmo que solicite ao usu�rio um n�mero inteiro que indicar� a quantidade de vezes que o texto 
 * "Hello World!" ser� impresso na tela, um em cada linha.
 */

public class exercicio09 {
	
	public static Scanner input = new Scanner(System.in);

	public static void main(String[] args) {
		int n;
		
		System.out.println("Digite um numero inteiro: ");
		n = input.nextInt();
		
		for(int i = 1; i <= n; i++) {
			System.out.println("Hello World!");
		}
	}
	
}
