package me.marcosderek.lista1;

import java.util.Scanner;

public class exercicio03 {
	private static Scanner input = new Scanner(System.in);
	
	public static void main(String[] args) {
		int numero;
		
		System.out.println("Digite um numero inteiro: ");
		numero = input.nextInt();
		
		System.out.println("Foi informado o valor: " + numero);
	}
}
