"""
14. Escreva um programa em linguagem C que solicite ao usuário a média para aprovação
em um curso e em seguida solicite ao usuário o nome, sexo e as 03 notas do aluno e ao
final imprima a frase: "O aluno XXXXX foi aprovado com media YY" considerando o gênero
do(a) aluno(a) e se foi aprovado(a) ou reprovado(a)
"""

mediaInput = float(input("Qual a media para aprovação? "))
nomeInput = str(input("Qual o seu nome? "))
sexoInput = str(input("Qual o seu sexo? (masculino ou femino) ")).lower()
nota1 = float(input("Digite a primeira nota: "))
nota2 = float(input("Digite a segunda nota: "))
nota3 = float(input("Digite a terceira nota: "))
media = (nota1 + nota2 + nota3) / 3

if media >= mediaInput:
    if sexoInput != "masculino":
        print("A aluna {} foi aprovada com media {}".format(nomeInput, media))
    else:
        print("O aluno {} foi aprovado com media {}".format(nomeInput, media))
else:
    if sexoInput != "mascuino":
        print("A aluna {} foi reprovada com media {}".format(nomeInput, media))
    else:
        print("O aluno {} foi reprovado com media {}".format(nomeInput, media))