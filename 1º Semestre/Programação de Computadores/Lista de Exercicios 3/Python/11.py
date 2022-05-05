"""
11. Elabore um algoritmo que leia um número de entrada que indicará a quantidade de 
números a serem Lidos. Em seguida, Leia n números (conforme o valor informado 
anteriormente) e imprima a soma e a média aritmética dos números informados.
"""

repInput = int(input ("Digite o numero de repetições: "))
userInput = int(input("Digite um numero: "))
soma = 0

for i in range(0, repInput):
    soma = soma + userInput

print("A soma é de", userInput,",",  repInput, "vezes, é igual a", soma)
print("A media aritmetica de", userInput, ",", repInput, "vezes, é igual a", soma/repInput)