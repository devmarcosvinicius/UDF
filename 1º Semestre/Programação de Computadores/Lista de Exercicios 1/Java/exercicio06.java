package me.marcosderek.lista1;

import java.util.Scanner;

public class exercicio06 {
	private static Scanner input = new Scanner(System.in);
	
	public static void main(String[] args) {
		int celsius, farenheit;
		
		System.out.println("Digite a temperatura em graus Ceusius para ser convertida em Farenheit: ");
		celsius = input.nextInt();
		
		farenheit = (int) (celsius * 1.8 + 32);
		
		System.out.println("A temperatura de " + celsius + "°C é igual a " + farenheit + "°F.");
		
	}

}
