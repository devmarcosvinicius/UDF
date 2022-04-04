#include <iostream>
using namespace std;

/*14. Escreva um programa que solicite ao usuário dois números reais e ao final apresente na
tela o produto dos dois números informados da seguinte forma: "O produto dos numeros N
e X corresponde a Y"*/

int main(){
	float numero1, numero2;
	
	printf("Digite o primeiro numero real: ");
	scanf("%f", &numero1);
	
	printf("Digite o segundo numero real: ");
	scanf("%f", &numero2);
	
	printf("O produto dos numeros %0.2f e %0.2f corresponde a %0.2f", numero1, numero2, numero1 * numero2);
}
