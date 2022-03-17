#include <iostream>
using namespace std;

/*7. Escreva um programa que solicite ao usuário um número inteiro e um número real e ao final
apresente na tela os dois números informados formatando com duas casas decimais
somente o número real da seguinte forma: "Voce informou os numeros N e X.YY"*/

int main(){
	int primeiro;
	float segundo;
	
	printf("Digite um numero inteiro: ");
	scanf("%i", &primeiro);
	
	printf("Digite um numero real: ");
	scanf("%f", &segundo);
	
	printf("Voce informou os numeros %i e %0.02f", primeiro, segundo);
}
