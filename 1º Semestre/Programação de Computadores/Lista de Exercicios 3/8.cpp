#include <iostream>
using namespace std;

/*9. Elabore um algoritmo que imprima a soma dos 100 primeiros números inteiros positivos.*/

int main(){
	for(int i = 100; i >= 1; i-- ) {
		for(int a = 1; a <= 100; a++){
			cout << i <<  " + " << a << " = " << i + a << "\n";	
		}
	}
}
