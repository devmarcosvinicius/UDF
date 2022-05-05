"""
16. Escreva um programa que vá solicitando as idades dos alunos da sala até que todos
sejam informados (perguntar ao usuário se deseja informar a idade do próximo aluno). Ao
final apresentar a idade do mais novo, a idade do mais velho, Quantos alunos têm mais de
18 anos, quantos alunos têm até 18 anos, a média aritmética e a mediana.
"""
import statistics

continuar = 1
userInput = 0
idades = []

while continuar == 1:
    userInput = int(input("Digite a idade do aluno: "))
    idades.append(userInput)
    continuar = int(input("Você deseja informar a idade do proximo aluno? 1.Sim 2.Não "))

idades.sort()

print("A idade do aluno mais Velho é de {}".format(idades[-1]))
print("A idade do aluno mais novo é de {}".format(idades[0]))

idadesMenor = [i for i in idades if i <= 18]
idadesMenor.sort()
print("A idades menores de 18 anos são:", len(idadesMenor))

idadesMaior = [i for i in idades if i >= 18]
idadesMaior.sort()
print("A idades maiores de 18 anos são:", len(idadesMaior))

print("A média aritimética da idade da turma é de {:.2f}".format((sum(idades))/len(idades)))
print("A mediana da idade da turma é de {:.2f}".format((statistics.median(idades))))
