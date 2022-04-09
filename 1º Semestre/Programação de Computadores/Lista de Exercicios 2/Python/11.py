"""
11. Elabore um algoritmo que leia o nome e o peso de duas pessoas e imprima o nome da
pessoa mais pesada
"""

pessoa1 = str(input("Digite o nome da primeira pessoa: "))
peso1 = int(input("Digite o peso de " + pessoa1 + ": "))

pessoa2 = str(input("Digite o nome da segunda pessoa: "))
peso2 = int(input("Digite o peso de " + pessoa2 + ": "))

if peso1 > peso2:
    print(pessoa1 + " é mais pesado(a) que " + pessoa2)
else:
    print(pessoa2 + " é mais pesado(a) que " + pessoa1)