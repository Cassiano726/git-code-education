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
