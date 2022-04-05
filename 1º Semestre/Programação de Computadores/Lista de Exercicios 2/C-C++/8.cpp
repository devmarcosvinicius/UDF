#include <iostream>
using namespace std;

/*8. Elabore um algoritmo que leia um número, e se ele for maior do que 20, imprimir a metade
desse número, caso contrário, imprimir o dobro do número*/

int main(){
	float numero;
	
	printf("digite um numero inteiro: ");
	scanf("%f", &numero);
	
	if(numero > 20){
		printf("A metade de %0.0f e %0.2f", numero, numero/2);
	} else {
		printf("O dobro de %0.0f e %0.2f", numero, numero*2);
	}
}
