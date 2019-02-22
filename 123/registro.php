<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>Registro de usuarios</title>
</head>
<body>
	<?php 
	if(isset($_GET['error'])) {
		$error = $_GET['error']; 
		if($error == "si") {
			$mensaje = "El usuario existe";

		}
	} else {
		// http://localhost:8080/proyecto/registro.php
		$mensaje = NULL;
	}

	?>


	<div class="container">
	
		<div class="row">
			<div class="col-12">
				<form method="post" action="registrousuario.php">
				<div class="form-group">
					Usuario: 
					<input type="text" name="usuario" class="form-control">
	
				</div>
				<div class="form-group">
					Contraseña: 
					<input type="password" name="password" class="form-control">
					
				</div>
				<button type="submit" class="btn btn-dark btn-block">Registrar</button>
			</form>
			</div>
			<div class="alert alert-primary" role="alert">
  				<?php 

  					echo $mensaje;
  				?>
			</div>
		</div>

	</div>
</body>
</html>