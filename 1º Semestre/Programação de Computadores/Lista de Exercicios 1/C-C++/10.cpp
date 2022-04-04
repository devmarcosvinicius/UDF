#include <iostream>
using namespace std;

/*10. Escreva um programa que solicite ao usuário o nome de uma verdura e uma fruta de sua
preferencia e ao final apresente na tela as informações digitadas pelo usuário da seguinte
forma: "Voce gosta de AAAAAAA e BBBBBBB*/

int main(){
	string verdura, fruta;
	
	printf("Digite uma verdura da sua preferencia: ");
	scanf("%s", &verdura);
	
	printf("Digite uma fruta da sua preferencia: ");
	scanf("%s", &fruta);
	
	printf("Voce gosta de %s e %s", &verdura, &fruta);
}
