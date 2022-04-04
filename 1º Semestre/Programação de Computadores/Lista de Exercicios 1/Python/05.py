"""
5.	Escreva um programa que solicite ao usuário um número real e ao final apresente na tela 
o número informado formatado com duas casas decimais da seguinte forma: "Voce informou o numero X.YY" 
"""

inputFloat = float(input("Digite um numero real: "))
floatNum = "{:.2f}".format(inputFloat)
print("Você informou os numeros", floatNum)