<?php

include "./conexao.php";

if (isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["cidade"]) && isset($_POST["uf"])){

$con = getConnection();

$sql = "INSERT INTO pessoas(nome, email, cidade, uf)VALUES(?,?,?,?)";

$stmt = $con -> prepare($sql);
$stmt = bindParam(1, "nome");
$stmt = bindParam(2, "email");
$stmt = bindParam(3, "cidade");
$stmt = bindParam(4, "uf");

if ($stmt -> execute()){
    echo "Dados cadastrados com sucesso!";
}else {
    echo "Erro ao cadastrar!!";
};

    };

    

?>