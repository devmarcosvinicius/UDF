"""
9. Elabore um algoritmo que solicite ao usuário um número inteiro que indicará a quantidade
de vezes que o texto "Hello World!" será impresso na tela, um em cada linha.
"""

numInput = int(input("Digite um numero inteiro: "))
for i in range(0, numInput):
    print("Hello World!")