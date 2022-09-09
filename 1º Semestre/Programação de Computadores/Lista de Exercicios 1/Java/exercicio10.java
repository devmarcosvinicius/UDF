package me.marcosderek.lista1;

import java.util.Scanner;

public class exercicio10 {
	private static Scanner input = new Scanner(System.in);
	
	public static void main(String[] args) {
		String verdura, fruta;
		
		System.out.println("Digite o nome de uma verdura que voce goste: ");
		verdura = input.next();

		System.out.println("Digite o nome de uma fruta que voce goste: ");
		fruta = input.next();
		
		System.out.println("Voce gosta de " + verdura + " e " + fruta);
	}
}
