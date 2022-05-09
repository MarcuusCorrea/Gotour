<?php
    require_once('../../conexao.php');

    $nome = $_GET['nome']; // faz o mesmo para outros campos
/*
comandos sql interessantes

DELETE FROM <tabela>

CREATE TABLE <nome_da_tabela>(<Campos e tipos>)

SELECT <campos> FROM <nome_da_tabela>

tem condições
WHERE <condição>

exemplo
SELECT <campos> FROM <nome_da_tabela> WHERE <campo> = <valor>

exemplo 2
SELECT nome FROM Pessoa WHERE nome LIKE '%MARCOS%'

*/


    $query = 'insert into teste(nome) values("'.$nome.'")';
    $result = $PDO->query( $query );
    $rows = $result->fetchAll();
    print ("Foi cadastrado no banco de dados")
   

?>