package me.marcosderek.lista1;

import java.util.Scanner;

public class exercicio05 {
	private static Scanner input = new Scanner(System.in);
	
	public static void main(String[] args) {
		Float numero;
		
		System.out.println("Digite um numero real: ");
		numero = input.nextFloat();
		
		System.out.println("Voce informou o numero " + String.format("%.2f", numero));
	}
}
