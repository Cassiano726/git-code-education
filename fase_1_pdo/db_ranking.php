<?php
/*1° Criar a conexão dentro do try catch para possíves erros kkkkk*/
try {

    $conexao_school = new \PDO("mysql:host=localhost;dbname=school", "root", "jcs726");/*Ok! Até aqui tudo certo*/
    
    
    /*Criando a variável $query que será responsável por receber as consultas SQL e passar pro 
      banco de dados rodar    */
    
    //$query = "show tables";
    
     //$query = "select * from alunos";
    
     //   $query = "insert into alunos(nome,nota) values ('Jeremias ',10),"
     //           . "('Silva',9),('Claudia',7),('Pedro',6),('Ana',8),('Angela',5),('Cassiani',7),('Silvia',5),('Juliana',4),('Bruna',2)";
     
     /*Query que mostra todos os alunos na lsita de alunos*/
     //$query="SELECT nome FROM alunos";
    /*Criando a variavel que mostrará o resultado das consultas junto ao código: = $conexao_school->query($query) */
    //$stmt = $conexao_school->query($query);
    
    
    /*Consulta que mostra os três melhores alunos por nota*/
    $query ="SELECT nome,nota FROM ALUNOS WHERE nota>7";
    /*Criando a variavel que mostrará o resultado das consultas junto ao código: = $conexao_school->query($query) */
    $stmt = $conexao_school->query($query);
    
    while($linha= $stmt->fetch()){
        $nomeA = $linha["nome"];
        $notaA = $linha["nota"];
        echo"<tr>";
        echo "<td>$nomeA</td>";
        echo "<td>$notaA</td>";
        echo"</tr>";
    }
    
    $stmt=null;
    
    /*crianod variável simples para apresentação no navegador. chamando a função (->fetchALL(PDO::FETCH_ASSOC)) com parametro*/
    //$show_views = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //$show_views = $stmt->fetch(PDO::FETCH_ASSOC);
    //print_r( $show_views);
    
     /*usando laço de repetição foreach
    foreach($conexao_school->query($query) as $alunos){
        echo $alunos['nota'].'<br>';
    };*/
   
    
    
    
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
    echo "Conexão não realizada.. Erro".$exc->getCode();
}

