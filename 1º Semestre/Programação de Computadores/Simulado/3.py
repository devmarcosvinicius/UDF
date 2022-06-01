"""
Faça um programa que leia seis valores numéricos atribuindo-os à duas variáveis do tipo 
lista com três elementos cada. Cada variável irá representar um vetor, informe o produto 
escalar e o produto vetorial destes vetores. 
"""
import numpy

lista3 = []
lista4 = []

for x in range(3):
  userInput = int(input("Digite um numero: "))
  lista3.append(userInput)
  
for x in range(3):
  userInput = int(input("Digite um numero: "))
  lista4.append(userInput)

numpy.cross(lista3, lista4)