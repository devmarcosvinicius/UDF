#include <iostream>
using namespace std;

/*
12. Elabore um algoritmo que leia um número de entrada que indicará a quantidade de
registros a serem lidos (N). Em seguida algoritmo deve solicitar o nome e idade de N
pessoas e ao final apresentar o nome da pessoa mais velha.
*/

int main(){
	int n, idades, idadeMaisVelho;
	char nomes[30], nomeMaisVelho[30];
	
	cout << "Digite o numero de pessoas: ";
	cin >> n;
	
	for(int i = 1; i <= n; i++){
		cout << "Digite o nome da pessoa: ";
		cin >> nomes;
		
		cout << "Digite a idade da pessoa: ";
		cin >> idades;
	
		if(idades > idadeMaisVelho){
			idadeMaisVelho = idades;
			for(int j = 0; j < 30; j++){
				nomeMaisVelho[j] = nomes[j];
			}
		}
	}
	
	cout << nomeMaisVelho << " eh a pessoa mais velha com " << idadeMaisVelho << " anos.";
}
