package me.marcosderek.lista3;

/*
 * 6. Elabore um algoritmo que imprima todos os n�meros pares inteiros de 1 at� 1000.
 */

public class exercicio06 {

	public static void main(String[] args) {
		for(int i = 1; i <= 1000; i++) {
			if(i % 2 == 0) {
				System.out.println(i);
			}
		}
	}
	
}
