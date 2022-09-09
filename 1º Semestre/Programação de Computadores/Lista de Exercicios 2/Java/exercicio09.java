package me.marcosderek.lista2;

import java.util.Scanner;

public class exercicio09 {
	private static Scanner input = new Scanner(System.in);
	
	public static void main(String[] args) {
		float primeiro, segundo, resultado;
		
		System.out.println("Digite o primeiro numero: ");
		primeiro = input.nextFloat();
		
		System.out.println("Digite o segundo numero: ");
		segundo = input.nextFloat();
		
		resultado = primeiro + segundo;
		
		if(resultado > 10) {
			System.out.println("O quadrado de " + resultado + " é " + resultado * resultado);
		} else {
			System.out.println("A metade de " + resultado + " é " + resultado / 2);
		}
	}
}
