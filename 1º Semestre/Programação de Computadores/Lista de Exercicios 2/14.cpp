#include <string>
#include <iostream>
using namespace std;

int main(){
	float nota1, nota2, nota3;
	string nome;
	bool sexo;
	
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
		if(nota1 + nota2 + nota3 >= 6){
			printf("A aluna %s foi aprovada com media %0.2f", &nome, nota1 + nota2 + nota3);
		} else {
			printf("A aluna %s foi reprovada com media %0.2f", &nome, nota1 + nota2 + nota3);
		}
	} else {
		if(nota1 + nota2 + nota3 >= 6){
			printf("O aluno %s foi aprovado com media %0.2f", &nome, nota1 + nota2 + nota3);
		} else {
			printf("O aluno %s foi reprovada com media %0.2f", &nome, nota1 + nota2 + nota3);
		}
	}
	
}
