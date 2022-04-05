"""
4. Elabore um algoritmo que solicite ao usuário um número real e ao final imprima na tela se o
número informado é positivo, negativo ou nulo (zero)
"""

userInput = float(input("Digite um numero real: "))

if userInput > 0:
    print("O numero", userInput, "é positivo.")
elif userInput == 0:
    print("O numero", userInput, "é nulo.")
else:
    print("O numero", userInput, "é negativo.")