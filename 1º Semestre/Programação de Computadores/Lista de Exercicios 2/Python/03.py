"""
3. Elabore um algoritmo que solicite ao usuário um número real e ao final imprima na tela se o
número informado é maior que dez, se é menor que dez, ou se é igual a dez
"""

userInput = float(input("Digite um numero real: "))

if userInput > 10:
    print("O numero", userInput, "é maior que 10.")
elif userInput == 10:
    print("O numero", userInput, "é igual que 10.")
else:
    print("O numero", userInput, "é menor que 10.")