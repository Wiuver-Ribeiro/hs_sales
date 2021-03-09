<?php
include("conexao.php");

$nome_produto = mysqli_real_escape_string($conexao, trim($_POST['nome_produto']));
$preco = mysqli_real_escape_string($conexao, trim($_POST['preco']));
$categoria = mysqli_real_escape_string($conexao, trim($_POST['categoria']));
$marca = mysqli_real_escape_string($conexao, trim($_POST['marca']));
$descricao = mysqli_real_escape_string($conexao, trim($_POST['descricao']));
$quantidade = mysqli_real_escape_string($conexao, trim($_POST['quantidade']));

if(isset($_FILES['imagem'])){
    $extensao = strtolower(substr($_FILES['imagem']['name'], -4));
    $imagem = md5(time()) . $extensao;
    $diretorio = "imagens/produtos/";

    move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$imagem);

}

if ($nome_produto == ""){
    echo "digite um nome para o produto";
} else if ($preco == ""){
    echo "digite um preço";
} else if ($categoria == ""){
    echo "digite uma categoria";
} else if ($marca == ""){
    echo "digite uma marca";
} else if ($descricao == ""){
    echo "digite uma descricao";
} else if ($quantidade == ""){
    echo "digite uma quantidade";
} else if ($imagem == ""){
    echo "insira uma imagem";
} else {

$sql = "INSERT INTO produto (nome_produto, preco, categoria, marca, descricao, quantidade, imagem, dados) VALUES ('$nome_produto', '$preco', '$categoria', '$marca', '$descricao', '$quantidade', '$imagem', NOW())";
$resultado = mysqli_query($conexao, $sql) or die (mysqli_error($conexao));


}
$conexao->close();
header('location: cad_produto.php');
    exit;




?>