package me.marcosderek.lista3;

/*
 * 7. Elabore um algoritmo que imprima todos os números ímpares de 1000 até 0.
 */

public class exercicio07 {

	public static void main(String[] args) {
		for(int i = 1000; i >= 0; i--) {
			if(i % 3 == 0) {
				System.out.println(i);
			}
		}
	}
	
}
