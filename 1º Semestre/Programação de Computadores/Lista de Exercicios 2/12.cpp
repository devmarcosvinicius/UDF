#include <iostream>
#include <string>
using namespace std;

int main(){
	float numero;
	
	printf("Digite um numero: ");
	scanf("%f", &numero);
	
	if(numero >= 20 || numero <= 90){
		printf("%0.0f esta entre 20 e 90", numero);
	}
}
