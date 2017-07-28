<?php
	
	session_start();

	if(!isset($_SESSION['usuario'])){
		header('Location: index.php?erro=1');
	}

	require_once('db.class.php');

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$id_usuario = $_SESSION['id_usuario'];



	

?>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Vendas Ninja</title>
		
		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	
		

	</head>

	<body>

		<!-- Static navbar -->
	    <nav class="navbar navbar-default navbar-static-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <img src="imagens/vendas_ninja_.png" />
	        </div>
	        
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="sair.php">Sair</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>


	    <div class="container">
	    	<div class="col-md-3">
	    		<div class="panel panel-default">
	    			<div class="panel-body">
	    				<h4><?= $_SESSION['usuario'] ?></h4>

	    				<hr />
	    				
	    				
	    			</div>
	    		</div>
	    	</div>
	    	
	    	<div class="col-md-6">
	    		<div class="panel panel-default">
	    			<div class="panel-body">
					<b><p>Download do E-book:
					<a href="E-book.pdf"><button>Download E-book</button></a></p><br/>
					<p>Tabela dinâmica para ajudar o vendedor a controlar as vendas mensalmente.Ao lado da planilha haverá uma tabela dinâmica automatizada para transformar em gráfico os dados da planilha:  <a href="tabdinamica.xlsx"><button>Tabela dinamica</button></a></p></br><p>A planílha "estimativa x retorno " é específica para vendedores que trabalham com mídia online.Uma ajuda quando o contato for diretamente com o "lead". A planílha preenche o quanto o lead está disposto a investir e já consegue saber o custo por clique, além de conseguir fazer um arquivo de palavras chave do Google e arquivar o quanto está custando cada palavra.
				<a href="estimativaXretorno.xlsx"><button>Estimativa X Retorno</button></a></br><br/>
				 A planilha " controle de vendas " é para ajudar o vendedor a fazer o controle das vendas por trimestre. Ele coloca os produtos vendidos e o valor do produtos . 
				<a href="Controle de Vendas.xlsx"><button>Controle de Vendas</button></a></br></br>
				A planilha " Comissão e Vendas" ele vai controlando as vendas e pode colocar a porcentagem de comissão que ele terá por casa venda e no final ele saber quando ira receber de fato em reais.
				<a href="COMISSÃO E VENDAS.xlsx"><button>Comissão e vendas</button></a>
				
	    			</b>	
	    			</div>
	    		</div>

	    		<div id="tweets" class="list-group"></div>

			</div>
			<div class="col-md-3">
				<div class="panel panel-default">
					<div class="panel-body">
						<h4>Escolha qual download quiser! :)</h4>
					</div>
				</div>
			</div>
		</div>


	    </div>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
	<script>
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

 ga('create', 'UA-103399508-1', 'auto');
 ga('send', 'pageview');

</script>
</html>