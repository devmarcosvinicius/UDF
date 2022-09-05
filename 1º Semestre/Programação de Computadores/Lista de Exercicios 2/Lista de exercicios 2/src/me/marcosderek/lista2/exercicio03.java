package me.marcosderek.lista2;

import java.util.Scanner;

public class exercicio03 {
	private static Scanner input = new Scanner(System.in);
	
	public static void main(String[] args) {
		float numero;
		
		System.out.println("Digite um numero real: ");
		numero = input.nextFloat();
		
		if(numero > 10) {
			System.out.println("O numero é maior que 10");
		} else if(numero == 10){
			System.out.println("O numero é igual a 10");
		} else {
			System.out.println("O numero não é maior que 10");
		}
	}
}
