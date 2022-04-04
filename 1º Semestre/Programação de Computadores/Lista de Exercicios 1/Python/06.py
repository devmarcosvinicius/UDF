"""
6.	Escreva um programa que solicite ao usuário a temperatura em graus Celsius e ao final apresente a 
temperatura correspondente em graus Farenheit. F = Celsius * 1.8 + 32 
"""

celsiusInput = int(input("Digite a temperatura em grau(s) Celsius: "))
farenheit = celsiusInput * 1.8 + 32
print("A temperatura em Farenheit é de:", farenheit, "grau(s).")