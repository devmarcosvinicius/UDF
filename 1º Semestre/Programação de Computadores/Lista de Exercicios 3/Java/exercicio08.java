package me.marcosderek.lista3;

/*
 * 8. Elabore um algoritmo que imprima a soma dos 100 primeiros números inteiros positivos.
 */

public class exercicio08 {

	public static void main(String[] args) {
		for(int i = 1; i <= 100; i++) {
			System.out.printf("%d + %d = %d\n", i, i, i+i);
		}
	}
	
}
