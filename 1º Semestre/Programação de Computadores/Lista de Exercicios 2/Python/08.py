"""
8. Elabore um algoritmo que leia um número, e se ele for maior do que 20, imprimir a metade
desse número, caso contrário, imprimir o dobro do número
"""

userInput = int(input("Digite um primeiro numero: "))

if userInput > 20:
    print("A metade de", userInput, "é", userInput/2)
else:
    print("O dobro de", userInput, "é", userInput*2)