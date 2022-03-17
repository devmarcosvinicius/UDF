#include <iostream>
using namespace std;

/*4. Elabore um algoritmo que solicite ao usuário um número real e ao final imprima na tela se o
número informado é positivo, negativo ou nulo (zero)*/

int main(){
	int numero;
	
	printf("digite um numero real: ");
	scanf("%i", &numero);
	
	if(numero > 0){
		printf("O numero que voce informou e POSITIVO");
	} else if(numero == 0) {
		printf("O numero que voce informou e NULO");
	} else {
		printf("O numero que voce informou e NEGATIVO");
	}
}
