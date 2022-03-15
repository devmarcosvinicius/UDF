#include <iostream>
using namespace std;

int main(){
	int numero;
	
	printf("digite um numero inteiro: ");
	scanf("%i", &numero);
	
	if(!(numero % 3)){
		printf("O numero %i que voce informou e MULTIPLO de 3", numero);
	} else {
		printf("O numero %i que voce informou NAO e MULTIPLO de 3", numero);
	}
}
