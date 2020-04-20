<!DOCTYPE html>
<html lang="es">
<head>
	<!--Barra de navegacion-->
	<?php include('head.php');?>
	<style type="text/css">
		.well{
			background-color: rgba(0,50,50,.5);
			border-color: transparent;
			color: #333333;
			text-align: justify;
			font-size: 14px;
		}
	</style>
	<!--Fin-->
</head>
<body>
	<!--Barra de navegacion-->
	<header>
	
	<div class="container">
		<div class="row">
			<div class="col-xs-4"></div>
			
			<div class="col-xs-2">
				<div class="thumbnail">
					<div class="caption">
						<a target="_blank" title="Siguenos en Facebook" href="https://www.facebook.com/francy.camargo.355"><img alt="Facebook" src="img/logos/facebook-logo.png" border=0></a>
					</div>
				</div>
			</div>
			<div class="col-xs-2">
				<div class="thumbnail">
					<div class="caption">
						<a target="_blank" title="siguenos en Instagram" href="https://www.instagram.com/estetica_spa_unas_body_slim/"><img alt="Instagram" src="img/logos/instagram-logo.png" border=0></a>
					</div>
				</div>
			</div>
		</div>
	<div class="row"><br></div>
		<div class="row">
		<div class="col-xs-3"></div>
			<div class="col-xs-6 well">
			<form class="form-horizontal" action="correo.php" method="post">
				<div class="form-group">
					<label for="inputName" class="control-label col-xs-2">Nombre:</label>
					<div class="col-xs-10">
						<input type="name" class="form-control" placeholder="Nombre" name="nombre" required="required">
					</div>
				</div>
				<div class="form-group">
					<label for="inputName" class="control-label col-xs-2">Apellido:</label>
					<div class="col-xs-10">
						<input type="name" class="form-control" placeholder="Apellido" name="apellido" required="required">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail" class="control-label col-xs-2">Email:</label>
					<div class="col-xs-10">
						<input type="email" class="form-control" placeholder="Email" name="email" required="required">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-xs-3">Mensaje:</label>
					<div class="col-xs-9">
						<textarea rows="3" class="form-control" placeholder="" name="contenido" required="required"></textarea>
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-offset-2 col-xs-10">
						<button type="submit" class="btn btn-primary">Enviar</button>
					</div>
				</div>
			</form>
			</div>
			<div class="col-xs-6-offset-3">
				
			</div>
			
		</div>
	</div>
	</header>
	<?php include('nav.php');?>
	<?php include('script.php');?>
</body>
</html>
