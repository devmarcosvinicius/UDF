"""
10. Elabore um algoritmo que solicite ao usuário uma palavra e um número inteiro que
indicará a quantidade de vezes que a palavra digitada será impressa na tela, um em cada
linha.
"""

strInput = str(input("Digite uma palavra: "))
intInput = int(input("Digite o repetições para a {}: ".format(strInput)))

for i in range(0, intInput):
    print(strInput)