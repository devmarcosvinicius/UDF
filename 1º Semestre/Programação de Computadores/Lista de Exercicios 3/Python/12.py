"""
12. Elabore um algoritmo que leia um número de entrada que indicará a quantidade de
registros a serem lidos (N). Em seguida algoritmo deve solicitar o nome e idade de N
pessoas e ao final apresentar o nome da pessoa mais velha.
"""
entradas = int(input("Digite o numero de pessoas: "))

for i in range(1, entradas):
     userInput = str(input("Digite o nume da pessoa", i))



for i in range(1, userInput):
    username = str(input("Digite o nome da pessoa {}: ".format(i)))
    age = int(input("Digite a idade da pessoa {}: ".format(i)))  
