package me.marcosderek.lista2;

import java.util.Scanner;

/*
 * 11. Elabore um algoritmo que leia o nome e o peso de duas pessoas e imprima o nome da pessoa mais pesada
 */

public class exercicio11 {
	private static Scanner input = new Scanner(System.in);
	
	public static void main(String[] args) {
		float peso1 , peso2;
		String p1, p2;
		
		System.out.println("Digite o nome da primeira pessoa: ");
		p1 = input.next();
		
		System.out.printf("Digite o peso de %s: ", p1);
		peso1 = input.nextFloat();
		
		System.out.printf("Digite o nome da segunda pessoa: ");
		p2 = input.next();
		
		System.out.printf("Digite o peso de %s: ", p2);
		peso2 = input.nextFloat();
		
		if(peso1 > peso2) {
			System.out.printf("%s com %.2f quilos, pesa mais do que %s com %.2f quilos.", p1, peso1, p2, peso2);
		} else if(peso2 > peso1){
			System.out.printf("%s com %.2f quilos, pesa mais do que %s com %.2f quilos.", p2, peso2, p1, peso1);			
		} else {
			System.out.printf("%s com %.2f quilos tem o mesmo peso que %s com %.2f quilos.", p1, peso1, p2, peso2);
		}
		
	}

}
