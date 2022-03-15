#include <iostream>
using namespace std;

int main(){
	float celsius, farenheit;
	
	printf("Digite a temperatura atual em Celsius: ");
	scanf("%f", &celsius);
	
	farenheit = celsius * 1.8 + 32;
	
	printf("A temperatura em Farenheit e de: %0.0f", farenheit);
}
