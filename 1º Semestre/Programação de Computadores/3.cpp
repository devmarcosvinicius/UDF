#include <iostream>
using namespace std;

//3. Escreva um programa que solicite ao usuário um número inteiro e ao final apresente na tela
//o número informado da seguinte forma: "Foi informado o valor: X"

int main(){
	float numero;
	
	printf("Digite um numero inteiro: ");
	scanf("%f", &numero);
	
	printf("Foi informado o valor: %0.0f", numero);
}
