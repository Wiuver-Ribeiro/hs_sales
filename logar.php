<?php
session_start();
include("conexao.php");


$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select id_usuario, email FROM usuario WHERE email = '{$email}' and senha = '{$senha}'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['email'] = $email;
    header('location: index.php');
    exit();
} else {
    $_SESSION['nao_autenticado'] = true;
    header('location: login.php');
    exit();
}

?>
