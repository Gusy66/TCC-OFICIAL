# Repositório gerado pelo [Finnetmap Web](http://finnetmap.finnet.com.br)

## Instruções para customização do mapa/split ou alteração de código dos serviços:

1. Deverá ser criada uma **branch** do projeto:

Caso não tenha o repositório local (máquina do dev):
```
git clone https://gitlab.com/finnet-sa/edi/fontes/nome-do-mapa.git
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

3. Solicitar o **merge request** na branch **master**:

```
git push --set-upstream origin nome-da-branch -o merge_request.create -o merge_request.target=master
```

O *merge request* pode ser feito via **GitLab** também, para isso, executar somente o *push*:
```
git push

```

4. Solicitar a aprovação do *merge request* por um usuário com perfil **Maintainer**.

5. Após aprovação, o próprio usuário que solicitou o *merge request* pode realizar o *merge* na **branch master** via GitLab mesmo.
