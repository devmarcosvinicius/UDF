"""
Escreva um programa que leia um número N. Em sequência, ele deve ser N números e armazená-los em uma lista.
"""
lista5 = []
continuar = 1

while continuar == 1:
  userInput = int(input("Digite um numero: "))
  lista5.append(userInput)
  continuar = int(input("Você deseja continuar? [1]Sim ou [2]Não "))

lista5