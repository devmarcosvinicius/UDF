package me.marcosderek.lista2;

import java.util.Scanner;

/*
 * 8. Elabore um algoritmo que leia um n�mero, e se ele for maior do que 20, imprimir a metade desse n�mero, caso contr�rio, imprimir o dobro do n�mero
 */

public class exercicio08 {
	private static Scanner input = new Scanner(System.in);
	
	public static void main(String[] args) {
		float numero;
		
		System.out.println("Digite um numero: ");
		numero = input.nextFloat();
		
		if(numero > 20) {
			System.out.println("A metade de " + numero + " � " + numero / 2);
		} else {
			System.out.println("O dobro de " + numero + " � " + numero * 2);
		}
	}

}
