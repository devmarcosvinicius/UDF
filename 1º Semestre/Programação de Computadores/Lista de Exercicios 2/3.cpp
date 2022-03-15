#include <iostream>
using namespace std;

int main(){
	int numero;
	
	printf("digite um numero real: ");
	scanf("%i", &numero);
	
	if(numero > 10){
		printf("O numero que voce informou e MAIOR que 10");
	} else if(numero == 10) {
		printf("O numero que voce informou e IGUAL que 10");
	} else {
		printf("O numero que voce informou e MENOR que 10");
	}
}
