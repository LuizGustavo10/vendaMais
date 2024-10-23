<?php
include '../conexao.php';

//recebendo os dados do front-end
$nome = $_REQUEST['nome'];
$cidade = $_REQUEST['estado'];
$cep = $_REQUEST['cep'];

$sql = "INSERT INTO cidade(nome, estado, cep) VALUES ('$nome', '$estado', '$cep')";

//executar código SQL
$resultado = mysqli_query($conexao, $sql);

header("Location: ../cidade.php");

?>
