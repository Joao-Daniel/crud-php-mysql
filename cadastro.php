<?php

include 'conexao.php';

$descricao = $_POST['descricao'];
$marca = $_POST['marca'];
$estoque = $_POST['estoque'];
$preco = $_POST['preco'];

$recebendo_cadastros = "INSERT INTO
produtos
VALUES ('$id','$descricao','$marca','$estoque','$preco')";
$query_cadastros = mysqli_query($connx, $recebendo_cadastros);

header('location: listagem.php');

?>