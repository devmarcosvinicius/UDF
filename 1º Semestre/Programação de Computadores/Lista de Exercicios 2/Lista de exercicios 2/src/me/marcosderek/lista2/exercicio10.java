package me.marcosderek.lista2;

import java.util.Scanner;

public class exercicio10 {
	private static Scanner input = new Scanner(System.in);
	
	public static void main(String[] args) {
		float prova1, prova2, prova3, resultado;
		
		System.out.println("Digite a nota da primeira prova: ");
		prova1 = input.nextFloat();
		
		System.out.println("Digite a nota da segunda prova: ");
		prova2 = input.nextFloat();
		
		System.out.println("Digite a nota da terceira prova: ");
		prova3 = input.nextFloat();
		
		resultado = ((prova1 * 2) + (prova2 * 3) + (prova3 * 5)) / 10;
		
		System.out.println("O aluno ficou com a media de " + resultado + " pontos.");
		
	}

}
