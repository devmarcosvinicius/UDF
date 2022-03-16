#include <iostream>
#include <string>
using namespace std;

/*13.Escreva um programa que solicite ao usuário dois números inteiros e ao final apresente
na tela a soma dos dois números informados da seguinte forma: "O numeros N e X
somados correspondem a Y"*/

int main(){
	float numero1, numero2;
	
	printf("Digite o primeiro numero inteiro: ");
	scanf("%f", &numero1);
	
	printf("Digite o segundo numero inteiro: ");
	scanf("%f", &numero2);
	
	printf("Os numero %0.0f e %0.0f somados correspondem a %0.0f", numero1, numero2, numero1 + numero2);
}
