#include <iostream>
#include <string>
using namespace std;

int main(){
	float numero1, numero2;
	
	printf("Digite o primeiro numero inteiro: ");
	scanf("%f", &numero1);
	
	printf("Digite o segundo numero inteiro: ");
	scanf("%f", &numero2);
	
	printf("Os numero %0.0f e %0.0f somados correspondem a %0.0f", numero1, numero2, numero1 + numero2);
}
