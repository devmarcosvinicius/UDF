"""
12. Elabore um algoritmo que indique se um número digitado está compreendido entre 20 e
90, ou não
"""

numInput = float(input("Digite um numero: "))

if numInput >= 20 and numInput <= 90:
    print("O numero {:.2f} está entre 20 e 90.".format(numInput))
else:
    print("O numero {:.2f} não está entre 20 e 90.".format(numInput))