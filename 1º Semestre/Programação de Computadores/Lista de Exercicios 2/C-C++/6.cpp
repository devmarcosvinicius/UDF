#include <iostream>
using namespace std;

//6. Refazer o exercício anterior, solicitando antes o múltiplo a ser testado

int main(){
	int numero, multiplo;
	
	printf("digite um numero inteiro: ");
	scanf("%i", &numero);
	
	printf("digite um numero multiplo: ");
	scanf("%i", &multiplo);
	
	if((numero % multiplo) == 0){
		printf("%i e multiplo de %i.", numero, multiplo);
	} else {
		printf("%i nao e multiplo de %i.", numero, multiplo);
	}
}
