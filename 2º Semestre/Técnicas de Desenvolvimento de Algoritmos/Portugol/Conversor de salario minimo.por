programa
{
	//Remova os sinais de comentarios das linhas 5 e 18 para o arredondamento do resultado final.

	//inclua biblioteca Matematica
	
	funcao inicio()
	{
		real salarioMinimo, salario, resultado

		escreva("Digite o valor do salário mínimo: ")
		leia(salarioMinimo)
		
		escreva("Digite o valor do salário: ")
		leia(salario)

		resultado = salario / salarioMinimo
		//resultado = Matematica.arredondar(resultado, 2)

		escreva("O salário equivale a " + resultado + " salário(s) mínimo(s).")
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 510; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */