"""
Faça um programa que leia seis valores numéricos atribuindo-os à duas variáveis do tipo 
lista com três elementos cada. Cada variável irá representar um vetor, informe o produto 
escalar e o produto vetorial destes vetores. 
"""
lista3 = []
lista4 = []

for x in range(3):
  lista3.append(int(input("Digite um numero para primeira lista: ")))
  
for x in range(3):
  lista4.append(int(input("Digite um numero para segunda lista: ")))

sum(lista3 + lista4) * 2 
lista3 + lista4