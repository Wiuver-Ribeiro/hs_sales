<?php
include("conexao.php");

$produto = mysqli_real_escape_string($conexao, trim($_POST['produto']));
$preco = mysqli_real_escape_string($conexao, trim($_POST['preco']));
$quantidade = mysqli_real_escape_string($conexao, trim($_POST['quantidade']));
$cliente = $idusuario;



$sql = "INSERT INTO compra (produto, preco, quantidade_prod, usuario) VALUES ('$produto', '$preco', '$quantidade', '$cliente')";
$resultado = mysqli_query($conexao, $sql) or die (mysqli_error($conexao));

$conexao->close();
header('location: index.php');
    exit;




?>