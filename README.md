### Comandos para criar o arquivo README at� o Push###
 
touch README.md                                                - O seguinte comando cria um arquivo e sua extens�o.
git init                                                       - Comando que inicia e cria a extens�o .git
git add README.md                                              - Comando que adiciona o arquivo ao estado de pronto pra                                                                  commitar
git commit -m 'Texto que identifica esse commit'               - Realiza o commit na sua totalidade
git remote add origin  https://github.com/nome_do_git/git-nome_do_reposit�rio.git
vim .git/config                                                - Este comando abre o arquivo com as configura��es do git

git checkout -b nom_do_branch                                  - Comando que cria um branch mais voc� j� possui um o master
git push origin nome_do_branch                                 - Comando que empurra o branch para o reposit�rio remoto
git checkout -b nome_do_branch_local origin/nome_do_branch     - Comando que cria um branch local e recebe os dados do branch remoto

###Fase 2 do Projeto###

Criando release 0.1.0 do Arquivo README.md

Comandos: OBS O Branch deve ser o Master

git tag numero_da_vers�o -> 0.1.0                              - Comando para criar uma tag
git tag -l                                                     - Lista quantas tags j� foram criadas
git push origin master  --tags                                 - Coamando para subir uma tag no github criando um release
git tag -d 0.1.0                                               - Comando para remover tags locais
git push origin :refs/tags/0.1.0                               - Comando para remover tags remotas                                   
### Fase 2.1 do Projeto###

Criando um reposit�eio BARE

Comandos:

mkdir nome_do_bare                                            - Comando que cria um reposit�rio
cd    nome_do_bare                                            - Comando que acessa um direto
git init --bare                                               - Comando que inicializa e cria um reposit�rio tipo bare

### Fase 2.1.1 do Projeto###

Craindo link com reposit�rtio remoto apontando para o Bare

git remote add local ssh://local/host/Users/cassiano/gitcode/aulagit.git master -Descri��o acima.
