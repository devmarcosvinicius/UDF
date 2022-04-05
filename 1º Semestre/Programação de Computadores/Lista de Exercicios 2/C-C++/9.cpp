#include <iostream>
#include <cmath>
using namespace std;

/*9. Elabore um algoritmo que leia dois números inteiros e realize a adição; caso o resultado
seja maior que 10, imprima o quadrado do resultado, caso contrário, imprima a metade dele*/

int main(){
	int numero1, numero2;
	float squareroot;
	
	printf("digite o primeiro numero inteiro: ");
	scanf("%i", &numero1);
	
	printf("digite o segundo numero inteiro: ");
	scanf("%i", &numero2);
	
	squareroot = sqrt(numero1 + numero2);
	
	if(numero1 + numero2 > 10){
		printf("A raiz da soma de %i e %i e igual a %0.2f", numero1, numero2, squareroot);
	} else {
		printf("A metade da soma de %i e %i e igual a %0.2f", numero1, numero2, (numero1 + numero2)/ 2);
	}
}
