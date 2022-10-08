#include <iostream>
using namespace std;

/*
10. Elabore um algoritmo que solicite ao usuário uma palavra e um número inteiro que
indicará a quantidade de vezes que a palavra digitada será impressa na tela, um em cada
linha.
*/

int main(){
	int n;
	string p;
	
	cout << "Digite uma palavra: ";
	cin >> p;
	
	cout << "Digite um numero inteiro: ";
	cin >> n;
	
	for(int i = 1; i <= n; i++){
		cout << p << "\n";
	}	
}
