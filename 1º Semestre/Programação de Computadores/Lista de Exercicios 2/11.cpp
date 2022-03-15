#include <iostream>
#include <string>
using namespace std;

int main(){
	float peso1, peso2;
	string nome1, nome2;
	
	printf("Digite o nome da primeira pessoa: ");
	scanf("%s", &nome1);
	
	printf("Digite o seu peso de %s (Ex. 80): ", &nome1);
	scanf("%f", &peso1);
	
	printf("Digite o nome da segunda pessoa: ");
	scanf("%s", &nome2);
	
	printf("Digite o seu peso de %s (Ex. 80): ", &nome2);
	scanf("%f", &peso2);
	
	if(peso1 > peso2){
		printf("%s e mais pessado do que %s.", &nome1, &nome2);
	} else if(peso1 == peso2){
		printf("%s e %s tem o mesmo peso.", &nome1, &nome2);
	} else {
		printf("%s e mais pessado do que %s.", &nome2, &nome1);
	}
}
