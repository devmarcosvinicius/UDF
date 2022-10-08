package me.marcosderek.lista2;

import java.util.Scanner;

/*
 * 13. Elabore um algoritmo que leia dois números e imprima qual é maior, qual é menor, ou se são iguais
 */

public class exercicio13 {
	private static Scanner input = new Scanner(System.in);
	
	public static void main(String[] args) {
		int n1, n2;
		
		System.out.println("Digite o primeiro numero: ");
		n1 = input.nextInt();

		System.out.println("Digite o segundo numero: ");
		n2 = input.nextInt();
		
		if(n1 > n2) {
			System.out.printf("%d eh maior que %d.", n1, n2);
		} else if(n2 > n1){
			System.out.printf("%d eh maior que %d.", n2, n1);
		} else {
			System.out.printf("%d eh igual a %d.", n1, n2);
		}
		
	}

}