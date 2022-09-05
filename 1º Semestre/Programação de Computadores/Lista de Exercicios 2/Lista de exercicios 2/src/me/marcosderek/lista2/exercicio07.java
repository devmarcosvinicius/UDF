package me.marcosderek.lista2;

import java.util.Scanner;

public class exercicio07 {
	private static Scanner input = new Scanner(System.in);
	
	public static void main(String[] args) {
		int numero;
		
		System.out.println("Digite um numero inteiro: ");
		numero = input.nextInt();
		
		if(numero % 2 == 0) {
			System.out.println("O " + numero + " é par.");
		} else {
			System.out.println("O " + numero + " é impar.");
		}
	}
}
