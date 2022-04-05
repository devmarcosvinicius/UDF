#include <iostream>
using namespace std;

/*1. Elabore um programa que solicite ao usuário um número real e ao final imprima na tela se o
número informado é maior que 10 (dez)*/

int main(){
	int numero;
	
	printf("digite um numero real: ");
	scanf("%i", &numero);
	
	if(numero > 10){
		printf("O numero que voce informou e MAIOR que 10");
	} else {
		printf("O numero que voce informou e MENOR que 10");
	}
}
