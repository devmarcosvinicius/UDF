#include <iostream>
using namespace std;

/*
12. Elabore um algoritmo que leia um número de entrada que indicará a quantidade de
registros a serem lidos (N). Em seguida algoritmo deve solicitar o nome e idade de N
pessoas e ao final apresentar o nome da pessoa mais velha.
*/

int main(){
	float n, sexo, idade, idadeMasc, idadeFem, sexoMasc, sexoFem;
	
	cout << "Digite o numero de pessoas: ";
	cin >> n;
	
	for(int i = 1; i <= n; i++){
		cout << "Digite o sexo da pessoa: 1. Masculino 2. Feminino ";
		cin >> sexo;
		
		cout << "Digite a idade da pessoa: ";
		cin >> idade;
	
		if(sexo == 1){
			idadeMasc += idade;
			sexoMasc += sexo;
		} else if(sexo == 2) {
			idadeFem += idade;
			sexoFem += sexo / 2;
		}
	}
	
	cout << "A media do sexo masculino eh de: " << idadeMasc/sexoMasc << "\n";
	cout << "A media do sexo feminino eh de: " << idadeFem/sexoFem;
}
