#include <iostream>
using namespace std;

int main(){
	float primeiro, segundo;
	
	printf("Digite o primeiro numero inteiro: ");
	scanf("%f", &primeiro);
	
	printf("Digite o segundo numero inteiro: ");
	scanf("%f", &segundo);
	
	printf("Voce informou os numeros %0.0f e %0.0f", primeiro, segundo);
}
