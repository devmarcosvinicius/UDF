"""
Crie um Python Script que conte quantas vezes cada nome está presente em uma lista [’nome1’, ’nome2’, ...] 
e armazena essa contagem em um dicionário {’nome1’: xvezes, ’nome2’: yvezes, ....}.
"""
lista1 = ["Marcos", "Kadidja", "Vinicius", "Kadidja", "Maria", "Marcos", "Maria", "Kadidja"]
dic1 = {}

for x in lista1:
    if x in dic1:
        dic1[x] +=1
    else:
        dic1[x] =1

dic1