<?php
error_reporting(0);
session_start();
 if(isset($_SESSION["usuario"])) header("location:principal.php"); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>
			:: Gestion de Pedidos ::
		</title>
		<!-- Bootstrap core CSS -->
		<link href="../css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="../css/signin.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">

			<form class="form-signin" role="form" method='POST'
      action="../controlador/login_verificar.php">

				<h2 class="form-signin-heading">
					Ingreso al Sistema
				</h2>
				<input type="email" name="email" class="form-control" placeholder="Email"  required autofocus>

				<input type="password" name="clave" class="form-control" placeholder="Contraseña" required>
				<button class="btn btn-lg btn-primary btn-block" type="submit">
					Ingresar
				</button>
			</form>

		</div>
	</body>
</html>