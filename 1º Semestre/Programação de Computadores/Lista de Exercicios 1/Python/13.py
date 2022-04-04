"""
13.	Escreva um programa que solicite ao usuário dois números inteiros e ao final apresente na tela 
a soma dos dois números informados da seguinte forma: "O numeros N e X somados correspondem a Y" 
"""

intNum1 = int(input("Digite o primeiro numero inteiro: "))
intNum2 = int(input("Digite o segundo numero inteiro: "))

print("Os numeros {} e {} somados correspondem a {}".format(intNum1, intNum2, intNum1 + intNum2))