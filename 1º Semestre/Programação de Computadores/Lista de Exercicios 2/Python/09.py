"""
9. Elabore um algoritmo que leia dois números inteiros e realize a adição; caso o resultado
seja maior que 10, imprima o quadrado do resultado, caso contrário, imprima a metade dele
"""

numero1 = int(input("Digite um primeiro numero: "))
numero2 = int(input("Digite um segundo numero: "))

if numero1 + numero2 > 10:
    print("O quadrado de", (numero1+numero2), "é", (numero1+numero2)*(numero1+numero2))
else:
    print("A metade de", (numero1+numero2), "é", (numero1+numero2)/2)