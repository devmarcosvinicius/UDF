#include <iostream>
using namespace std;

int main(){
	char operation;
	float num1, num2;
	
	cout << "Digite o operador (Ex: +, -, * ou /): ";
	cin >> operation;
	cout << "Digite os dois operandos: ";
	cin >> num1 >> num2;
	
	switch(operation){
		case '+':
			cout << num1 + num2;
			break;
		case '-':
			cout << num1 - num2;
			break;
		case '*':
			cout << num1 * num2;
			break;
		case '/':
			cout << num1 / num2;
			break;
		default:
			cout << "Voce usou um operador invalido!";
			break;
		
	}
	
}
