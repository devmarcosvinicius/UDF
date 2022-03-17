#include <iostream>
using namespace std;

/*14. Escreva um programa em linguagem C que solicite ao usuário a média para aprovação 
em um curso e em seguida solicite ao usuário o nome, sexo e as 03 notas do aluno e 
ao final imprima a frase: "O aluno XXXXX foi aprovado com media YY" considerando o gênero do(a) aluno(a) 
e se foi aprovado(a) ou reprovado(a)*/

int main(){
	float nota1, nota2, nota3, media;
	string nome;
	bool sexo;
	
	printf("Digite a media de aprovacao do curso: ");
	scanf("%f", &media);
	
	printf("Digite seu nome: ");
	scanf("%s", &nome);
	
	printf("Qual seu sexo (0: Masculino ou 1: Feminino): ");
	scanf("%b", &sexo);
	
	printf("Qual sua primeira nota? ");
	scanf("%f", &nota1);
	
	printf("Qual sua segunda nota? ");
	scanf("%f", &nota2);
	
	printf("Qual sua terceira nota? ");
	scanf("%f", &nota3);
	
	if(sexo){
		if(nota1 + nota2 + nota3 >= media){
			printf("A aluna %s foi aprovada com media %0.2f", &nome, nota1 + nota2 + nota3);
		} else {
			printf("A aluna %s foi reprovada com media %0.2f", &nome, nota1 + nota2 + nota3);
		}
	} else {
		if(nota1 + nota2 + nota3 >= media){
			printf("O aluno %s foi aprovado com media %0.2f", &nome, nota1 + nota2 + nota3);
		} else {
			printf("O aluno %s foi reprovada com media %0.2f", &nome, nota1 + nota2 + nota3);
		}
	}
	
}
