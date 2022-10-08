#include <iostream>
using namespace std;

/*
11. Elabore um algoritmo que leia um número de entrada que indicará a quantidade de
números a serem lidos. Em seguida, leia n números (conforme o valor informado
anteriormente) e imprima a soma e a média aritmética dos números informados.
*/

int main(){
	int n, soma, media, numeros;
	
	cout << "Digite o numero de entradas: ";
	cin >> n;
	
	for(int i = 1; i <= n; i++){
		cout << "Digite um numero: ";
		cin >> numeros;
		
		soma += numeros;
		media = soma / n;
	}
	
	cout << "A soma dos numeros eh igual a: " << soma << "\n";
	cout << "A media aritmetica dos numeros eh igual a: " << media;
}
