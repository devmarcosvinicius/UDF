"""
14. Elabore um algoritmo que solicite ao usuário 10 números reais e ao final apresente o
maior e o menor deles.
"""

i = 1
userInput = ""
numeros = []

while i <= 10:
    userInput = float(input("Digite um numero real: "))
    numeros.append(userInput)

    if(i > userInput):
        userInput = i

    i += 1

numeros.sort()
print("O numero maior é: ", numeros[-1])
print("O numero menor é: ", numeros[0])