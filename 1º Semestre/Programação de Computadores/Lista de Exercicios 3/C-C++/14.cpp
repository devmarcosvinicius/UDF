#include <iostream>
using namespace std;

/*
12. Elabore um algoritmo que leia um número de entrada que indicará a quantidade de
registros a serem lidos (N). Em seguida algoritmo deve solicitar o nome e idade de N
pessoas e ao final apresentar o nome da pessoa mais velha.
*/

int main(){
	float n, maior, menor;
	
	cout << "Digite o primeiro numero real: \n";
	cin >> n;
	
	menor = n;
	maior = n;
	
	for(int i = 2; i <= 10; i++){
		switch(i){
			case 2:
				cout << "Digite o segundo numero real: \n";
				break;
			case 3:
				cout << "Digite o terceiro numero real: \n";
				break;
			case 4:
				cout << "Digite o quarto numero real: \n";
				break;
			case 5:
				cout << "Digite o quinto numero real: \n";
				break;
			case 6:
				cout << "Digite o sexto numero real: \n";
				break;
			case 7:
				cout << "Digite o setimo numero real: \n";
				break;
			case 8:
				cout << "Digite o oitavo numero real: \n";
				break;
			case 9:
				cout << "Digite o nono numero real: \n";
				break;
			case 10:
				cout << "Digite o decimo numero real: \n";
				break;
		}
		
		cin >> n;
		
		if(n > maior){
			maior = n;
		} else if(n < menor){
			menor = n;
		}
	}
	
	cout << "O maior numero digitado foi: " << maior << "\n";
	cout << "O menor numero digitado foi: " << menor;
}
