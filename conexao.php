<?php

/**
 * 
 * @return \PDO  
*/


function conexao(){
  try {
       $conexao = new PDO("mysql:host=localhost; dbname=cadastro", "root", "");
        return $conexao;
    }catch (PDOException $erro) {
    echo "Erro na conexão". $erro -> getMessage();
    }
}


?>