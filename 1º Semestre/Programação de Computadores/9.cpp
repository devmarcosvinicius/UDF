#include <iostream>
#include <string>
using namespace std;

//9. Escreva um programa que solicite ao usuário o nome de sua cor preferida e ao final
//apresente na tela a cor informada pelo usuário da seguinte forma: "Voce gosta da cor AAA"

int main(){
	string cor;
	
	printf("Digite a sua cor preferida: ");
	scanf("%s", &cor);
	
	printf("Voce gosta da cor %s", &cor);
}
