<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Cadastro Produto | Hot River Sales</title>
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
				</div>
			</div>
		</div>
	</header>
	




	<section id="form">
		<div class="container">
			<div class="row">
				
				<div class="col-sm-4 col-sm-offset-4">
					<div class="login-form">
						<h2>Cadastrar Produto</h2>
						<form action="cadastrar_prod.php" method="POST" enctype="multipart/form-data">
							<label>Nome do Produto</label>
							<input name="nome_produto" type="text" placeholder="Digite o Nome do produto" />
							<label>Preço</label>
                            <input name="preco" type="text" placeholder="Digite o preço do produto" />
                            <label>Categoria</label>
                            <input name="categoria" type="text" placeholder="Digite a categoria do produto" />
							<label>Marca</label>
                            <input name="marca" type="text" placeholder="Digite a categoria do produto" />
                            <label>Descrição</label>
                            <input name="descricao" type="text" placeholder="Digite a descrição do produto" />
                            <label>Quantidade</label>
                            <input name="quantidade" type="text" placeholder="Digite a quantidade em estoque do produto" />
                            <label>Imagem</label>
                            <input type="file" required name="imagem" class="btn btn-success"  accept="image/png, image/jpeg"  multiple /> 
                            <button type="submit" class="btn btn-default">Criar Cadastro</button>	
                            </a>					
						</form>
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