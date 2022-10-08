#include <iostream>
using namespace std;

/*
8. Elabore um algoritmo que imprima a soma dos 100 primeiros números inteiros positivos. 
*/

int main(){
	for(int i = 1; i <= 100; i++){
		cout << i << " + " << i << " = " << i+i << "\n";
	}
}
