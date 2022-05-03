"""
11. Elabore um algoritmo que leia um número de entrada que indicará a quantidade de
números a serem lidos. Em seguida, leia n números (conforme o valor informado
anteriormente) e imprima a soma e a média aritmética dos números informados.
"""

reps = int(input("Digite o numero de entradas para serem lidas: "))
soma = 0
media = 0
i = 1

while i <= reps:
    soma = soma + i
    media = soma / i
    i+=1 

print("A soma dos numeros entre 1 e {} é igual a {}".format(reps, soma))
print("A media dos entre os numeros 1 e {} é igual a {:.2f}".format(reps, media))