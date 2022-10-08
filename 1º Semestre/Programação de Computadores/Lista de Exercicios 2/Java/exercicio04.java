package me.marcosderek.lista2;

import java.util.Scanner;

/*
 * 4. Elabore um algoritmo que solicite ao usuário um número real e ao final imprima na tela se o número informado é positivo, negativo ou nulo (zero)
 */

public class exercicio04 {
	private static Scanner input = new Scanner(System.in);
	
	public static void main(String[] args) {
		float numero;
		
		System.out.println("Digite um numero real: ");
		numero = input.nextFloat();
		
		if(numero > 0) {
			System.out.println("O numero é positivo.");
		} else if(numero == 0){
			System.out.println("O numero é nulo.");
		} else {
			System.out.println("O numero é negativo.");
		}
	}
}
