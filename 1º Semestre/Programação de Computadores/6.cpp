#include <iostream>
using namespace std;

//6. Escreva um programa que solicite ao usuário a temperatura em graus Celsius e ao final
//apresente a temperatura correspondente em graus Farenheit. F = Celsius * 1.8 + 32

int main(){
	float celsius, farenheit;
	
	printf("Digite a temperatura atual em Celsius: ");
	scanf("%f", &celsius);
	
	farenheit = celsius * 1.8 + 32;
	
	printf("A temperatura em Farenheit e de: %0.0f", farenheit);
}
