package me.marcosderek.lista3;

import java.util.Scanner;

/*
 * 12. Elabore um algoritmo que leia um número de entrada que indicará a quantidade de registros a 
 * serem lidos (N). Em seguida algoritmo deve solicitar o nome e idade de N pessoas e ao 
 * final apresentar o nome da pessoa mais velha.
 */

public class exercicio12 {
	
	public static Scanner input = new Scanner(System.in);

	public static void main(String[] args) {
		int n, idade, idadeMaisVelho;
		char nome, nomeMaisVelho;
		
		System.out.println("Digite a quantidade de numero: ");
		n = input.nextInt();
		
		for(int i = 1; i <= n; i++) {
			System.out.printf("Digite o nome: ");
			nome = input.next().charAt(0);

			System.out.printf("Digite a idade: ");
			idade = input.nextInt();
			
			/*if(idade > idadeMaisVelho) {
				idadeMaisVelho = idade;
				for(int j = 0; j < 30; j++) {
					
				}
			}*/
		}
	}
	
}
