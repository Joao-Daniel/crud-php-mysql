<?php

include 'conexao.php';

$id = $_POST['id'];
$descricao = $_POST['descricao'];
$marca = $_POST['marca'];
$estoque = $_POST['estoque'];
$preco = $_POST['preco'];

$recebendo_cadastros = "UPDATE 
produtos
SET nome = '$descricao', marca = '$marca', estoque = '$estoque', preco = 'preco'
WHERE id = '$id' ";
$query_cadastros = mysqli_query($connx, $recebendo_cadastros);

header('location: listagem.php');

?>