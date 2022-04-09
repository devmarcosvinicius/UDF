"""
10. O sistema de avaliação de determinada disciplina é composto por três provas. A primeira
prova tem peso 2, a segunda tem peso 3 e a terceira tem peso 5. Considerando que a
média para aprovação é 6.0, faça um algoritmo para calcular a média final de um aluno
desta disciplina e dizer se o aluno foi aprovado ou não.
"""

nota1 = float(input("Digite a primeira nota: "))
nota2 = float(input("Digite a segunda nota: "))
nota3 = float(input("Digite a terceira nota: "))
media = 6;

if(2 * nota1 + 3 * nota2 + 5 * nota3) / 10 < media:
    print("Você foi reprovou! Sua media foi de", (2 * nota1 + 3 * nota2 + 5 * nota3) / 10)
else:
    print("Você foi aprovou! Sua media foi de", (2 * nota1 + 3 * nota2 + 5 * nota3) / 10)