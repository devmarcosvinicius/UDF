"""
11.	Elabore um algoritmo que solicite ao usuário um número real e ao final imprima na tela o 
numero informado e na linha de baixo o dobro deste número da seguinte forma:  
    Numero -> X  
    Dobro deste numero -> Y 
 
"""

floatInput = float(input("Digite um numero real: "))
print("""
Numero -> {:.0f}
Dobro deste numero -> {:.0f}
""".format(floatInput, floatInput * 2))