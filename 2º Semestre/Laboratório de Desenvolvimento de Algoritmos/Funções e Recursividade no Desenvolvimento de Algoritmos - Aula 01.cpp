#include <stdio.h>
using namespace std;

void BemVindo(char Nome[30]);
int exibirMenu();
float Somar(float numero1, float numero2);
float Subtrair(float numero1, float numero2);
float Dividir(float numero1, float numero2);
float Multiplicar(float numero1, float numero2);
int Terminar(char Nome[30]);

int main() {
	float n1, n2;
	char nome[20];
	
	printf("Digite o seu nome:\n");
	scanf("%s", nome);
	
	BemVindo(nome);
	
	printf("Digite o primeiro numero: ");
	scanf("%f", &n1);
	
	printf("Digite o segundo numero: ");
	scanf("%f", &n2);
	
	int opcao = exibirMenu();
	
	switch(opcao) {
		case 1:
			printf("%.2f + %.2f = %.2f", n1, n2, Somar(n1, n2));
			break;
		case 2: 
			printf("%.2f - %.2f = %.2f", n1, n2, Subtrair(n1, n2));
			break;
		case 3: 
			printf("%.2f * %.2f = %.2f", n1, n2, Multiplicar(n1, n2));
			break;
		case 4: 
			printf("%.2f / %.2f = %.2f", n1, n2, Dividir(n1, n2));
			break;
		case 5: 
			Terminar(nome);
			break;
		default:
			printf("Opcao Invalida!");
	}
}

int exibirMenu() {
	int resposta;
	
	printf("\n1. Somar");
	printf("\n2. Subtrair");
	printf("\n3. Multiplicar");
	printf("\n4. Dividir");
	printf("\n5. Sair\n");
	printf("\nQual operacao voce quer: ");
	
	scanf("%i", &resposta);
	return resposta;
}

void BemVindo(char Nome[30]) {
	printf("\n\nSeja muito bem vindo %s !!\n\n", Nome);
}

float Somar(float numero1, float numero2) {
	return numero1 + numero2;
}

float Subtrair(float numero1, float numero2) {
	return numero1 - numero2;
}

float Dividir(float numero1, float numero2 = 0) {
	if (numero2 == 0) {
		printf("Erro!");
		return 0;
	}
	return numero1 / numero2;
}

float Multiplicar(float numero1, float numero2) {
	return numero1 * numero2;
}

int Terminar(char Nome[30]) {
	printf("Ate mais %s !", Nome);
	return 0;
}
