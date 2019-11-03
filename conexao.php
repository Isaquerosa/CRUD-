<?php

/**
 * 
 * @return \PDO  
*/


function conexao(){
  try {
       $conexao = new PDO("mysql:host=localhost; charset=utf8; dbname=cadastro", "root", "");
        return $conexao;
    }catch (PDOException $erro) {
    echo "Erro na conexão". $erro -> getMessage();
    }
}


?>