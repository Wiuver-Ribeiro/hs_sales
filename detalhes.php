<?php
//session_start();
include('verifica_login.php');
include('conexao.php');
$id_produtos = $_GET['id_produto'];

$result_produtos = "SELECT * FROM produto WHERE id_produto = '$id_produtos'";
$resultado = mysqli_query($conexao, $result_produtos);
$row_produtos = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Produtos | Hot River Sales</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	
</head>

<body>
	<header id="header">
		<div class="header-middle">
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
						<a href="index.html"><img src="imagens/home/logoa.png" width="189" height="59"/></a>
						</div>
					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""></i><?php echo $_SESSION['email'];?></a></li>
								<li><a href="carrinho.php"></i> Carrinho</a></li>
								<li><a href="logout.php"></i> Logout</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	
		<div class="header-bottom">
			<div class="container">
				<div class="row">
					<div class="col-sm-9">			
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Hot River Sales</h2>
						<div class="panel-group category-products">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a>Aqui você encontra:</a>
									</h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a>-Variedade</a>
									</h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a>-Preço Baixo</a>
									</h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a>-Bom Atendimento</a>
									</h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a>-E Muito Mais</a>
									</h4>
								</div>
							</div>
						</div>					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="product-details">
						<div class="col-sm-5">
							<div class="view-product">
								<img src="imagens/produtos/<?php echo $row_produtos ['imagem']?>" alt="" />
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information">
								<h2><?php echo $row_produtos ['nome_produto']?></h2>
								<span>
									<span>Preço: R$<?php echo $row_produtos ['preco']?></span>
									<label>Quantidade em estoque:</label>
									<input type="text" value="<?php echo $row_produtos ['quantidade']?>" />
									<a class="btn btn-default cart" href="carrinho.php?acao=add&id_produto=<?php echo $row_produtos['id_produto']; ?>" >Adicionar ao carrinho</a>
									
								</span>
								<p><b>Categoria:</b> <?php echo $row_produtos ['categoria']?></p>
								

							</div>
						</div>
						
					</div>
					
					<div class="category-tab shop-details-tab">
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a >Detalhes do Produto</a></li>
							</ul>
						</div>
						<div class="tab-content">							
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									
									<p><?php echo $row_produtos ['descricao']?></p>
									
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer">
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © Hot River Sales</p>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>