#include <iostream>
using namespace std;

int main(){
	float primeiro, segundo;
	
	printf("Digite um numero inteiro: ");
	scanf("%f", &primeiro);
	
	printf("Digite um numero real: ");
	scanf("%f", &segundo);
	
	printf("Voce informou os numeros %0.0f e %0.02f", primeiro, segundo);
}
