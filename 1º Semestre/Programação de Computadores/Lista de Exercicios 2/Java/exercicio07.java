package me.marcosderek.lista2;

import java.util.Scanner;

/*
 * 7. Desenvolva um algoritmo que classifique um n�mero inteiro fornecido pelo usu�rio como par ou �mpar
 */

public class exercicio07 {
	private static Scanner input = new Scanner(System.in);
	
	public static void main(String[] args) {
		int numero;
		
		System.out.println("Digite um numero inteiro: ");
		numero = input.nextInt();
		
		if(numero % 2 == 0) {
			System.out.println("O " + numero + " � par.");
		} else {
			System.out.println("O " + numero + " � impar.");
		}
	}
}
