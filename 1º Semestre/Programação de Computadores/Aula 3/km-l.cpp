#include <iostream>
using namespace std;

int main(){
	float km, litros, consumo;
	
	printf("Informe quantos hm o veiculo percorreu: ");
	scanf("%f", &km);
	
	printf("Informe a quantidade de combustivel usado: ");
	scanf("%f", &litros);
	
	consumo = km/litros;
	
	printf("A autonomia do veiculo e de : %0.2f", consumo);
	
}
