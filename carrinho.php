<?php
//session_start();
include('verifica_login.php');
include('conexao.php');
/*$id_produto = $_GET['id_produto'];

$result_produtos = "SELECT * FROM produto WHERE id_produto = '$id_produto'";
$resultado = mysqli_query($conexao, $result_produtos);
$row_produtos = mysqli_fetch_assoc($resultado);*/

     if(!isset($_SESSION['carrinho'])){
         $_SESSION['carrinho'] = array();
     }

     if(isset($_GET['acao'])){

        //ADICIONAR AO CARRINHO
        if($_GET['acao'] == 'add'){
            $id_produtos = intval($_GET['id_produto']);
            if(!isset($_SESSION['carrinho'][$id_produtos])){
                $_SESSION['carrinho'][$id_produtos] = 1;
            }else{
                $_SESSION['carrinho'][$id_produtos] += 1;
            }
        }
     }
     
     
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Carrinho | Hot River Sales</title>
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
								<li><a href="index.php">Menu</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
     
    <form action="operacao_car.php" method="post" >
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a>MENU</a></li>
				  <li class="active">Carrinho</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Preço</td>
							<td class="quantity">Quantidade</td>
							<td class="total">Subtotal</td>
							<td></td>
						</tr>
					</thead>
                    <form action="?acao=up" method="post">
					<tbody>
                        <?php
                            if(count($_SESSION['carrinho']) == 0){
                                echo '<tr><td class="cart_product">Não há produto no carrinho</td></tr>';
                            } else{
                                foreach($_SESSION['carrinho'] as $id_produtos => $qtd){
                                    //$id_produto = $_GET['id_produto'];

                                    $result_produtos = "SELECT * FROM produto WHERE id_produto = '$id_produtos'";
                                    $resultado = mysqli_query($conexao, $result_produtos);
                                    $row_produtos = mysqli_fetch_assoc($resultado);

                                    //$nome_produto = $row_produtos['nome_produto'];
                                    //$preco = number_format($row_produtos['preco'], 2, ',', '.');
                                    // $key = isset($key[1]) ? $key[1] : null;         $subtotal = number_format($row_produtos['preco'] * $qtd, 2, ',', '.');
                                    //$subtotal = number_format($row_produtos ['preco']* $qtd, 2, ',', '.');
                                    //$total += $subtotal ;
                              
                        ?>
						<tr>
							<td class="cart_product">
								<a href=""><img src="imagens/produtos/<?php echo $row_produtos['imagem']; ?>" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a name="produto" href=""><?php echo $row_produtos ['nome_produto']?></a></h4>
                                
							</td>
							<td class="cart_price">
								<p>R$<?php echo $row_produtos ['preco']?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									
									<input class="cart_quantity_input" type="text" name="quantidade" value="<?php echo $qtd?>" autocomplete="off" size="2">
									
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?php echo number_format($row_produtos ['preco']* $qtd, 2, ',', '.')?></p>
							</td>
                            <?php   }
                            }
                            ?>
						</tr>

						

					</tbody>
                    </form>
				</table>
			</div>
		</div>
	</section>

	<section id="do_action">
        <form>
		<div class="container">
			<div class="heading">
				<h3>Próxima Etapa</h3>
				
			</div>
			<div class="row">
			
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Total <span name="produto">R$<?php echo number_format($row_produtos ['preco']* $qtd, 2, ',', '.')?></span></li>
						</ul>
							<a type="submit" class="btn btn-default check_out" href="">Finalizar Compra</a>
					</div>
				</div>
			</div>
		</div>
                        
	</section>
    </form>

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