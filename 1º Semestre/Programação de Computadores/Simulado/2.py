"""
Crie um Python Script que realize o mesmo procedimento da questão anterior. No entanto, 
ao invés do conteúdo da lista nomes ser atribuído no próprio script, faça uma estrutura de repetição 
na qual ela leia uma string do usuário e adicione os nomes digitados por ele, um de cada vez, na lista nomes. 
O término da adição de nomes deve ser indicado quando o usuário inserir uma string vazia (”). 
"""
lista2 = []
dic2 = {}

while True:
  userInput = str(input("Digite um nome: (Para términar insira um valor vazio) "))
  if not userInput:
    break
  lista2.append(userInput)

for x in lista2:
    if x in dic2:
        dic2[x] +=1
    else:
        dic2[x] =1

dic2