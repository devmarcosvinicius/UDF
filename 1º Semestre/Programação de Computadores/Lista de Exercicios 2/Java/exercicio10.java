package me.marcosderek.lista2;

import java.util.Scanner;

/*
 * 10. O sistema de avalia��o de determinada disciplina � composto por tr�s provas. A primeira prova tem peso 2, a segunda tem peso 3 
 * e a terceira tem peso 5. Considerando que a m�dia para aprova��o � 6.0, fa�a um algoritmo para calcular a m�dia final de um 
 * aluno desta disciplina e dizer se o aluno foi aprovado ou n�o
 */

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
