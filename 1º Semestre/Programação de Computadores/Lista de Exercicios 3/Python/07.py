"""
7. Elabore um algoritmo que imprima todos os números ímpares de 1000 até 0.
"""

for i in range(1000, -1, -1):
    if i % 2 != 0:
        print(i)