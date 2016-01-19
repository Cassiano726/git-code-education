<?php session_start() ?>


<?php

unset($_SESSION["logado"]); /* Matando a sessão e sua variável armazenada */
header("Location:index.php?page=lista_clientes"); /* Direcionando internamente com o php para a página index... */
echo " Fim da sessão!!!"; 


