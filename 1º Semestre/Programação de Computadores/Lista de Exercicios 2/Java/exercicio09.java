package me.marcosderek.lista2;

import java.util.Scanner;

/*
 * 9. Elabore um algoritmo que leia dois n�meros inteiros e realize a adi��o; caso o resultado seja maior que 10, 
 * imprima o quadrado do resultado, caso contr�rio, imprima a metade dele
 */

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
			System.out.println("O quadrado de " + resultado + " � " + resultado * resultado);
		} else {
			System.out.println("A metade de " + resultado + " � " + resultado / 2);
		}
	}
}
