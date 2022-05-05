"""
15. Elabore um algoritmo que solicite N números reais e quando o usuário informar o valor
nulo 0 (zero) o programa ordene e mostre todos os números informados de forma crescente.
"""

userInput = 1
numeros = []

while userInput != 0:
    userInput = float(input("Digite um numero real: "))
    numeros.append(userInput)

numeros.sort()
print(numeros)