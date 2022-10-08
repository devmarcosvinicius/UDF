package me.marcosderek.lista2;

import java.util.Scanner;

/*
 * 12. Elabore um algoritmo que indique se um número digitado está compreendido entre 20 e 90, ou não
 */

public class exercicio12 {
	private static Scanner input = new Scanner(System.in);
	
	public static void main(String[] args) {
		int n;
		
		System.out.println("Digite um numero: ");
		n = input.nextInt();
		
		if(n > 20 && n < 90) {
			System.out.printf("%d esta entre 20 e 90.", n);
		} else {
			System.out.printf("%d nao esta entre 20 e 90.", n);
		}
		
	}

}