#include <iostream>
#include <cmath>
using namespace std;

int main(){
	float numero1, numero2, squareroot;
	
	printf("digite o primeiro numero inteiro: ");
	scanf("%f", &numero1);
	
	printf("digite o segundo numero inteiro: ");
	scanf("%f", &numero2);
	
	squareroot = sqrt(numero1 + numero2);
	
	if(numero1 + numero2 > 10){
		printf("A raiz da soma de %0.2f e %0.2f e igual a %0.2f", numero1, numero2, squareroot);
	} else {
		printf("A metade da soma de %0.2f e %0.2f e igual a %0.2f", numero1, numero2, (numero1 + numero2)/ 2);
	}
}
