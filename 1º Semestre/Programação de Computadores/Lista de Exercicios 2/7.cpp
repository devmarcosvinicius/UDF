#include <iostream>
using namespace std;

int main(){
	int numero;
	
	printf("digite um numero inteiro: ");
	scanf("%i", &numero);
	
	if(!(numero % 2)){
		printf("O numero %i que voce informou e PAR", numero);
	} else {
		printf("O numero %i que voce informou e IMPAR", numero);
	}
}
