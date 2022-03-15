#include <iostream>
using namespace std;

int main(){
	float numero;
	
	printf("digite um numero inteiro: ");
	scanf("%f", &numero);
	
	if(numero > 20){
		printf("O dobro de %0.0f e %0.2f", numero, numero*2);
	} else {
		printf("A metade de %0.0f e %0.2f", numero, numero/2);
	}
}
