package me.marcosderek.lista2;

import java.util.Scanner;

/*
 * 14. Escreva um programa em linguagem C que solicite ao usuário a média para aprovação em um curso e 
 * em seguida solicite ao usuário o nome, sexo e as 03 notas do aluno e ao final imprima a frase: 
 * "O aluno XXXXX foi aprovado com media YY" considerando o gênero do(a) aluno(a) e se foi aprovado(a) ou reprovado(a)
 */

public class exercicio14 {
	public static Scanner input = new Scanner(System.in);
	
	public static void main(String[] args) {
		float mediaAprovacao, n1, n2, n3, media;
		String nome;
		int sexo = 0;
		
		System.out.println("Digite a media de aprovacao: ");
		mediaAprovacao = input.nextFloat();
		
		System.out.println("Digite seu nome: ");
		nome = input.next();
		
		while(sexo == 0) {
			System.out.println("Digite seu sexo: 1. Masculino 2. Feminino ");
			sexo = input.nextInt();
			
			if(!(sexo == 1 || sexo == 2)) {
				System.out.println("Opcao invalida.");
				System.out.println("Digite seu sexo: 1. Masculino 2. Feminino ");
				sexo = input.nextInt();
			}
		}
		
		System.out.println("Digite a primeira nota: ");
		n1 = input.nextFloat();
		
		System.out.println("Digite a segunda nota: ");
		n2 = input.nextFloat();
		
		System.out.println("Digite a terceira nota: ");
		n3 = input.nextFloat();
		
		media = (n1 + n2 + n3) / 3;
		
		if(media >= mediaAprovacao) {
			if(sexo == 1) {
				System.out.printf("O aluno %s foi aprovado com media %.2f", nome, media);
			} else {
				System.out.printf("A aluna %s foi aprovada com media %.2f", nome, media);
			}
		} else {
			if(sexo == 1) {
				System.out.printf("O aluno %s foi reprovado com media %.2f", nome, media);
			} else {
				System.out.printf("A aluna %s foi reprovada com media %.2f", nome, media);
			}
		}
		
	}

}
