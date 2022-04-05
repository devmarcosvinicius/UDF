"""
1. Elabore um programa que solicite ao usuário um número real
 e ao final imprima na tela se o número informado é maior que 10 (dez)
"""

userInput = float(input("Digite um numero real: "))

if userInput > 10:
    print("O numero", userInput, "é maior que 10.")
else:
    print("O numero", userInput, "é menor que 10.")