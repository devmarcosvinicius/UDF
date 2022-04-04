"""
14.	Escreva um programa que solicite ao usuário dois números reais e ao final apresente na tela 
o produto dos dois números informados da seguinte forma: "O produto dos numeros N e X corresponde a Y" 
"""

floatNum1 = float(input("Digite o primeiro numero reais: "))
floatNum2 = float(input("Digite o segundo numero reais: "))

print("O produto dos numeros {} e {} correspondem a {}".format(floatNum1, floatNum2, floatNum1 * floatNum2))