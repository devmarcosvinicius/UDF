#include <iostream>
#include <cmath>
using namespace std;

int main(){
	float nota1, nota2, nota3;
	
	printf("Digite a primeira nota: ");
	scanf("%f", &nota1);
	
	printf("Digite a segunda nota: ");
	scanf("%f", &nota2);
	
	printf("Digite a terceira nota: ");
	scanf("%f", &nota3);
	
	if(nota1 + nota2 + nota3 >= 6){
		printf("Voce foi aprovado! Sua media foi %0.2f pontos", nota1 + nota2 + nota3);
	} else {
		printf("Voce foi reprovado! Sua media foi %0.2f pontos", nota1 + nota2 + nota3);
	}
}
