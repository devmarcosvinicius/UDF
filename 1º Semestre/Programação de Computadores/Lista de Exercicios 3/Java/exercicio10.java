package me.marcosderek.lista3;

import java.util.Scanner;

/*
 * 10. Elabore um algoritmo que solicite ao usuário uma palavra e um número inteiro que indicará 
 * a quantidade de vezes que a palavra digitada será impressa na tela, um em cada linha.
 */

public class exercicio10 {
	
	public static Scanner input = new Scanner(System.in);

	public static void main(String[] args) {
		int n;
		String palavra;
		
		System.out.println("Digite uma palavra: ");
		palavra = input.next();
		
		System.out.println("Digite um numero inteiro: ");
		n = input.nextInt();
		
		for(int i = 1; i <= n; i++) {
			System.out.println(palavra);
		}
	}
	
}
