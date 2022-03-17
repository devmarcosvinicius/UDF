#include <iostream>
using namespace std;

/*11. Elabore um algoritmo que solicite ao usuário um número real e ao final imprima na tela o
numero informado e na linha de baixo o dobro deste número da seguinte forma:
Numero -> X
Dobro deste numero -> Y*/

int main(){
	float numero;
	
	printf("Digite um numero real: ");
	scanf("%f", &numero);
	
	printf("\nNumero -> %0.2f", numero);
	printf("\nDobro deste numero -> %0.2f", numero * 2);
}
