"""
8. Elabore um algoritmo que imprima a soma dos 100 primeiros números inteiros positivos.
"""

for i in range(1, 101):
    for x in range(100, 0, -1):
        print("{} + {} = {}".format(i, x, i + x))