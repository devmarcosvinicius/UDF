#include <iostream>
using namespace std;

int main(){
	float num1, num2;
	
	cout << "Digite dois numeros: ";
	cin >> num1 >> num2;
	
	if(num1 > num2){
		cout << num1 << " e maior que " << num2 << "\n";
		cout << num2 << " e menor que " << num1;
	} else if(num1 < num2) {
		cout << num2 << " e maior que " << num1 << "\n";
		cout << num1 << " e menor que " << num2;
	} else if(num1 == num2){
		cout << num1 << " igual a " << num2;
	}
	
}
