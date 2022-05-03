"""
12. Elabore um algoritmo que leia um número de entrada que indicará a quantidade de
registros a serem lidos (N). Em seguida algoritmo deve solicitar o nome e idade de N
pessoas e ao final apresentar o nome da pessoa mais velha.
"""

nomeMaisVelho= ""
idadeMaisVelho = 1
i = 1

reps = int(input("Digite o numero de entradas a serem lidos: "))

while i <= reps:
    nome = str(input("Digite o nome da pessoa: "))
    idade = int(input("Digite a idade da pessoa: "))

    if idade > idadeMaisVelho:
        idadeMaisVelho = idade
        nomeMaisVelho = nome

    i += 1


print("O nome da pessoa mais velha é {}".format(nomeMaisVelho))