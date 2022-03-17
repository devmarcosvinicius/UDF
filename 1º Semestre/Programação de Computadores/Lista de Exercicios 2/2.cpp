#include <iostream>
using namespace std;

/*2. Escreva um programa que solicite ao usuário um número real e ao final imprima na tela se
o número informado é maior ou igual a dez ou menor que 10 (dez)*/

int main(){
	float numero;
	
	printf("digite um numero real: ");
	scanf("%f", &numero);
	
	if(numero > 10){
		printf("O numero que voce informou e MAIOR que 10");
	} else {
		printf("O numero que voce informou e MENOR que 10");
	}
}
