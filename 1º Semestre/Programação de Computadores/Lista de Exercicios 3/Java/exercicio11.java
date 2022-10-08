package me.marcosderek.lista3;

import java.util.Scanner;

/*
 * 11. Elabore um algoritmo que leia um número de entrada que indicará a quantidade de números a serem lidos. 
 * Em seguida, leia n números (conforme o valor informado anteriormente) e imprima a soma e a média aritmética dos números 
 * informados.a quantidade de vezes que a palavra digitada será impressa na tela, um em cada linha.
 */

public class exercicio11 {
	
	public static Scanner input = new Scanner(System.in);

	public static void main(String[] args) {
		int n1, n2, soma = 0;
		float media = 0;
		
		System.out.println("Digite a quantidade de numero: ");
		n1 = input.nextInt();
		
		for(int i = 1; i <= n1; i++) {
			System.out.printf("Digite o numero: ");
			n2 = input.nextInt();
			
			soma += n2;
			media = soma / n1;
		}
		
		System.out.printf("A soma dos numero eh igual a %d\n", soma);
		System.out.printf("A media dos numero eh igual a %.2f", media);
	}
	
}
