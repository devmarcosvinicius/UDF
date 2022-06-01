"""
Com o programa acima, imprima: A soma dos itens, a média dos valores, o maior e o menor valor.
"""
lista6 = []
userInput = 1
continuar = 1
soma = 0
media = 0

while continuar == 1:
  userInput = int(input("Digite um numero: "))
  lista6.append(userInput)
  continuar = int(input("Você deseja continuar? [1]Sim ou [2]Não "))

for i in lista6:
  soma += i

media = soma / len(lista6)

print(f"""
A soma dos valores é igual a {soma}.
A média dos valores é igual a {media}.
O Maior valor da lista é o valor {max(lista6)}.
O Menor valor da lista é o valor {min(lista6)}.
""")