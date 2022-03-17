#include <iostream>
using namespace std;

//12. Reescrever o programa anterior apresentando o quadrado e o cubo do número informado

int main(){
	float numero;
	
	printf("Digite um numero real: ");
	scanf("%f", &numero);
	
	printf("\nNumero -> %0.2f", numero);
	printf("\nDobro deste numero -> %0.2f", numero * 2);
	printf("\nQuadrado deste numero -> %0.2f", numero * numero);
	printf("\nCubo deste numero -> %0.2f", numero * numero * numero);
}
