<?php

include "./conexao.php";

$con = conexao();

// Validação de dados

if (isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["cidade"]) && isset($_POST["uf"])){

$nome = $_POST["nome"];
$email = $_POST["email"];
$cidade = $_POST["cidade"];
$uf = $_POST["uf"];


// Inserção de dados

$sql = "INSERT INTO pessoas(nome, email, cidade, uf)VALUES(?,?,?,?)";

$stmt = $con -> prepare($sql);
$stmt -> bindParam(1, $nome);
$stmt -> bindParam(2, $email);
$stmt -> bindParam(3, $cidade);
$stmt -> bindParam(4, $uf);

if ($stmt -> execute()){
    echo "Dados cadastrados com sucesso!";
}else {
    echo "Erro ao cadastrar!!";
};

};

    

?>