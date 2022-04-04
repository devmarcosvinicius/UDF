"""
12.	Reescrever o programa anterior apresentando o quadrado e o cubo do número informado.
"""

floatInput = float(input("Digite um numero real: "))
print("""
Numero -> {:.0f}
Dobro deste numero -> {:.0f}
Quadrado deste numero -> {:.0f}
Cubo deste numero -> {:.0f}
""".format(floatInput, floatInput * 2, floatInput ** 2, floatInput ** 3))