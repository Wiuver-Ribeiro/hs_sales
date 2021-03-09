<?php
//session_start();
include('verifica_login.php');      
include('conexao.php');

$pesquisar = $_POST['pesquisar'];
$result_produtos = "SELECT * FROM produto WHERE nome_produto LIKE '%$pesquisar%'";
$resultado = mysqli_query($conexao, $result_produtos);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
	<title> HOME | Hot River Sales</title>
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
							<a href="index.html"><img src="imagens/home/logoa.png" width="189" height="59"  alt="" /></a>
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
                        <div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">Menu</a></li>
                                    </ul>
                                </li> 
							</ul>
						</div>
					</div>
					</div>
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
						<div class="panel-group category-products" id="accordian">
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
					<div class="features_items">
						<h2 class="title text-center">Destaques</h2>
                        <?php while($row_produtos = mysqli_fetch_assoc($resultado)){ ?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="produtoinfo text-center">
											<img src="imagens/produtos/<?php echo $row_produtos['imagem']; ?>" alt="" />
											<h2><?php echo 'R$'. $row_produtos ['preco'] ?></h2>
											<p><?php echo $row_produtos ['nome_produto'] ?></p>
											<a class="btn btn-default add-to-cart" href="detalhes.php?id_produto=<?php echo $row_produtos['id_produto']; ?>" >Ver Detalhes</a>
										</div>
								</div>
							</div>
						</div>
                        <?php }?>
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