#include <iostream>
#include <string>
using namespace std;

int main(){
	float numero;
	
	printf("Digite um numero real: ");
	scanf("%f", &numero);
	
	printf("\nNumero -> %0.2f", numero);
	printf("\nDobro deste numero -> %0.2f", numero * 2);
}
