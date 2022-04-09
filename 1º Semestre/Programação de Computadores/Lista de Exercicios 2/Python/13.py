"""
13. Elabore um algoritmo que leia dois números e imprima qual é maior, qual é menor, ou se
são iguais
"""

num1 = float(input("Digite o primeiro numero: "))
num2 = float(input("Digite o segundo numero: "))

if num1 > num2:
    print("{:.2f} é maior que {:.2f}.".format(num1, num2))
elif num2 > num1:
    print("{:.2f} é maior que {:.2f}.".format(num2, num1))
else:
    print("{:.2f} e {:.2f} são iguais.".format(num1, num2))