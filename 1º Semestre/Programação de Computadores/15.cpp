#include <iostream>
#include <string>
using namespace std;

//15. Refazer o programa 14 realizando as quatro operações aritméticas básicas

int main(){
	float numero1, numero2;
	
	printf("Digite o primeiro numero real: ");
	scanf("%f", &numero1);
	
	printf("Digite o segundo numero real: ");
	scanf("%f", &numero2);
	
	printf("\nA soma dos numeros %0.02f e %0.02f corresponde a %0.02f", numero1, numero2, numero1 + numero2);
	printf("\nA subtracao dos numeros %0.02f e %0.02f corresponde a %0.02f", numero1, numero2, numero1 - numero2);
	printf("\nA divisao dos numeros %0.02f e %0.02f corresponde a %0.02f", numero1, numero2, numero1 / numero2);
	printf("\nO produto dos numeros %0.02f e %0.02f corresponde a %0.02f", numero1, numero2, numero1 * numero2);
}
