#include <iostream>
using namespace std;

int main(){
	int numero, multiplo;
	
	printf("digite um numero inteiro: ");
	scanf("%i", &numero);
	
	printf("digite um numero multiplo: ");
	scanf("%i", &multiplo);
	
	if(!(numero % multiplo)){
		printf("O numero que voce informou e MULTIPLO de %i", multiplo);
	} else {
		printf("O numero que voce informou NAO e MULTIPLO de %0i", multiplo);
	}
}
