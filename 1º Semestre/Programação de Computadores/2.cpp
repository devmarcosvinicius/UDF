#include <iostream>
using namespace std;

//2. Escreva um programa que solicite ao usuário um número inteiro e ao final apresente na tela
//o número informado pelo usuário do programa


int main(){
	float primeiro, segundo;
	
	printf("Digite o primeiro numero inteiro: ");
	scanf("%f", &primeiro);
	
	printf("Digite o segundo numero inteiro: ");
	scanf("%f", &segundo);
	
	printf("%0.0f e %0.0f", primeiro, segundo);
}
