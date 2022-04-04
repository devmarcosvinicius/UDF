#include <iostream>
using namespace std;

/*13. Escreva um programa que solicite ao usuário dois números inteiros e ao final apresente
na tela a soma dos dois números informados da seguinte forma: "O numeros N e X
somados correspondem a Y"*/

int main(){
	int numero1, numero2;
	
	printf("Digite o primeiro numero inteiro: ");
	scanf("%i", &numero1);
	
	printf("Digite o segundo numero inteiro: ");
	scanf("%i", &numero2);
	
	printf("Os numero %i e %i somados correspondem a %i", numero1, numero2, numero1 + numero2);
}
