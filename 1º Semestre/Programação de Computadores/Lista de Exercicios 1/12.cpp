#include <iostream>
#include <string>
using namespace std;

int main(){
	float numero;
	
	printf("Digite um numero real: ");
	scanf("%f", &numero);
	
	printf("\nNumero -> %0.2f", numero);
	printf("\nQuadrado deste numero -> %0.2f", numero * numero);
	printf("\nCubo deste numero -> %0.2f", numero * numero * numero);
}
