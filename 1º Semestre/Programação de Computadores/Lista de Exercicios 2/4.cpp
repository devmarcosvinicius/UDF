#include <iostream>
using namespace std;

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
