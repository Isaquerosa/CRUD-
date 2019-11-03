<?php

include "./conexao.php";

$con = conexao();

// Selecionar e ler dados

$sql = "SELECT * FROM pessoas";

$stmt = $con -> prepare($sql);
$stmt -> execute();

$result = $stmt -> fetchAll();

foreach($result as $value){
    echo "Descrição: ".$value["nome"]."<br>";
};

?>