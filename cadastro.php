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
	
		<div class="header-bottom">
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
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
						<h2>Cadastrar</h2>
						<form action="cadastrar.php" method="POST">
							<label>Nome</label>
							<input name="nome" type="text" placeholder="Digite seu Nome" />
							<label>Email</label>
                            <input name="email" type="text" placeholder="Digite seu Email" />
                            <label>Senha</label>
                            <input name="senha" type="password" placeholder="Digite sua Senha" />
							<a href="login.html">
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