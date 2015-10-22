### Comandos para criar o arquivo README até o Push###
 
touch README.md                                                - O seguinte comando cria um arquivo e sua extensão.
git init                                                       - Comando que inicia e cria a extensão .git
git add README.md                                              - Comando que adiciona o arquivo ao estado de pronto pra                                                                  commitar
git commit -m 'Texto que identifica esse commit'               - Realiza o commit na sua totalidade
git remote add origin  https://github.com/nome_do_git/git-nome_do_repositório.git
vim .git/config                                                - Este comando abre o arquivo com as configurações do git

git checkout -b nom_do_branch                                  - Comando que cria um branch mais você já possui um o master
git push origin nome_do_branch                                 - Comando que empurra o branch para o repositório remoto
git checkout -b nome_do_branch_local origin/nome_do_branch     - Comando que cria um branch local e recebe os dados do branch remoto
