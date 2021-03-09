<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Login | Hot River Sales</title>
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
						<h2>Fazer Login</h2>
						<form action="logar.php" method="POST">
							<label>Email</label>
							<input name="email" type="text" placeholder="Digite seu Email" />
							<label>Senha</label>
							<input name="senha" type="password" placeholder="Digite sua Senha" />

							
								<span><a href="cadastro.php">Criar cadastro</a></span>
								<span><a href="">   ||  </a></span>
								<span><a href="login_adm.php">Administração</a></span>
							<button type="submit" class="btn btn-default" >Login</button>
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