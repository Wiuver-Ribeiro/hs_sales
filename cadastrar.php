<?php
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));

$sql = "select count(*) as bdloja from usuario where email = 'email'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['bdloja'] == 1){
    $_SESSION['usuario_existe'] = true;
    header('location: cadastro.php');
    exit();
}

if ($nome == ""){
    echo "digite um nome";
} else if ($email == ""){
    echo "digite um email";
} else if ($senha == ""){
    echo "digite uma senha";
} else {

$sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
$resultado = mysqli_query($conexao, $sql) or die (mysqli_error($conexao));

}
$conexao->close();
header('location: login.php');
    exit;
?>