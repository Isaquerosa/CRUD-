<?php 

include "./conexao.php";

$con = conexao();

// Fazer alterações nos dados

$sql = "UPDATE pessoas SET nome = :nome, email = :email, cidade = :cidade, uf = :uf WHERE id = :id";

$nome = "Isaque";
$email = "isaquerosa972@gmail.com";
$cidade = "Guaíba";
$uf = "rs";
$id = "1";

$stmt = $con -> prepare($sql);
$stmt -> bindParam(":nome", $nome);
$stmt -> bindParam(":email", $email);
$stmt -> bindParam(":cidade", $cidade);
$stmt -> bindParam(":uf", $uf);
$stmt -> bindParam(":id", $id);

if ($stmt -> execute()){
    echo "Atualizado com sucesso";
}else {
    echo "Erro ao atualizar";
};
?>