#include <iostream>
using namespace std;

/*5. Elabore um algoritmo que leia um número inteiro e imprima uma das mensagens: é múltiplo
de 3, ou, não é múltiplo de 3*/

int main(){
	int numero;
	
	printf("digite um numero inteiro: ");
	scanf("%i", &numero);
	
	if(numero % 3 == 0){
		printf("e multiplo de 3", numero);
	} else {
		printf("nao e multiplo de 3", numero);
	}
}
