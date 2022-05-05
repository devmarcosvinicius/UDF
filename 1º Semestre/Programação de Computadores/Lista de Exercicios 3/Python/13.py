"""
13. Elabore um algoritmo que leia um número de entrada que indicará a quantidade de
registros a serem lidos (N). Em seguida algoritmo deve solicitar o sexo (M/F) e idade de N
pessoas e ao final apresentar a média de idade de ambos os gêneros catalogados.
"""

reps = int(input("Digite o numero de entradas de registro a serem lidos: "))
somaSexoMasculino = somaSexoFeminino = somaIdadeMasculino = somaIdadeFeminino = masculino = feminino = 0
i = 1;

while i <= reps:
    sexo = int(input("Qual o sexo da pessoa? (1.Masculino ou 2.feminino): "))
    idade = int(input("Digite a idade da pessoa: "))

    if sexo == 1:
        somaIdadeMasculino = somaIdadeMasculino + idade
        somaSexoMasculino = somaSexoMasculino + sexo
    else :
        somaIdadeFeminino = somaIdadeFeminino + idade
        somaSexoFeminino = somaSexoFeminino + sexo

    i += 1

print("A media da idade do sexo masculino é de: {}".format((somaIdadeMasculino/somaSexoMasculino)))
print("A media da idade do sexo feminino é de: {}".format((somaIdadeFeminino/somaSexoFeminino)))