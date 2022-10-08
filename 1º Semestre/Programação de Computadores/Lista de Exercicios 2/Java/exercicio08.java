package me.marcosderek.lista2;

import java.util.Scanner;

/*
 * 8. Elabore um algoritmo que leia um número, e se ele for maior do que 20, imprimir a metade desse número, caso contrário, imprimir o dobro do número
 */

public class exercicio08 {
	private static Scanner input = new Scanner(System.in);
	
	public static void main(String[] args) {
		float numero;
		
		System.out.println("Digite um numero: ");
		numero = input.nextFloat();
		
		if(numero > 20) {
			System.out.println("A metade de " + numero + " é " + numero / 2);
		} else {
			System.out.println("O dobro de " + numero + " é " + numero * 2);
		}
	}

}
