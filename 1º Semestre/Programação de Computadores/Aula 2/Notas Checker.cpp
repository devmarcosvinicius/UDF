#include <iostream>
using namespace std;

int main(){
	float Nota1, Nota2;
	
	printf("Informe sua primeira nota: ");
	scanf("%f", &Nota2);
	
	printf("Informe sua segunda nota: ");
	scanf("%f", &Nota2);
	
	printf("A sua nota final foi de: %0.2f pontos\n", Nota1 + Nota2);
	printf("A sua nota media final foi de: %0.2f pontos", (Nota1 + Nota2) / 2);
	
}
