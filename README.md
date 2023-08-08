## Instruções para customização ou alteração de código dos serviços:

1. Deverá ser criada uma **branch** do projeto:

Caso não tenha o repositório local (máquina do dev):
```
git clone
git checkout -b nome-da-branch
```

Caso já tenha o repositório local:
```
git checkout -b nome-da-branch
git checkout master
git pull
git checkout nome-da-branch
```

2. Editar ou incluir os arquivos necessários e realizar o *commit* na *branch* criada:

```
git add .
git commit -m "Comentário sobre tudo que foi feito"
```
