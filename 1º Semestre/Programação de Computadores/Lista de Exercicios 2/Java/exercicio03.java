package me.marcosderek.lista2;

import java.util.Scanner;

/*
 * 3. Elabore um algoritmo que solicite ao usu�rio um n�mero real e ao final imprima na tela se o n�mero informado � maior que dez, se � menor que dez, ou se � igual a dez
 */

public class exercicio03 {
	private static Scanner input = new Scanner(System.in);
	
	public static void main(String[] args) {
		float numero;
		
		System.out.println("Digite um numero real: ");
		numero = input.nextFloat();
		
		if(numero > 10) {
			System.out.println("O numero � maior que 10");
		} else if(numero == 10){
			System.out.println("O numero � igual a 10");
		} else {
			System.out.println("O numero n�o � maior que 10");
		}
	}
}
