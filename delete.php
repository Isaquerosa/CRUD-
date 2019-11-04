<?php

include "./conexao.php";

$con = conexao();

$sql = "DELETE FROM pessoas WHERE id = :id";

$id = "4";

$stmt = $con -> prepare($sql);
$stmt -> bindParam(":id", $id);

if ($stmt -> execute()){
    echo "Deletado com sucesso";
}else {
    echo "Erro ao deletar";
};





?>