#include <iostream>
#include <string>
using namespace std;

int main(){
	string verdura, fruta;
	
	printf("Digite uma verdura da sua preferencia: ");
	scanf("%s", &verdura);
	
	printf("Digite uma fruta da sua preferencia: ");
	scanf("%s", &fruta);
	
	printf("Voce gosta de %s e %s", &verdura, &fruta);
}
