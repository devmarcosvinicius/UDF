package me.marcosderek.lista1;

import java.util.Scanner;

public class exercicio11 {
	private static Scanner input = new Scanner(System.in);
	
	public static void main(String[] args) {
		float real, dobro;
		
		System.out.println("Digite um numero real: ");
		real = input.nextFloat();
		
		dobro = real * 2;
		System.out.println("Numero -> " + real + "\nDobro -> " + dobro);
	}
}
