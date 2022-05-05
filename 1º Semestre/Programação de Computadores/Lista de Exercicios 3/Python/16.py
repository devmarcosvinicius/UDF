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

print("A média aritimética da idade da turma é de ", (sum(idades))/len(idades))
print("A mediana da idade da turma é de ", (statistics.median(idades)))