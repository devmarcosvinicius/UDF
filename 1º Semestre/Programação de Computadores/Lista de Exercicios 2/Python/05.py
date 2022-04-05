"""
5. Elabore um algoritmo que leia um número inteiro e imprima uma das mensagens: é múltiplo
de 3, ou, não é múltiplo de 3
"""

userInput = float(input("Digite um numero real: "))

if userInput % 3 == 0:
    print("O numero", userInput, "é multiplo de 3.")
else:
    print("O numero", userInput, "não é multiplo de 3.")