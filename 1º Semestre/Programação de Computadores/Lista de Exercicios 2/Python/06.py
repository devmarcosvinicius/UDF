"""
6. Refazer o exercício anterior, solicitando antes o múltiplo a ser testado
"""

numeroReal = float(input("Digite um numero real: "))
numeroMultiplo = float(input("Digite o multiplo: "))

if numeroReal % numeroMultiplo == 0:
    print("O numero", numeroReal, "é multiplo de", numeroMultiplo, ".")
else:
    print("O numero", numeroReal, "não é multiplo de", numeroMultiplo, ".")