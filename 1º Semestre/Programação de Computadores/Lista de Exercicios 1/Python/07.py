"""
7.	Escreva um programa que solicite ao usuário um número inteiro e um número real e 
ao final apresente na tela os dois números informados formatando com duas casas decimais somente 
o número real da seguinte forma: "Voce informou os numeros N e X.YY" 
"""

intNum = int(input("Digite um numero inteiro: "))
floatInput = float(input("Digite um numero real: "))
floatNum = "{:.2f}".format(floatInput)
print("Voce informou os numeros", intNum, "e", floatNum)