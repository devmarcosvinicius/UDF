"""
7. Desenvolva um algoritmo que classifique um número inteiro fornecido pelo usuário como
par ou ímpar
"""

userInput = int(input("Digite um numero real: "))

if (userInput % 2) == 0:
    print("O numero", userInput, "é par.")
else:
    print("O numero", userInput, "é impar.")