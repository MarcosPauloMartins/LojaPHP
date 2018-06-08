<?php session_start()?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Globla Informática</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./_support/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="./_support/bootstrap/css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="./_support/bootstrap/js/jquery.mask.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bd-navbar navbar-form navbar-left">
		<a class="navbar-brand" href="./"><img
			style="max-width: 180px;" src="./_support/img/Global.png" /></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse"
			data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
			aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<a class="nav-item nav-link active" >Inicio <span
					class="sr-only">(current)</span></a>


				<div class="btn-group">
					<button type="button" class="btn dropdown-toggle bg-danger text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="?controller=clientes&action=filtrar">Cadastro Cliente / Lista Clientes</a>
						<a class="dropdown-item" href="?sair=1" >Sair</a>
					</div>
				</div>

			</div>
		</div>
	</nav>
</body>
</html>